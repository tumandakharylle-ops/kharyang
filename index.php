<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #ff9a9e, #8e44ad); /* pink to purple gradient */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .login-container {
      background: #fff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
      width: 320px;
    }
    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #8e44ad; /* purple heading */
    }
    .login-container label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #d63384; /* pink labels */
    }
    .login-container input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
    }
    .login-container input:focus {
      border-color: #8e44ad;
      box-shadow: 0 0 5px rgba(142,68,173,0.5);
    }
    .login-container button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #d63384, #8e44ad); /* pink-purple gradient button */
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }
    .login-container button:hover {
      background: linear-gradient(135deg, #ff6f91, #6c3483); /* brighter hover effect */
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Kharylle L. Tumanda</h2>
    <form>
     
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>

      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>