<?php
include "config.php";

if (isset($_POST["add"])) {
    $user = $_POST["user_name"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $conn->query("INSERT INTO appointments (user_name, date, time) VALUES ('$user','$date','$time')");
}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $conn->query("DELETE FROM appointments WHERE id=$id");
}

$result = $conn->query("SELECT * FROM appointments");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointments</title>
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
        <h2>Book Appointment</h2>

        <form method="POST" onsubmit="return validateAppointment()">
            <input type="text" name="user_name" id="user_name" placeholder="User Name">
            <input type="date" name="date" id="date">
            <input type="time" name="time" id="time">
            <button type="submit" name="add">Add Appointment</button>
        </form>
    </div>

    <div class="card">
        <h2>Appointments List</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Action</th>
            </tr>

            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["user_name"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["time"]; ?></td>
                <td>
                    <a class="delete" href="?delete=<?php echo $row["id"]; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>

        </table>
    </div>

</div>

</body>
</html>
