<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Login</title> 
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <h1>Login</h1>
  <form action="login.php" method="post">
    <label for="username">Nom:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="passwod" required><br><br>
    <input type="submit" value="Login">
  </form>
  
</body>
</html>