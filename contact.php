<?php
if($_POST["submit"]) {
    $to = "marktran@stanford.edu, markmtran1@gmail.com"
    $name = $_POST["name"]
    $email = $_POST["email"]
    $phone = $_POST["phone-number"]
    $subject = $_POST["subject"]
    $message = $_POST["message"]
    
    $confirm = "<p>Your message has been sent, $name!</p>"
    if(mail($to, $subject, $message, "From: $name <$email>\n", "Phone: $phone")) {
        echo "$confirm";
    } else {
        echo "Something went wrong. Please check your entries!"
    }
}
?>