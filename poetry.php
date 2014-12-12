
<!DOCTYPE html>
<html>
	<title>Hi I'm Yoav</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="bootstrap.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">

<meta charset="UTF-8">
</head>
<body>
<?php 
include("header.php"); 
?>
	<div class = "container2">
        <div class="row">

            <div class="col-lg-8 col-md-12">
            <embed src="Writings/Borrowed_Shirt_no_color.pdf" width="900" height="600">  
            </div>

            <div class="col-lg-4 col-md-12">
            <h4> Any sort of feedback would be excellent! </h4>
            <?php
            error_reporting( error_reporting() & ~E_NOTICE );
            $action=$_REQUEST['action'];
            if ($action=="")
            {
            ?>

        <form  action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="submit">
        Your name:<br>
        <input name="name" type="text" value="" size="30"/><br>
        Your email:<br>
        <input name="email" type="text" value="" size="30"/><br>
        Your message:<br>
        <textarea name="message" rows="7" cols="30"></textarea><br>
        <input type="submit" value="Send email"/>
        </form>

        <?php
            } 
        else     
            {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];

        if (($name=="")||($email=="")||($message==""))
            {
            echo "All fields are required, please fill <a href=\"\">the form</a> again.";
            }

        else{        
            $from="From: $name<$email>\r\nReturn-path: $email";
            $subject="Message sent using your contact form";
            mail("yoavhelfman17@gmail.com", $subject, $message, $from);
            echo "Email sent!";
            }
        }  
        ?>
        </div>

        </div>
    </div>

	</section>
<?php 
include("footer.php"); 
?>
</body>
</html>
