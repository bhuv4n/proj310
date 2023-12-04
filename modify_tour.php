<!-- modify_tour.php -->

<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION["admin_id"])) {
    header("Location: admin_login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Tour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 100px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: gray;
        }
    </style>
</head>
<body>
    <h1>Administration</h1>

    <form action="modify_tour_process.php" method="post">
        <!-- Include fields like tour ID, new location, new date, new capacity, etc. -->
        <label for="tour_id">Tour code:</label>
        <input type="number" id="tour_id" name="tour_id" required>

        <label for="new_location">Updated location:</label>
        <input type="text" id="new_location" name="new_location" required>

        <label for="new_date">Set a date:</label>
	<input type="date" id="new_date" name="new_date" min="<?= date('Y-m-d'); ?>" required>

        <label for="new_capacity">Available tickets:</label>
        <input type="number" id="new_capacity" name="new_capacity" required>

        <input type="submit" value="Save changes">
<br><br>
    <a href="admin_panel.php" class="button">Back to menu</a>
    </form>


</body>
</body>
</html>