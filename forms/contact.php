
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and sanitize user input
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $subject =($_POST["subject"]);
    $message =($_POST["message"]);

    // Set your email address where you want to receive messages
    $to = "takudzwa17@live.com";

    // Create email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
// } else {
//     // Not a POST request, so redirect to the contact form page
//     header("Location: index.html"); // Replace with the actual filename of your form page
//     exit();
// }
?>
