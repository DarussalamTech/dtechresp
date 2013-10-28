<?php

/**
 * Example 1
 * Validate a single Email via SMTP
 */
// include SMTP Email Validation Class


// the email to validate
$email = 'ali.abbas@darussalampk.com';
// an optional sender
$sender = 'user@mydomain.com';
// instantiate the class

$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
$SMTP_Validator->debug = true;
// do the validation
$results = $SMTP_Validator->validate(array($email), $sender);
// view results
echo $email . ' is ' . ($results[$email] ? 'valid' : 'invalid') . "\n";

// send email?
if ($results[$email]) {
    echo "GOOOD";
} else {
    echo 'The email addresses you entered is not valid';
}
?>

