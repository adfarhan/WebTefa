<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Web Tefa</title>
  <link rel="icon" href="{{ asset('assets/img/logosmk.png') }}" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Global */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      background-color: #f6f6f6;
      background-image: radial-gradient(#ced6e0 1px, transparent 1px);
      background-size: 20px 20px;
    }


    /* Container */
    .login-container {
      background: #fff;
      padding: 50px 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
      position: relative;
    }

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      color: #000;
      font-size: 22px;
      text-decoration: none;
      transition: color 0.3s;
    }
    .back-button:hover {
      color: #3d3e42;
    }

    .logo {
      width: 80px;
      margin-bottom: 15px;
    }

    h2 {
      font-size: 26px;
      color: #333;
      margin-bottom: 35px;
      font-weight: 700;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    /* Input Group */
    .input-group {
      position: relative;
      width: 100%;
    }

    .input-group input {
      width: 100%;
      padding: 12px 10px 12px 10px;
      background: transparent;
      border: none;
      border-bottom: 2px solid #ccc;
      font-size: 16px;
      color: #333;
      outline: none;
      transition: border-color 0.3s;
    }

    .input-group label {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 16px;
      color: #aaa;
      pointer-events: none;
      transition: 0.3s ease all;
    }

    .input-group input:focus {
      border-bottom-color: #66a6ff;
    }

    .input-group input:focus ~ label,
    .input-group input:not(:placeholder-shown) ~ label {
      top: -8px;
      left: 0;
      font-size: 12px;
      color: #66a6ff;
    }

    /* Button */
    button {
      background: linear-gradient(135deg, #66a6ff, #5578eb);
      border: none;
      padding: 12px;
      border-radius: 8px;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #5578eb, #66a6ff);
      transform: scale(1.02);
    }

    /* Forgot Password */
    .forgot-password {
      margin-top: 18px;
      font-size: 14px;
      color: #66a6ff;
      text-decoration: none;
      transition: 0.3s;
      display: inline-block;
    }
    .forgot-password:hover {
      text-decoration: underline;
      color: #5578eb;
    }

  </style>
</head>
<body>

  <div class="login-container">
    <a href="{{ route('beranda.user') }}" class="back-button">
      <i class="fas fa-arrow-left"></i>
    </a>
    <img src="{{ asset('assets/img/logosmk.png') }}" alt="Logo" class="logo">
    <h2>Login</h2>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="input-group">
        <input type="email" name="email" id="email" placeholder=" " required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" placeholder=" " required>
        <label for="password">Password</label>
      </div>
      <button type="submit">Masuk</button>
    </form>

  </div>

</body>
</html>
