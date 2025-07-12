<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "m.ahmedgenius121@gmail.com";
  $subject = "New message from your portfolio";
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $headers = "From: $email";

  mail($to, $subject, "Name: $name\nEmail: $email\n\nMessage:\n$message", $headers);
  header("Location: thank-you.html");
}
?>
