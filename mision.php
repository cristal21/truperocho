<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Truper - MISION y Visión</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        nav { background: #ff6600; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 20px; text-decoration: none; font-weight: bold; font-size: 16px; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 900px; margin: 50px auto; padding: 0 20px; }
        .card { background: white; border-radius: 10px; padding: 40px; margin-bottom: 30px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .card h2 { color: #ff6600; font-size: 2em; margin-bottom: 15px; }
        .card p { color: #555; font-size: 1.1em; line-height: 1.8; }
        .card span { font-size: 3em; display: block; margin-bottom: 15px; }
        .valores { display: flex; flex-wrap: wrap; gap: 20px; margin-top: 30px; }
        .valor { background: white; border-radius: 10px; padding: 25px; flex: 1; min-width: 200px; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .valor span { font-size: 2.5em; display: block; margin-bottom: 10px; }
        .valor h3 { color: #ff6600; margin-bottom: 8px; }
        .valor p { color: #555; font-size: 0.95em; }
        footer { background: #ff6600; color: white; text-align: center; padding: 20px; margin-top: 40px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="mision.php">MISION/Visión</a>
        <a href="login.php">Iniciar Sesión</a>
    </nav>
    <div class="container">
        <div class="card">
            <span>🎯</span>
            <h2>Misión</h2>
            <p>Proveer herramientas de alta calidad para el sector industrial, de construcción y uso doméstico, ofreciendo productos confiables a precios competitivos, respaldados por un servicio al cliente excepcional que supere las expectativas de nuestros clientes en cada proyecto.</p>
        </div>
        <div class="card">
            <span>🚀</span>
            <h2>Visión</h2>
            <p>Ser la empresa ferretera líder a nivel nacional, reconocida por la innovación, calidad y compromiso con nuestros clientes. Contribuir al desarrollo de la industria mexicana expandiendo nuestra presencia en todo el país, siendo sinónimo de confianza y excelencia en herramientas profesionales.</p>
        </div>
        <h2 style="text-align:center; color:#333; margin-bottom:20px;">Nuestros Valores</h2>
        <div class="valores">
            <div class="valor"><span>💪</span><h3>Calidad</h3><p>Productos duraderos y confiables para cada trabajo.</p></div>
            <div class="valor"><span>🤝</span><h3>Compromiso</h3><p>Con nuestros clientes y con México.</p></div>
            <div class="valor"><span>💡</span><h3>Innovación</h3><p>Siempre buscando mejorar nuestros productos.</p></div>
            <div class="valor"><span>⭐</span><h3>Excelencia</h3><p>En cada herramienta que ofrecemos.</p></div>
        </div>
    </div>
    <footer>
        <p>Truper - Herramientas de Calidad</p>
    </footer>
</body>
</html>
