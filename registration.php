<!DOCTYPE html>
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function checkPasswords(){
    if(isset($_POST['password']) && isset($_POST['confirm'])){
        if($_POST['password'] == $_POST['confirm']){
            echo "<br>Passwords Matched!<br>";
        }
        else{
            echo "<br>Passwords didn't match!<br>";
        }
    }
}
function checkDropDown(){
    if(isset($_POST['picker'])){
        if($_POST['picker'] == '0'){
            echo "<br>you didnt pick an option!<br>";
        } else{
            echo "<br>thank you for choosing<br>";
        }
    }
}

?>
<html>
<head>
    <script>
        function validate(){
            var form = document.forms[0];
            var password = form.password.value;
            var conf = form.confirm.value;
            console.log(password);
            console.log(conf);
            let pv = document.getElementById("validation.password");
            let succeeded = true;
            if(password == conf){

                pv.style.display = "none";
                form.confirm.className= "noerror";
            }
            else{
                pv.style.display = "block";
                pv.innerText = "Passwords don't match";
                //form.confirm.focus();
                form.confirm.className = "error";
                //form.confirm.style = "border: 1px solid red;";
                succeeded = false;
            }
            var email = form.email.value;
            var ev = document.getElementById("validation.email");
            //this won't show if type="email" since browser handles
            //better validation. Change to type="text" to test
            if(email.indexOf('@') > -1){
                ev.style.display = "none";
            }
            else{
                ev.style.display = "block";
                ev.innerText = "Please enter a valid email address";
                succeeded = false;
            }

            return succeeded;
        }
    </script>
    <style>
        input { border: 1px solid black; }
        .error {border: 1px solid red;}
        .noerror {border: 1px solid black;}
        .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: lightgrey;
            min-width: 200px;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: white;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: grey;}
    </style>
</head>
<body>
<div style="margin-left: 50%; margin-right:50%;">
    <form method="POST" action="#" onsubmit="return validate();">
        <input name="name" type="text" placeholder="Enter your name"/>

        <input name="text" type="text" placeholder="name@example.com"/>
        <span id="validation.email" style="display:none;"></span>

        <input type="password" name="password" placeholder="Enter password"/>
        <input type="password" name="confirm" placeholder="Re-Enter password"/>
        <span style="display:none;" id="validation.password"></span>

        <select name="picker">
            <option value="0">Select One</option>
            <option value="1">Dogs</option>
            <option value="2">Cats</option>
        </select>
        <input type="submit" value="Try it"/>
    </form>
</div>
</body>
</html>
<?php checkPasswords();?>
<?php checkDropDown();?>
<?php
if(isset($_POST)){
    echo "<br><pre>" . var_export($_POST, true) . "</pre><br>";
}
?>