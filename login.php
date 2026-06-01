<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    if($user=='22161259@itoaxaca.edu.mx' && $pass=='22161259TSO'){
    $_SESSION['logged']=true;
    header('Location: admin.php');
} elseif($user=='Invitado@itoaxaca.edu.mx' && $pass=='invitado26'){
    $_SESSION['logged']=true;
    header('Location: auditoria.php');

    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Truper</title>
    <style>
        body { font-family: Arial, sans-serif; background: #333; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .box { background: white; padding: 40px; border-radius: 10px; width: 350px; text-align: center; }
        h2 { color: #ff6600; margin-bottom: 20px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        button { width: 100%; padding: 10px; background: #ff6600; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .error { color: red; }
    </style>
</head>
<body>
    <div class="box">
        <h2>TRUPER - Acceso</h2>
        <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
