<?php


function createuser($username, $name, $email, $password, $ip){
    
    $pdo = Database::getInstance()->getConnection();

     // check user existance
     $check_email_query = 'SELECT COUNT(username) AS num FROM tbl_admins WHERE username = :username'; 
     $user_set = $pdo->prepare($check_email_query);
     $user_set->execute(
         array(
             ':username'=>$username
         )
     );
 
     $row = $user_set->fetch(PDO::FETCH_ASSOC);

     if($row['num'] > 0){
        $message = 'username is already registered';
    }else{

        //phpmailer config
        $mail = new PHPMailer\PHPMailer\PHPMailer();

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure='ssl';
        $mail->Port = 465;
        $mail->SMTPAuth=true;

        $mail->Username='faragmalek14@gmail.com';
        $mail->Password='Malooky14'; // please dont steal my password. I really dont want to change it

        $mail->addAddress($email);
        $mail->setFrom('faragmalek14@gmail.com');
        

        $mail->isHTML(true);
        $mail->Subject='Created Admin Account | HIV AIDS Connection'; 
        $mail->Body='
        <br>

        Thanks for signing up!<br><br>
        Your admin account has been Created!
        <br><br><br>
        ------------------------<br>
        Here are your login credentials!<br>
        Email: '.$username.'<br>
        Password: '.$password.'<br><br>

        Login at domainName.com/admin/login.php <br>
        ------------------------<br>
        <br><br><br>
        Thanks again!<br>
        - The HIV AIDS Connection Team<br><br>
        ';

        if(!$mail->send()){
            $message= $mail->ErrorInfo;
            return 'user creation did not got through';
        }else{
            //encrypt passowrd
            $passEncryp = md5($password);

            //creating user sql query from form details
            $create_user_query = "INSERT INTO tbl_admins (id, username, name, email, password, ip) VALUES (NULL, :username, :name, :email, :password, :ip);";

            $user_signup = $pdo->prepare($create_user_query);
            $user_signup->execute(
                array(
                    ':name'=>$name,
                    ':username'=>$username,
                    ':email'=>$email,
                    ':password'=>$passEncryp,
                    ':ip'=>$ip
                )
            );
            
            redirect_to('index.php');
        }
    }
}
