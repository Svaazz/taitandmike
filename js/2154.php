<!DOCTYPE html>
<html>
<head>
	<title>GOOD JOB!</title>
</head>
<body>
<div align="center">
<p><h1>You've solved the password, now you have to fill this form.</h1></p>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message(Opinion and suggestions):<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    }
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "Please fill in all feilds.";
    }else{
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("tixenk@hotmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }
?>
</div>
</body>
</html>
