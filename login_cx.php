<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
html {
  scroll-behavior: smooth;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: -apple-system, BlinkMacSystemFont, sans-serif;
  background: #121212; /* fallback for old browsers */
  overflow-x: hidden;
  height: 100%;
  /* code to make all text unselectable */
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
/* Disables selector ring */
body:not(.user-is-tabbing) button:focus,
body:not(.user-is-tabbing) input:focus,
body:not(.user-is-tabbing) select:focus,
body:not(.user-is-tabbing) textarea:focus {
  outline: none;
}
h1 {
  color: white;
  font-size: 35px;
  font-weight: 600;
}
.flex-container {
  margin: 25px;
  width: 500px;
  height: 500px;
  display: flex;
  align-items: center;
}
.content-container {
  width: 450px;
  height: 350px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.subtitle {
  font-size: 11px;
  color: grey;
}
input {
  border: none;
  border-bottom: solid rgb(143, 143, 143) 1px;
  margin-bottom: 30px;
  background: none;
  color: rgba(255, 255, 255, 0.555);
  height: 35px;
  width: 300px;
}
.submit-btn {
  cursor: pointer;
  border: none;
  border-radius: 8px;
  background: #B55400;
  color: #F4EEE0;
  width: 80px;
  transition: all 1s;
}
.submit-btn:hover {
  color: rgb(255, 255, 255);
  box-shadow: none;
}
    </style>
</head>
<body>
<div class="flex-container">
  <div class="content-container">
<form action="login_process.php" method="post">
        <h1>
          Login
        </h1>
        <br>
        <br>
        <span class="subtitle">USERNAME</span>
        <br>
        <input type="text" name="username" value="">
        <br>
        <span class="subtitle">PASSWORD</span>
        <br>
        <input type="password" name="password" value="">
        <br><br>
        <input type="submit" value="SUBMIT" class="submit-btn">
    </div>
  </div>
</div>
</body>
</html>