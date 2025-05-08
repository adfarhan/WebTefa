<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Saya | Web Tefa</title>
  <link rel="icon" href="{{ asset('assets/img/logosmk.png') }}" type="image/png">
  <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css') }}">

  <style>
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

    .profile-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 500px;
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
      transition: 0.3s;
    }
    .back-button:hover {
      color: #353538;
    }

    .profile-picture {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 20px;
      border: 4px solid #e5e5e5;
    }

    .profile-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h2 {
      font-size: 26px;
      margin-bottom: 5px;
      color: #333;
    }

    p {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }

    .profile-info {
      text-align: left;
      margin-top: 30px;
    }

    .info-item {
      margin-bottom: 15px;
    }

    .info-item strong {
      color: #333;
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .info-item span {
      font-size: 15px;
      color: #555;
    }

    .button {
      margin-top: 30px;
      padding: 12px;
      width: 100%;
      background: linear-gradient(135deg, #66a6ff, #5578eb);
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    .button:hover {
      background: linear-gradient(135deg, #5578eb, #66a6ff);
      transform: scale(1.02);
    }

    .button a{
        text-decoration: none;
        color: #fff;
    }

  </style>
</head>
<body>

    <div class="profile-container">
        <a href="{{ route('beranda.admin') }}" class="back-button">
            <i class="fas fa-arrow-left"></i>
        </a>

        <div class="profile-picture">
            <!-- Ganti gambar dengan icon admin -->
            <i class="fas fa-user" style="font-size: 60px; color: #5578eb; margin-top: 20px;"></i>
        </div>

        <h2>{{ Auth::user()->name }}</h2>

        <div class="profile-info">
            <div class="info-item">
                <strong>Role</strong>
                <span>{{ Auth::user()->role }}</span>
            </div>
            <div class="info-item">
                <strong>Email</strong>
                <span>{{ Auth::user()->email }}</span>
            </div>
        </div>

        <div class="button">
            <a href="{{ route('profile.password.edit') }}">Edit Password</a>
        </div>
    </div>


</body>
</html>
