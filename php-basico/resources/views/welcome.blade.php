<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mis Gustos | Programación e IA</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<div class="grid-bg" aria-hidden="true"></div>

<header>
    <div class="terminal">
        <div class="terminal-bar">
            <span class="dot red"></span>
            <span class="dot yellow"></span>
            <span class="dot green"></span>
            <span class="terminal-title">gustos.sh — 80x24</span>
        </div>
        <div class="terminal-body mono">
            <div class="line l1"><span class="prompt">$</span> whoami</div>
            <div class="line l2"><span class="out">&gt; desarrollador apasionado por el código y la IA 💻🤖</span></div>
            <div class="line l3"><span class="prompt">$</span> cat intereses.txt</div>
            <p style="margin:14px 0 4px; opacity:0; animation:reveal 0.4s ease forwards 4.6s; max-width:560px;">
                Dos de mis mayores intereses son la programación y la inteligencia artificial.
                Me encanta crear proyectos, aprender nuevas tecnologías y descubrir cómo las máquinas pueden resolver problemas complejos.
            </p>
            <div class="line l4" style="opacity:0; animation:reveal 0.3s ease forwards 6.2s; border:none; width:auto;">
                <span class="comment">// scroll para ver más</span>
            </div>
        </div>
    </div>

    <a href="#gustos" class="btn">./explorar_gustos.sh</a>
</header>

<section id="gustos">
    <div class="section-head">
        <span class="eyebrow mono">// contenido</span>
        <h2>Mis Gustos</h2>
    </div>

    <div class="cards">

        <div class="card" data-lang="js" tabindex="0">
            <div class="card-bar"><span class="file-dot" style="background:var(--amber)"></span>programacion.js</div>
            <div class="card-body">
                <span class="kw">const</span> pasión = <span class="str">"crear webs, apps y proyectos"</span>;
                <span class="cm">// disfruto resolver problemas reales<br>// y aprender nuevas habilidades en el camino</span>
            </div>
        </div>

        <div class="card" data-lang="py" tabindex="0">
            <div class="card-bar"><span class="file-dot" style="background:var(--mint)"></span>inteligencia_artificial.py</div>
            <div class="card-body">
                intereses = [<span class="str">"generar contenido"</span>, <span class="str">"analizar datos"</span>]
                <span class="cm"># me fascina cómo la IA puede ayudar<br># a las personas en tareas cotidianas</span>
            </div>
        </div>

        <div class="card" data-lang="html" tabindex="0">
            <div class="card-bar"><span class="file-dot" style="background:var(--rose)"></span>desarrollo_web.html</div>
            <div class="card-body">
                <span class="tag">&lt;web</span> class=<span class="str">"moderna interactiva viva"</span><span class="tag">&gt;</span>
                <span class="cm">&lt;!-- diseño con HTML, CSS y JavaScript --&gt;</span>
            </div>
        </div>

        <div class="card" data-lang="md" tabindex="0">
            <div class="card-bar"><span class="file-dot" style="background:var(--violet)"></span>aprendizaje.md</div>
            <div class="card-body">
                <span class="fn">## Siempre explorando</span>
                <span class="cm">- nuevas tecnologías<br>- nuevos lenguajes<br>- el futuro digital</span>
            </div>
        </div>

    </div>
</section>

<footer class="mono">
    <span class="prompt">$</span> echo "© 2026 · Mi Web Personal sobre Programación e Inteligencia Artificial"
</footer>

</body>
</html>