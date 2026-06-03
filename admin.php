<?php
session_start();
if(!isset($_SESSION['logged'])){
    header('Location: login.php');
    exit;
}
$conn = new mysqli('localhost','dev_user','User*2026','truperocho');

// Crear
if(isset($_POST['crear'])){
    $n=$_POST['nombre']; $p=$_POST['precio']; $s=$_POST['stock'];
    $conn->query("INSERT INTO herramientas (nombre,precio,stock) VALUES ('$n','$p','$s')");
}
// Eliminar
if(isset($_GET['eliminar'])){
    $conn->query("DELETE FROM herramientas WHERE id=".$_GET['eliminar']);
}
// Actualizar
if(isset($_POST['actualizar'])){
    $id=$_POST['id']; $n=$_POST['nombre']; $p=$_POST['precio']; $s=$_POST['stock'];
    $conn->query("UPDATE herramientas SET nombre='$n',precio='$p',stock='$s' WHERE id=$id");
    header('Location: admin.php');
exit;
}
$resultado = $conn->query("SELECT * FROM herramientas");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin - Truper</title>
    <style>
        body{font-family:Arial,sans-serif;margin:0;}
        nav{background:#ff6600;padding:15px;color:white;text-align:center;}
        nav a{color:white;margin:0 15px;text-decoration:none;}
        .container{padding:20px;}
        table{width:100%;border-collapse:collapse;margin-top:20px;}
        th{background:#ff6600;color:white;padding:10px;}
        td{padding:8px;border:1px solid #ddd;text-align:center;}
        tr:nth-child(even){background:#f4f4f4;}
        input[type=text],input[type=number]{padding:8px;width:100%;box-sizing:border-box;}
        button{padding:8px 15px;background:#ff6600;color:white;border:none;cursor:pointer;border-radius:4px;}
        .btn-eliminar{background:red;}
        .btn-editar{background:#333;}
        .form-box{background:#f4f4f4;padding:20px;margin-bottom:20px;border-radius:8px;}
    </style>
</head>
<body>
<nav>
    <b>TRUPER - Panel Administrador TERCERA OPORTUNIDAD</b>
    <a href="index.php">Inicio</a>
    <a href="?logout=1">Cerrar Sesión</a>
</nav>
<?php if(isset($_GET['logout'])){session_destroy();header('Location:login.php');exit;} ?>
<div class="container">
    <div class="form-box">
        <h3>Agregar Herramienta</h3>
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="precio" placeholder="Precio" step="0.01" required>
            <input type="number" name="stock" placeholder="Stock" required>
            <br><br>
            <button name="crear">Agregar</button>
        </form>
    </div>

    <?php if(isset($_GET['editar'])):
        $r=$conn->query("SELECT * FROM herramientas WHERE id=".$_GET['editar'])->fetch_assoc(); ?>
    <div class="form-box">
        <h3>Editar Herramienta</h3>
        <form method="POST">
            <input type="hidden" name="id" value="<?=$r['id']?>">
            <input type="text" name="nombre" value="<?=$r['nombre']?>" required>
            <input type="number" name="precio" value="<?=$r['precio']?>" step="0.01" required>
            <input type="number" name="stock" value="<?=$r['stock']?>" required>
            <br><br>
            <button name="actualizar">Guardar Cambios</button>
        </form>
    </div>
    <?php endif; ?>

    <h3>Herramientas Registradas</h3>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acciones</th></tr>
        <?php while($row=$resultado->fetch_assoc()): ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nombre']?></td>
            <td>$<?=$row['precio']?></td>
            <td><?=$row['stock']?></td>
            <td>
                <a href="?editar=<?=$row['id']?>"><button class="btn-editar">Editar</button></a>
                <a href="?eliminar=<?=$row['id']?>" onclick="return confirm('¿Eliminar?')"><button class="btn-eliminar">Eliminar</button></a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>

