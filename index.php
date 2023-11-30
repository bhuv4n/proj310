<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Travel Agency</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            background: url('https://wallpapers.com/images/featured/rainy-nature-8djqv0eijjds6bk8.jpg') center/cover no-repeat fixed;
            animation: backgroundAnimation 9s infinite;
        }

        @keyframes backgroundAnimation {
            0% { background: url('https://wallpapers.com/images/featured/scenic-81a8evncb76xosaf.jpg') center/cover no-repeat fixed; }
            33% { background: url('https://i.pinimg.com/originals/78/34/df/7834df02451f1f377a3bf9ac6d5f217b.jpg') center/cover no-repeat fixed; }
            66% { background: url('https://wallpapers.com/images/hd/rain-nature-stones-up206c319tocfysa.jpg') center/cover no-repeat fixed; }
            100% { background: url('https://wallpapers.com/images/featured/rainy-nature-8djqv0eijjds6bk8.jpg') center/cover no-repeat fixed; }
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        section {
            padding: 100px 20px;
            text-align: center;
            color: #fff;
        }

        h1 {
            font-family: League Gothic;
            font-size: 55px; 
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="login.php">Account</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section>
        <h1>Fast Travel Agency</h1>
        <p>Welcome to an amazing journey around the world!</p>
    </section>
</body>
</html>
