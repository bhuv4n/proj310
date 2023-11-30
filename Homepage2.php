<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency - Explore Your Next Adventure</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            background-size: cover;
            background-position: center center;
            transition: background-image 1s ease-in-out;
        }

        .container {
            max-width: 800px;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
        }

        h1 {
            color: #007bff;
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container" id="container">
        <h1>Explore Your Next Adventure</h1>
        <p>Discover amazing destinations and plan your perfect getaway with our travel agency. Whether you prefer serene beaches, majestic mountains, or vibrant cities, we have the ideal destination for you.</p>
        <a href="register.html">Get Started</a>
    </div>

    <script>
        const body = document.body;
        const images = [
            'https://wallpapers.com/images/featured/scenic-81a8evncb76xosaf.jpg',
            'https://i.pinimg.com/originals/78/34/df/7834df02451f1f377a3bf9ac6d5f217b.jpg',
            'https://wallpapers.com/images/hd/rain-nature-stones-up206c319tocfysa.jpg'
        ];
        let currentImageIndex = 0;

        function changeBackgroundImage() {
            body.style.backgroundImage = `url('${images[currentImageIndex]}')`;
            currentImageIndex = (currentImageIndex + 1) % images.length;
        }

        function hideContainer() {
            container.classList.add('hidden');
        }
        setInterval(changeBackgroundImage, 3000);
    </script>
</body>
</html>
