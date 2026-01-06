<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <style>
        body { font-family: Arial; background:#f0f2f5; display:flex; justify-content:center; align-items:center; height:100vh; }
        .container { background:#fff; padding:30px; border-radius:10px; box-shadow:0 5px 15px rgba(0,0,0,0.1); width:400px; text-align:center; }
        h2 { color: green; }
        p { margin: 10px 0; }
        a { display:inline-block; margin-top:15px; text-decoration:none; color:#007bff; }
    </style>
</head>
<body>
<div class="container">
    <h2>Registration Successful </h2>
    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($_GET['fullname']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($_GET['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($_GET['phone']); ?></p>
    <a href="index.html">Register Another Student</a>
</div>
</body>
</html>
