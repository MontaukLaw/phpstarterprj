<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>
        Customize Your Settings
    </title>
<body>
<?php
print "font size is ".$_COOKIE['font_size'];
print "</br>";
print "font color is ".$_COOKIE['font_color'];
print "</br>";
print_r($_COOKIE);

print($_COOKIE['expiration']);

print (time());

print "for git";
?>
</body>

</head>

</html>
