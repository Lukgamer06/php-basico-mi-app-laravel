<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Gustos | Programación e IA</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body{
            background: #0f172a;
            color: white;
        }

        header{
            height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
            background: linear-gradient(135deg,#1e3a8a,#7c3aed);
        }

        header h1{
            font-size:4rem;
            margin-bottom:15px;
        }

        header p{
            font-size:1.3rem;
            max-width:700px;
        }

        .btn{
            margin-top:25px;
            padding:12px 25px;
            background:white;
            color:#1e3a8a;
            text-decoration:none;
            border-radius:30px;
            font-weight:bold;
            transition:0.3s;
        }

        .btn:hover{
            transform:scale(1.05);
        }

        section{
            padding:80px 10%;
        }

        h2{
            text-align:center;
            margin-bottom:40px;
            color:#60a5fa;
            font-size:2.5rem;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
        }

        .card{
            background:#1e293b;
            padding:25px;
            border-radius:15px;
            box-shadow:0 0 15px rgba(96,165,250,0.2);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-10px);
        }

        .card h3{
            margin-bottom:10px;
            color:#93c5fd;
        }

        footer{
            background:#020617;
            text-align:center;
            padding:20px;
            color:#94a3b8;
        }
    </style>
</head>
<body>

    <header>
        <h1>💻 Programación & 🤖 IA</h1>
        <p>
            Dos de mis mayores intereses son la programación y la inteligencia artificial.
            Me encanta crear proyectos, aprender nuevas tecnologías y descubrir cómo las máquinas pueden resolver problemas complejos.
        </p>
        <a href="#gustir más</a>
    </header>

    <section id="gustos">
        <h2>Mis Gustos</h2>

        <div class="cards">

            <div class="card">
                <h3>💻 Programación</h3>
                <p>
                    Disfruto desarrollar páginas web, aplicaciones y proyectos que me permitan resolver problemas y aprender nuevas habilidades.
                </p>
            </div>

            <div class="card">
                <h3>🤖 Inteligencia Artificial</h3>
                <p>
                    Me fascina cómo la IA puede generar contenido, analizar datos y ayudar a las personas en tareas cotidianas.
                </p>
            </div>

            <div class="card">
                <h3>🌐 Desarrollo Web</h3>
                <p>
                    Me gusta diseñar sitios modernos, interactivos y visualmente atractivos utilizando HTML, CSS y JavaScript.
                </p>
            </div>

            <div class="card">
                <h3>🚀 Aprendizaje Constante</h3>
                <p>
                    Siempre estoy explorando nuevas tecnologías, lenguajes de programación y herramientas relacionadas con el futuro digital.
                </p>
            </div>

        </div>
    </section>

    <footer>
        © 2026 | Mi Web Personal sobre Programación e Inteligencia Artificial
    </footer>

</body>
</html>