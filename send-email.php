<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "nancywanjiku256@gmail.com"; // Your email
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    mail($to, $subject, $body);
    echo "Message sent!";
}
?>