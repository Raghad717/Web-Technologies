<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $conn->query("INSERT INTO users (name, email, phone) VALUES ('$name','$email','$phone')");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="register.php">Register</a>
    <a href="appointments.php">Appointments</a>
</nav>

<div class="container">
    <div class="card">
        <h2>Register</h2>

        <form method="POST" onsubmit="return validateRegister()">
            <input type="text" name="name" id="name" placeholder="Full Name">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="text" name="phone" id="phone" placeholder="Phone">
            <button type="submit">Register</button>
        </form>
    </div>
</div>

</body>
</html>
