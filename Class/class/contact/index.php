<?php
session_start();
$pageName = "contact";
//Check to see if the form has been submitted, if so use php to validate the inputs
//This check sees if the submit key exists in the POST object, if "true" the form has been submitted
if ($_POST['submit']) {

    // Create an empty error array to store any found errors
    $errors = array();

    //Check the name field using using the empty function
    if (empty($_POST['fName'])) {
        $errors['fname'] = 'The first name field is empty, please enter your first name';
    }

    //Check the name field using using the empty function
    if (empty($_POST['lName'])) {
        $errors['lname'] = 'The last name field is empty, please enter your last name';
    }

    //Check the name field using the empty function
    if (empty($_POST['subject'])) {
        $errors['subject'] = 'The subject is empty, please enter a subject.';
    }

    //Check the message field using the empty function
    if (empty($_POST['message'])) {
        $errors['message'] = 'The message field is empty, please enter your message';
    }

    //Check the email field
    if (empty($_POST['email'])) {
        $errors['email'] = 'The email field is empty, please enter a email address';
    }

    //Check the length of the email address -- x@x.xx - after trimming any empty spaces that may exist
    $tempEmail = trim($_POST['email']);
    if (strlen($tempEmail) < 6) {
        $errors['emaillength'] = 'The email provided is too short, please enter a valid email address';
    }

    //Check the form of the email address using a regular expression
    $checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
    if (!preg_match($checkEmail, $tempEmail)) {
        $errors['invalidform'] = "Please provide a valid email address";
    }

    //checks the security code field
    if ($_SESSION['security_code'] != $_POST['cap_code'] && !empty($_SESSION['security_code'])) {
        $errors['security'] = 'Sorry, your entered security code does not match the security image.';
    }


//If there are no errors stored in the errors array proceed to assemble and then send the email message
    if (!$errors) {
        $to = 'me@brandonsandall.com'; //Your email address goes here
        $subject = $_POST['subject'];
        $message = "First name: " . $_POST['fName'] . "\n";
        $message .= "Last name: " . $_POST['lName'] . "\n";
        $message .= "Email: " . $_POST['email'] . "\n\n";
        $message .= $_POST['message'];
        $from = 'From:' . $_POST['email'];
        mail($to, $subject, $message, $from);
        // After the message is sent create a confirmation message to display
        $successmessage = "Thank you, " . $_POST['fName'] . ". I'll get back to you as soon as I can.";
    }
}
?>
<!DOCTYPE html>
<!-- This is my contact page -->
<html>
    <head>
        <meta charset="utf-8">
        <title>YOLO|Contact</title>
        <link rel="stylesheet" type="text/css" href="../../css/wireframe.css">
    </head>
    <style type="text/css">
        body {
        background-image:url("/images/background.png");
        background-repeat:repeat;
        background-attachment:fixed;
        }
    </style>
    <body>
        <h2>Contact Me</h2>
            <?php
                if ($errors) {
                    echo '<div>';
                    echo '<ul class="warning unstyled">';
                    foreach ($errors as $alert) {
                    echo "<li class='label-important'>$alert</li>";
                    }
                    echo '</ul>';
                    echo '</div>';
                } elseif ($successmessage) {
                    echo "<p class=\"label-success\">" . $successmessage . "</p>";}
            ?>
      		<form method="post" action="index.php" id="contactform">
  	 	       <fieldset class="control-group">
  	 	           <legend>All Fields Required</legend>
      	 	       <input type="text" name="fName" id="fName" size="25" required placeholder="First name" value="<?php if ($_POST['fName']) { echo $_POST['fName'];}?>">
      	 	       <input type="text" name="lName" id="lName" size="25" required placeholder="Last name" value="<?php if ($_POST['lName']) {echo $_POST['lName']; } ?>">
      	 	       <input type="email" name="email" id="email" size="30" required placeholder="Email address" value="<?php if ($_POST['email']) {echo $_POST['email']; }?>">
      	 	       <input type="text" name="subject" id="subject" size="46" required placeholder="Subject here" value="<?php if ($_POST['subject']) {echo $_POST['subject'];}?>"><br>
      	 	       <textarea name="message" id="message" cols="80" rows="10" required placeholder="Message here"><?php if ($_POST['message']) {echo $_POST['message'];}?></textarea><br>
      	 	       <img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image">
      	 	       <!-- <label for="cap_code">Security Code:</label> --><input id="cap_code" placeholder="Security Code" required name="cap_code" type="text" size="6"><br><br>
      	 	       <input type="submit" class="btn-large btn-inverse" name="submit" id="submit" value="Send Message">
      	 	   </fieldset>
  		    </form>
        <footer style="text-align: center">
            <a href="http://www.brandonsandall.com/assignments/siteplan.php" style="color:black">Site Plan</a> |
            <a href="http://www.brandonsandall.com/assignments/styleguide.php" style="color:black">Style Guide</a> |
            <a href="http://www.brandonsandall.com/colophon" style="color:black">Colophon</a> |
            <a href="http://www.brandonsandall.com/class/contact" style="color:black">Contact</a> |
            <?php echo "Last updated: " . date("M d, Y, h:i:s a", getlastmod()) ?>
        </footer>
    </body>
</html>