<html>
<head>
    <script>
        function validate(){
            var form = document.forms[0];
            var emailconf = form.emailconfirm.value;
            var email = form.email.value;

            if(email == emailconf){
                form.confirm.className= "noerror";
            }
            else{
                alert("email dont match");
                console.log(email);
                return false;
            }
            if(email == "", emailconf == ""){
                alert("Emails are empty, go back and try again")
                return false;
            }else{
                return true;
            }

            var pw = form.password.value;
            var pwC = form.passwordconfirm.value;
            if(pw == pwC || pw == "", pwC = ""){
                form.confirm.className= "noerror";
            }
            else{
                alert("password dont match");
                console.log(pw);
                console.log(pwC);
                return false;
            }

            var un = form.username.value;
            if(un == ""){
                alert("empty username");
                console.log(un);
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
<form onsubmit="return validate();">

    <input name="email" type="email" placeholder="Enter in e-mail"/>
    <input name="emailconfirm" type="email" placeholder="Confirm the same e-mail"/>
    <input name="password" type="password"/>
    <input name="passwordconfirm" type="password"/>
    <input name="username" placeholder="enter username"/>

    <input type="submit" value="Submit"/>

</form>
</body>
</html>