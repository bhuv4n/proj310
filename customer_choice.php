<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

            button+button {
                margin-left: 20px;
            }

            button+button {
                margin-left: 20px;
            }
        </style>
        <title>Customer Choice</title>
        <script>
            function addtour() {
                window.location.href = 'tours.php';
            }

            function myos() {
                window.location.href = 'order_history.php';
            }

            function dash() {
                window.location.href = 'dashboard.php';
            }

            function cart() {
                window.location.href = 'cart.php';
            }
        </script>
    </head>
    <body>
        <div>
            <button onclick="dash()">DASHBOARD</button>
            <button onclick="addtour()">TOURS</button>
            <button onclick="myos()">ORDER HISTORY</button>
            <button onclick="cart()">MY CART</button>
            <br>
            <br>
            <br>
            <p style="font-size: 14px; color:grey;">* Need help? Please <a style="color:grey;" href="contact.php"> contact us. </a>
            </p>
        </div>
    </body>
</html>
