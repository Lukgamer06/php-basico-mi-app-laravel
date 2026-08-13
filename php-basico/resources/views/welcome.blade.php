<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mis Gustos | Programación e IA</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

<style>
    :root{
        --ink:#0a0e14;
        --panel:#10151d;
        --panel-2:#161c26;
        --line:#232b38;
        --text:#cbd5e1;
        --muted:#64748b;
        --mint:#7fdbca;
        --amber:#f4b860;
        --violet:#c792ea;
        --rose:#ff6b81;
    }

    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }

    html{
        scroll-behavior:smooth;
    }

    body{
        background:var(--ink);
        color:var(--text);
        font-family:'Inter', sans-serif;
        line-height:1.6;
    }

    .mono{
        font-family:'JetBrains Mono', monospace;
    }

    ::selection{
        background:var(--violet);
        color:var(--ink);
    }

    a{
        color:inherit;
    }

    /* ---------- background grid ---------- */

    .grid-bg{
        position:fixed;
        inset:0;
        background-image:
            linear-gradient(var(--line) 1px, transparent 1px),
            linear-gradient(90deg, var(--line) 1px, transparent 1px);
        background-size:42px 42px;
        opacity:0.25;
        pointer-events:none;
        z-index:0;
    }

    /* ---------- header / terminal ---------- */

    header{
        min-height:100vh;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        padding:40px 20px;
        position:relative;
        z-index:1;
    }

    .terminal{
        width:100%;
        max-width:680px;
        background:var(--panel);
        border:1px solid var(--line);
        border-radius:10px;
        overflow:hidden;
        box-shadow:0 30px 60px -20px rgba(0,0,0,0.6);
    }

    .terminal-bar{
        background:var(--panel-2);
        padding:12px 16px;
        display:flex;
        align-items:center;
        gap:8px;
        border-bottom:1px solid var(--line);
    }

    .dot{
        width:11px;
        height:11px;
        border-radius:50%;
    }

    .dot.red{background:#ff5f57;}
    .dot.yellow{background:#febc2e;}
    .dot.green{background:#28c840;}

    .terminal-title{
        margin-left:8px;
        font-size:0.78rem;
        color:var(--muted);
        letter-spacing:0.02em;
    }

    .terminal-body{
        padding:32px 28px 36px;
        font-size:1rem;
    }

    .line{
        margin-bottom:8px;
        white-space:pre-wrap;
        overflow:hidden;
        border-right:2px solid var(--mint);
        width:0;
        animation:typing 1.4s steps(40,end) forwards, blink 0.9s step-end infinite;
    }

    .line .prompt{color:var(--mint);}
    .line .out{color:var(--text);}
    .line .comment{color:var(--muted);}
    .line .accent{color:var(--amber);}

    .l1{animation-delay:0.1s;}
    .l2{animation-delay:1.6s;}
    .l3{animation-delay:2.4s; border-right:none;}
    .l4{animation-delay:4.6s;}
    .l5{animation-delay:5.4s;}
    .l6{animation-delay:5.6s; width:auto; border:none; opacity:0; animation-fill-mode:forwards; animation:fade-in 0.4s ease forwards 6.6s;}

    .l3{
        color:var(--text);
        opacity:0;
        animation:reveal 0.3s ease forwards 4s;
        border-right:none;
        width:auto;
    }

    @keyframes typing{
        from{width:0;}
        to{width:100%;}
    }

    @keyframes blink{
        50%{border-color:transparent;}
    }

    @keyframes reveal{
        to{opacity:1;}
    }

    @keyframes fade-in{
        to{opacity:1;}
    }

    .btn{
        margin-top:28px;
        display:inline-flex;
        align-items:center;
        gap:10px;
        padding:13px 22px;
        background:transparent;
        border:1px solid var(--mint);
        color:var(--mint);
        text-decoration:none;
        border-radius:6px;
        font-family:'JetBrains Mono', monospace;
        font-size:0.9rem;
        font-weight:500;
        transition:background 0.2s ease, color 0.2s ease;
    }

    .btn:hover{
        background:var(--mint);
        color:var(--ink);
    }

    .btn::before{
        content:'▸';
    }

    .scroll-hint{
        position:absolute;
        bottom:32px;
        font-size:0.75rem;
        color:var(--muted);
        letter-spacing:0.15em;
        text-transform:uppercase;
    }

    /* ---------- gustos section ---------- */

    section{
        padding:100px 8% 60px;
        position:relative;
        z-index:1;
    }

    .section-head{
        text-align:center;
        margin-bottom:56px;
    }

    .eyebrow{
        font-family:'JetBrains Mono', monospace;
        color:var(--violet);
        font-size:0.85rem;
        letter-spacing:0.08em;
        display:block;
        margin-bottom:10px;
    }

    h2{
        font-size:2.2rem;
        font-weight:500;
        color:#e2e8f0;
    }

    .cards{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:24px;
        max-width:1100px;
        margin:0 auto;
    }

    .card{
        background:var(--panel);
        border:1px solid var(--line);
        border-radius:10px;
        overflow:hidden;
        transition:transform 0.25s ease, border-color 0.25s ease;
    }

    .card:hover{
        transform:translateY(-6px);
    }

    .card-bar{
        background:var(--panel-2);
        padding:11px 16px;
        display:flex;
        align-items:center;
        gap:10px;
        border-bottom:1px solid var(--line);
        font-family:'JetBrains Mono', monospace;
        font-size:0.82rem;
        color:var(--muted);
    }

    .file-dot{
        width:8px;
        height:8px;
        border-radius:50%;
        flex-shrink:0;
    }

    .card-body{
        padding:22px 20px;
        font-family:'JetBrains Mono', monospace;
        font-size:0.88rem;
    }

    .card-body .kw{color:var(--violet);}
    .card-body .str{color:var(--mint);}
    .card-body .cm{color:var(--muted); display:block; margin-top:10px; line-height:1.7;}
    .card-body .tag{color:var(--rose);}
    .card-body .fn{color:var(--amber);}

    .card[data-lang="js"]:hover{border-color:var(--amber);}
    .card[data-lang="py"]:hover{border-color:var(--mint);}
    .card[data-lang="html"]:hover{border-color:var(--rose);}
    .card[data-lang="md"]:hover{border-color:var(--violet);}

    /* ---------- footer ---------- */

    footer{
        background:var(--panel-2);
        border-top:1px solid var(--line);
        text-align:center;
        padding:26px 20px;
        color:var(--muted);
        font-family:'JetBrains Mono', monospace;
        font-size:0.82rem;
        position:relative;
        z-index:1;
    }

    footer .prompt{color:var(--mint);}

    @media (max-width:640px){
        .terminal-body{padding:24px 18px 28px; font-size:0.88rem;}
        h2{font-size:1.7rem;}
    }

    @media (prefers-reduced-motion: reduce){
        .line{animation:none !important; width:auto !important; border:none !important; opacity:1 !important;}
        .card, .btn{transition:none;}
    }

    a:focus-visible, .card:focus-visible{
        outline:2px solid var(--mint);
        outline-offset:3px;
    }
</style>
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