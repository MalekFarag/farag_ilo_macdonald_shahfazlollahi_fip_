export default {
    template:`
        <div class="container">
            <form action="">
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="" required>
                
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="" required>
                
                    <button type="submit">Login</button>
                    <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>
                    
                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>      
            
            </form
        
        </div>
    
    `,
    data() {
        return {
            input: {
                username: "",
                password: ""
            },

        }
    },

    methods: {
        login() {
            //console.log(this.$parent.mockAccount.username);
            // debugger;
            if(this.input.username != "" && this.input.password != "") {
                // use the formdata object to collect and send our params
                let formData = new FormData();

                formData.append("username", this.input.username);
                formData.append("password", this.input.username);

                let url = "./includes/index.php?user=true";

                fetch(url, {
                    method: "POST",
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data)
                    // tell the app that we have a successful login
                    //and store the user object that we retrieved

                    //true below means that authentication worked 
                    // data is retrieved from the DB
                    this.$emit("authenticated", true, data[0]);

                    // push user to the sign-up page
                    this.$router.replace({name: "users"});
                })
                .catch((err) => console.log(err));


            } else {
                console.error("input fields cant be blank!")
            }
        }
    }
}