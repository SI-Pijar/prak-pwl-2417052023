<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            text-align: center;
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #d9d9d9;
            border: 3px solid #999;
            margin: 0 auto 20px auto;
        }

        .info-box {
            background-color: #d9d9d9;
            padding: 12px 40px;
            margin-bottom: 8px;
            border-radius: 4px;
            font-size: 18px;
            min-width: 200px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar"></div>
        <div class="info-box">{{ $nama }}</div>
        <div class="info-box">{{ $kelas }}</div>
        <div class="info-box">{{ $npm }}</div>
    </div>
</body>
</html>