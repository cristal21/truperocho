<?php
$conn = new mysqli('localhost','audit_user','Audit*2026','truperocho');
$resultado = $conn->query("SELECT * FROM herramientas");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Auditoría - Truper</title>
    <style>
        body{font-family:Arial,sans-serif;margin:0;}
        nav{background:#ff6600;padding:15px;color:white;text-align:center;}
        .container{padding:20px;}
        table{width:100%;border-collapse:collapse;margin-top:20px;}
        th{background:#ff6600;color:white;padding:10px;}
        td{padding:8px;border:1px solid #ddd;text-align:center;}
        tr:nth-child(even){background:#f4f4f4;}
    </style>
</head>
<body>
<nav><b>TRUPER - Modo Auditoría (Solo Lectura)</b></nav>
<div class="container">
    <h3>Herramientas </h3>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th></tr>
        <?php while($row=$resultado->fetch_assoc()): ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['nombre']?></td>
            <td>$<?=$row['precio']?></td>
            <td><?=$row['stock']?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
