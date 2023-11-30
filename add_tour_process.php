<?php
include("C:\xampp\htdocs\db_connection.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $location = $_POST["location"];
    $date = $_POST["date"];
    $capacity = $_POST["capacity"];

    if ($conn) {
        // To Insert the tour into the database
        $insert_query = "INSERT INTO tours (location, date, capacity) VALUES ('$location', '$date', '$capacity')";

        if (mysqli_query($conn, $insert_query)) {
            echo "Tour added successfully!";

        } else {
            echo "Error: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    } else {
        echo "Error connecting to the database.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADD TOUR</title>
        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                background-color: #121212;
            }

            button {
                cursor: pointer;
                font-size: 20px;
                border: none;
                border-radius: 8px;
                background: #B55400;
                color: #F4EEE0;
                width: 200px;
                height: 100px;
                transition: all 1s;
            }
        </style>
        <script>
            function addt() {
                window.location.href = 'add_tour.php';
            }
        </script>
    </head>
    <body>
        <button onclick="addt()">Add new tour</button>
    </body>
</html>