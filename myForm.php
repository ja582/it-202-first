<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
    if(isset($_GET['name'])){
        echo "<p>Hello, " . $_GET['name'] . "</p>";
    }
}

function passwordCheck(){
    if(isset($_POST['password']) && isset($_POST['passwordConfirm'])){
        if($_POST['password'] == $_POST['passwordConfirm']){
            echo "<br>matching passwords<br>";
        }else{
            echo "<br>dont match try again<br>";
            return false;
        }

    }
}
?>
    <html>
    <head></head>
    <body><?php getName();?>
    <form method="POST" action="#">
        <input name="name" type="text" placeholder="Enter your name"/>
        <input name="password" type="password" placeholder="Enter your password"/>
        <input name="passwordConfirm" type="password" placeholder="Enter your password again"/>
        <input type="submit" value="GO"/>
    </form>
    </body>
    </html>
<?php passwordCheck();?>
<?php
if(isset($_GET)){
    echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>