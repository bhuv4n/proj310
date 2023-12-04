<!-- tours.php -->

<?php
session_start();

// Checking if the user is logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Including your database connection file
include("db_connection.php");

// Fetching available tours from the database
$tours_query = "SELECT * FROM tours";
$tours_result = mysqli_query($conn, $tours_query);

// Check if there are tours available
if (mysqli_num_rows($tours_result) > 0) {
    $tours = mysqli_fetch_all($tours_result, MYSQLI_ASSOC);
} else {
    $tours = [];
}

// Closing the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Tours</title>
</head>
<style>
body {
    text-align: center;
}
form {
    display: inline-block;
}
</style>
<body>
    <h1>Welcome,
        <?php echo $_SESSION["username"]; ?>!
    </h1>
    <h3>Available Tours</h3>
    <div class="container">
        <div class="content">
            <?php

            if (!isset($_SESSION["user_id"])) {
                echo '<h1>Welcome to FastTravel!</h1>';
                echo '<p>Discover amazing tours and plan your next adventure with us.</p>';
            } else {

                echo '<p>One stop solution for planning out the best vacation.</p>';
            }
            ?>
        </div>


    </div>

    <?php if (!empty($tours)): ?>
        <ul>
            <?php foreach ($tours as $tour): ?>
<br>
                    <strong>
                        <?php echo $tour['location']; ?>
                    </strong>
                    <br>
                    Date of expedition:
                    <?php echo $tour['date']; ?>
                    <br>
                    Spots remaining:
                    <?php echo $tour['capacity']; ?> travelers
                    <br>
                    <!-- Include a form to add selected tours to the shopping cart -->
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="tour_id" value="<?php echo $tour['id']; ?>">
                        <label for="travelers">Number of tickets:</label>
                        <input type="number" id="travelers" name="travelers" min="1" required>
                        <!-- max cap earlier ?php echo $tour['capacity'] ; ?>  -->
                        <input type="submit" value="Add to Cart">
			<br><br>
                    </form>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No tours available at the moment.</p>
    <?php endif; ?>
    <a href="customer_choice.php" class="button">Back to Menu</a>
</body>

</html>