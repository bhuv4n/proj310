<?php
include("db_connection.php");

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
            echo "<div> Tour added successfully! </div>";
echo "";

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

                height: 100vh;
                margin: 0;
color: #fff;
                background-color: #121212;
            }

div {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
}

        header {
            background-color: rgba(0, 0, 0, 0.7) ;
            padding: 20px;
            position: fixed;
            width: 100% ;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav a {
            color: #fff ;
            text-decoration: none ;
            font-size: 14px;
            font-weight: bold;
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
<header id="myheader">
        <nav>
            <a href="index.php">Home</a>
            <a href="admin_panel.php">Account</a>
            <a href="contact.php">Contact</a>
        </nav>
</header>
<br>
<div>

        <button onclick="addt()">Add new tour</button>
</div>
    </body>
</html>