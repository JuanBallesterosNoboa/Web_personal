<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Personal - Armada del Ecuador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>SOFTWARE - SEXTO SEMESTRE</h1>
    <p>Mi Página Web Personal</p>
</header>

<div class="contenedor">

  <h1 id="titulo">Mi Hoja de Vida</h1>

    <p><strong>Nombre:</strong> Juan Gabriel Ballesteros Noboa</p>
    <p><strong>Ocupación:</strong> Militar - Armada del Ecuador</p>
    <p><strong>Ubicación:</strong> Guayaquil, Ecuador</p>

    <h2>Perfil Profesional</h2>
    <p>
        Soy miembro de la Armada del Ecuador,
        comprometido con la disciplina, responsabilidad
        y servicio al país. Actualmente me encuentro
        ampliando mis conocimientos en informática
        y desarrollo de software.
    </p>

    <h2>Estudios</h2>
    <ul>
        <li>Formación militar</li>
        <li>Estudios en Ingeniería de Software</li>
        <li>Piloto de helicópteros Bell-206</li>
    </ul>

    <h2>Experiencia Profesional</h2>
    <ul>
        <li>Servicio en la Armada del Ecuador</li>
        <li>Actividades administrativas y operativas</li>
        <li>Piloto de Aeronaves de ala rotatoria de la Armada del Ecuador</li>
    </ul>

    <h2>Conocimientos Técnicos</h2>
    <ul>
        <li>HTML y CSS</li>
        <li>JavaScript y PHP básico</li>
        <li>Microsoft Office</li>
        <li>Fundamentos de programación</li>
    </ul>

    <h2>Contacto</h2>
    <ul>
        <li><strong>Teléfono:</strong> 0995628014</li>
        <li><strong>Correo:</strong> ballesterosnjuan@gmail.com</li>
    </ul>

</div>

<div class="contenedor calculadora-contenedor">

    <h2>Calculadora Básica</h2>
    <p>Operaciones matemáticas básicas</p>

    <div class="calculadora">
        <input type="text" id="pantalla" readonly>

        <div class="botones">
            <button onclick="limpiar()" class="especial">C</button>
            <button onclick="borrar()">⌫</button>
            <button onclick="operacion('/')">÷</button>
            <button onclick="operacion('*')">×</button>

            <button onclick="numero('7')">7</button>
            <button onclick="numero('8')">8</button>
            <button onclick="numero('9')">9</button>
            <button onclick="operacion('-')">−</button>

            <button onclick="numero('4')">4</button>
            <button onclick="numero('5')">5</button>
            <button onclick="numero('6')">6</button>
            <button onclick="operacion('+')">+</button>

            <button onclick="numero('1')">1</button>
            <button onclick="numero('2')">2</button>
            <button onclick="numero('3')">3</button>
            <button onclick="calcular()" class="igual">=</button>

            <button onclick="numero('0')" class="cero">0</button>
            <button onclick="numero('.')">.</button>
        </div>
    </div>

</div>

<footer>
    <p>Universidad UNIANDES</p>
</footer>

<script src="script.js"></script>

</body>
</html>
