<?php

function InvalidEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        return true;
    }
}

if (isset($_POST)) {
    $email = $_POST["email"];
    $phoneNumber = $_POST["tel"];
    $message = $_POST["msg"];
}

if (InvalidEmail($email)) {
    header("location: https//elhamsalamat.com/?result=failed&msg=invalidemail");
} else {
    $to = "elham_salamat63@yahoo.com";

    $subject = "Email from your portfolio";

    $headers = "From:" . $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=ISO-8859-1\r\n";

    $emailContent = '<html><body><p>';
    $emailContent .= 'This email has been sent by:' . $emeil . '<br>';
    $emailContent .= 'you can reach him on aformentioned email or his phone number:' . $phoneNumber . '<br>';
    $emailContent .= 'Please find his message below</p>';
    $emailContent .= '<p style="text-align: justify;">' . $message . '</p>';

    $mail = mail($to, $subject, $emailContent, $headers);

    if ($mail) {
        header("location: https://elhamsalamat.com");
        exit();
    } else {
        header("location: https://elhamsalamat.com");
        exit();
    }
}
