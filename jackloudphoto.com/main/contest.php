<?php

    // ========================= process.php ===============================
    $errors = array();  // array to hold validation errors
    $data   = array();  // array to pass back data

    // validate the variables ========================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['contestEmail']))
        $errors['contestEmail'] = 'required';


// return a response ===========================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        //if there are errors in our array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;

    } else {
        // if there are no errors, process our form, then return a Message
        // show a message of success and provide a true success variables
        $data['success'] = true;
        $data['message'] = 'Success!';

        // EMAIL FORM TO JACK AND SEND A COPY TO THE user
        $to = "miller.stowe@gmail.com"; // this is your Email address
        $from = $_POST['txtEmail']; // this is the sender's Email address
        $subject = "Website Form submission";
        $subject2 = "Copy of your form submission";
        $message = $_POST['contestEmail'] . " would like to be entered to win a free print!";
        $message2 = "Here is a copy of your form submission " .  "\n" . "Email: " . $_POST['contestEmail'];

        $headers = "From: jack@jackloudphoto.com" . "\r\n" .
    "Reply-To: jack@jackloudphoto.com" . "\r\n" .
    "Content-Type: text/html; charset=UTF-8\r\n" .
    "X-Mailer: PHP/" . phpversion();

        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers); // sends a copy of the message to the sender

    }

    echo json_encode($data);

 ?>
