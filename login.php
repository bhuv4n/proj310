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
    </style>
    <title>Orange Buttons</title>
    <script>
      function rcx() {
        window.location.href = 'login_cx.html';
      }

      function rsu() {
        window.location.href = 'login_su.html';
      }
    </script>
  </head>
  <body>
    <div>
      <button onclick="rcx()">CUSTOMER</button>
      <button onclick="rsu()">ADMINISTRATOR</button>
      <br>
      <br>
      <br>
      <p style="font-size: 14px; color:grey;">* Not sure? Please <a style="color:grey;" href="contact.php"> contact us. </a>
      </p>
    </div>
  </body>
</html>