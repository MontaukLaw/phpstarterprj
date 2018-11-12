<?php
/**
 * Created by PhpStorm.
 * User: zunly
 * Date: 2018/11/10
 * Time: 14:38
 */

if (isset($_POST['font_size'], $_POST['font_color'])) {
    if ((!empty($_POST['font_size'])) && (!empty($_POST['font_color']))) {
        print "你的输入是font size: " . $_POST['font_size'];
        setcookie('font_size', $_POST['font_size']);
        setcookie('font_color', $_POST['font_color']);
        setcookie('validate_demo', 'shit',1541868429,"/myphp/","localhost");

        //setcookie('validate_demo', 'shit');
        $msg = '<p>你的设置已经输入, 按<a href="view_settings.php">这里</a>可以看到配置';

    } else {
        print "输入为空";
    }
    // setcookie('font_size', $_POST['font_size']);
    //setcookie('font_color', $_POST['font_color']);
    //$msg = '<p>你的设置已经输入, 按<a href="view_settings.php">这里</a>可以看到配置';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>
        Customize Your Settings
    </title>
<body>
<?php
if (isset($msg)) {
    print $msg;
}
?>
<p>Use this form to set your preferences:
</p>
<form action="customize.php" method="post">
    <select name="font_size">
        <option value="">Font Size</option>
        <option value="xx-small">xx-small</option>
        <option value="x-small">x-small</option>
        <option value="medium">medium</option>
        <option value="large">large</option>
        <option value="x-large">x-large</option>
        <option value="xx-large">xx-large</option>
    </select>
    <select name="font_color">
        <option value="">Font Color</option>
        <option value="gray">Gray</option>
        <option value="green">Green</option>
        <option value="blue">Blue</option>
        <option value="red">Red</option>
        <option value="black">Black</option>
    </select>
    <input type="submit" name="submit" value="Set My Preferences"/>

</form>
</body>

</head>

</html>
