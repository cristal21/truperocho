<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Truper - PRODUCTOS</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        nav { background: #ff6600; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 20px; text-decoration: none; font-weight: bold; font-size: 16px; }
        nav a:hover { text-decoration: underline; }
        h1 { text-align: center; padding: 30px; color: #333; }
        .grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px; }
        .card { background: white; border-radius: 10px; padding: 25px; width: 200px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.2s; }
        .card:hover { transform: scale(1.05); }
        .card span { font-size: 50px; }
        .card h3 { margin-top: 10px; color: #333; font-size: 14px; }
        footer { background: #ff6600; color: white; text-align: center; padding: 20px; margin-top: 40px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="mision.php">Misión/Visión</a>
        <a href="login.php">Iniciar Sesión</a>
    </nav>
    <h1>Nuestros Productos</h1>
    <div class="grid">
        <div class="card"><span>🔨</span><h3>Martillos y Mazos</h3></div>
        <div class="card"><span>🔧</span><h3>Llaves y Pinzas</h3></div>
        <div class="card"><span>🪛</span><h3>Desarmadores</h3></div>
        <div class="card"><span>⚡</span><h3>Herramientas Eléctricas</h3></div>
        <div class="card"><span>📏</span><h3>Herramientas de Medición</h3></div>
        <div class="card"><span>🪚</span><h3>Sierras y Seguetas</h3></div>
        <div class="card"><span>🔩</span><h3>Tornillos y Fijaciones</h3></div>
        <div class="card"><span>🎨</span><h3>Pinturas y Brochas</h3></div>
        <div class="card"><span>🪜</span><h3>Escaleras</h3></div>
        <div class="card"><span>🔦</span><h3>Iluminación</h3></div>
        <div class="card"><span>🧰</span><h3>Cajas de Herramientas</h3></div>
        <div class="card"><span>🛡️</span><h3>Equipo de Seguridad</h3></div>
    </div>
    <footer>
        <p>Truper - Herramientas de Calidad</p>
    </footer>
</body>
</html>
