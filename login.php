<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/10
 * Time: 11:03
 */
print '<h2>登陆表单</h2>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ((!empty($_POST['email'])) && (!empty($_POST['password']))) {
        if ((strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass')) {
            print '<p>You are logged in!</br> Now you can blah blah bla...</p>';
        } else {
            print '<p>email address and password not equals to our request!</p>';
        }

    } else {
        print '<p>Please fill all content!</p>';
    }
} else {
    print '<form action="login.php" method="post"><p>Email address:<input type="text" name="email" size="20"/></p><p>Password:<input type="password" name="password" size="20"/></p><input type="submit" name="submit" value="Log In!"/>
</form>';

}

?>
</body>
</html>