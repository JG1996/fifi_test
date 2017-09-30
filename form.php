<?php
$name = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'Fifi Contact Us'; 
$to = 'jack.george@hotmail.co.uk'; 
$subject = 'Fifi Website Contact';
?>

<?php
    //validation
if(!isset($_POST['name'] || !isset($_POST['email'] || !isset($_POST['comments'])) {
    echo "One or more field has been incorrectly inputted.";
}

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}  
?>
