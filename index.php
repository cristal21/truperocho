<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Truper - Ferretería</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; }
        nav { background: #ff6600; padding: 15px; text-align: center; }
        nav a { color: white; margin: 0 20px; text-decoration: none; font-weight: bold; font-size: 16px; }
        nav a:hover { text-decoration: underline; }
        .hero { background: #333; color: white; text-align: center; padding: 100px 20px; }
        .hero h1 { font-size: 4em; letter-spacing: 5px; }
        .hero p { font-size: 1.3em; margin-top: 10px; color: #ccc; }
        .bienvenida { background: white; text-align: center; padding: 50px 20px; }
        .bienvenida h2 { color: #ff6600; font-size: 2em; margin-bottom: 15px; }
        .bienvenida p { font-size: 1.1em; color: #555; max-width: 700px; margin: auto; }
        .stats { display: flex; justify-content: center; gap: 40px; padding: 50px 20px; background: #ff6600; flex-wrap: wrap; }
        .stat { text-align: center; color: white; }
        .stat h2 { font-size: 3em; }
        .stat p { font-size: 1em; margin-top: 5px; }
        footer { background: #333; color: white; text-align: center; padding: 20px; }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="mision.php">Misión/Visión</a>
        <a href="login.php">Acceder</a>
    </nav>
    <div class="hero">
        <h1>🔧 TRUPER</h1>
        <p>Tu ferretería de confianza</p>
    </div>
    <div class="bienvenida">
        <h2>Bienvenido a Ferretería TRUPER</h2>
        <p>Somos tu aliado en cada proyecto. Ofrecemos las mejores herramientas profesionales y de uso doméstico, con la calidad y durabilidad que siempre has necesitado. Encuentra todo lo que buscas en un solo lugar.</p>
    </div>
    <div class="stats">
        <div class="stat">
            <h2>50+</h2>
            <p>Productos disponibles</p>
        </div>
        <div class="stat">
            <h2>25+</h2>
            <p>Años de experiencia</p>
        </div>
        <div class="stat">
            <h2>100%</h2>
            <p>Calidad garantizada</p>
        </div>
        <div class="stat">
            <h2>🇲🇽</h2>
            <p>Todo México</p>
        </div>
    </div>
    <footer>
        <p>Truper - Herramientas de Calidad</p>
    </footer>
</body>
</html>
