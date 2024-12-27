<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['q-fullname'];
    $email = $_POST['q-email'];
    $location = $_POST['q-loc'];
    $destination = $_POST['q-dest'];
    $cargo_person = $_POST['q-cargo-person'];
    $phone = $_POST['q-phonenumber'];

    $to = "haiderali.47007@gmail.com"; // Email address
    $subject = "New Quote Request from " . $name;
    $message = "
    <html>
    <head>
        <title>New Quote Request</title>
    </head>
    <body>
        <h2>Quote Request Details</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Location:</strong> $location</p>
        <p><strong>Destination:</strong> $destination</p>
        <p><strong>Cargo/Person:</strong> $cargo_person</p>
        <p><strong>Phone Number:</strong> $phone</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
