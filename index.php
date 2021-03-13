<?php
require_once "inc/head-nm.php";
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title><?php echo $asso_ext_name; ?>Gestionale Volontari</title>
    <link rel="stylesheet" href="css/style.0.1.css">
</head>
<body>
<img src="<?php echo $asso_logo; ?>" alt="Logo" class="imglogo">
<form action="crux/checklogin.php" method="post">
    <div class="form-group">
        <h1><?php echo $asso_ext_name; ?>Gestionale Volontari</h1>
        <a href="login.php" class="btn btn-info btn-index">Accedi</a>
        <a href="register.php" class="btn btn-info btn-index">Registrati!</a>
    </div>
</form>
</body>
</html>