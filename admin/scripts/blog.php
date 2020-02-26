<?php 

function createpost($author, $title, $sub_title, $text, $date){

    $pdo = Database::getInstance()->getConnection();

    $get_user_query = "INSERT INTO tbl_blog (id, author, title, sub_title, text, date) VALUES (NULL, :author, :title, :sub_title, :text, :date);";
        $user_check = $pdo->prepare($get_user_query);
        $user_check->execute(
            array(
                ':author'=>$author,
                ':title'=>$title,
                ':sub_title'=>$sub_title,
                ':text'=>$text,
                ':date'=>$date
            )
        );
    $message = 'This post has been published!';
}