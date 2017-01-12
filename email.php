<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sending an email</title>
</head>
<body>

<h1>Using a variable and sending an email</h1>

<?php
// set up variables for our email
$to = 'you@domain.com';
$subject = 'Sending email from PHP';
$message = 'Did this actually work??';
//$from = 'rich.freeman@georgiancollege.ca';

// send ourselves an email
mail($to, $subject, $message); //, 'From:' . $from);

// display a message
echo 'Go check your email!';
?>

</body>
</html>
