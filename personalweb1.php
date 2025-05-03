<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REYMART | Full Stack Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0ff;
            --accent: #f0f;
            --background: #0d0d0d;
            --foreground: #fff;
            --card-bg: #1a1a1a;
            --border-glow: 0 0 10px var(--primary);
        }

        body {
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            background-color: var(--background);
            color: var(--foreground);
            scroll-behavior: smooth;
        }

        header {
            padding: 1rem 2rem;
            text-align: center;
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: #000;
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 2px;
            text-shadow: 0 0 5px #fff;
        }

        section {
            padding: 3rem 2rem;
            text-align: center;
        }

        .hero {
            background: radial-gradient(circle at center, #111, #000);
            padding: 4rem 2rem;
            position: relative;
        }

        .hero h1.glow {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 3s infinite linear;
        }

        @keyframes shine {
            0% { background-position: 0%; }
            100% { background-position: 200%; }
        }

        .hero p, #typewriter {
            font-size: 1.25rem;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.85;
        }

        .hero img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 3px solid var(--accent);
            margin-top: 2rem;
            box-shadow: 0 0 20px var(--accent);
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1rem auto;
            width: 90%;
            max-width: 500px;
            box-shadow: var(--border-glow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 0 15px var(--accent);
        }

        .progress-bar {
            background-color: #222;
            border-radius: 20px;
            overflow: hidden;
            margin-top: 1rem;
        }

        .progress-bar-fill {
            background: linear-gradient(90deg, var(--primary), var(--accent));
            height: 20px;
            width: 0;
            animation: fillBar 2s forwards;
        }

        @keyframes fillBar {
            to {
                width: 90%;
            }
        }

        .theme-toggle {
            position: fixed;
            top: 1rem;
            right: 1rem;
            background: transparent;
            border: 2px solid var(--primary);
            padding: 0.5rem;
            cursor: pointer;
            color: var(--primary);
            border-radius: 10px;
            transition: background 0.3s;
            z-index: 1000;
        }

        .theme-toggle:hover {
            background: var(--primary);
            color: #000;
        }

        .download-resume {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            background: transparent;
            border: 2px solid var(--primary);
            padding: 0.5rem 1rem;
            color: var(--primary);
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .download-resume:hover {
            background: var(--primary);
            color: #000;
        }

        .glow {
            text-shadow: 0 0 5px var(--primary), 0 0 10px var(--accent);
        }

        footer {
            padding: 2rem;
            text-align: center;
            background-color: #111;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <button class="theme-toggle" onclick="toggleTheme()">Toggle Theme</button>
    <a href="resume.pdf" class="download-resume" download>Download Resume</a>

    <header>REYMART | Full Stack Developer</header>

    <section class="hero">
        <h1 class="glow">Crafting Code. Creating Impact.</h1>
        <p id="typewriter"></p>
        <img src="http://localhost/myWebinfo/img/rey.jpg" alt="Reymart Photo">
    </section>

    <section>
        <div class="card" data-aos="fade-up">
            <h2>Skills</h2>
            <p>JavaScript, PHP, MySQL, Laravel, Bootstrap, Node.js, React</p>
            <div class="progress-bar">
                <div class="progress-bar-fill"></div>
            </div>
        </div>

        <div class="card" data-aos="fade-up" data-aos-delay="100">
            <h2>Projects</h2>
            <p>Check out the latest work showcasing dynamic interfaces, full-stack solutions, and more.</p>
        </div>

        <div class="card" data-aos="fade-up" data-aos-delay="200">
            <h2>Contact</h2>
            <p>Email: <a href="mailto:reymart@example.com">reymart@example.com</a></p>
        </div>
    </section>

    <footer>
        &copy; 2025 Reymart. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();

        function toggleTheme() {
            const root = document.documentElement;
            const currentBg = getComputedStyle(root).getPropertyValue('--background').trim();
            if (currentBg === '#0d0d0d') {
                root.style.setProperty('--background', '#f5f5f5');
                root.style.setProperty('--foreground', '#111');
                root.style.setProperty('--card-bg', '#fff');
            } else {
                root.style.setProperty('--background', '#0d0d0d');
                root.style.setProperty('--foreground', '#fff');
                root.style.setProperty('--card-bg', '#1a1a1a');
            }
        }

        const text = "Turning ideas into modern, interactive, and scalable web applications that delight users and solve real-world problems.";
        let i = 0;
        function typeWriter() {
            if (i < text.length) {
                document.getElementById("typewriter").innerHTML += text.charAt(i);
                i++;
                setTimeout(typeWriter, 35);
            }
        }
        window.onload = typeWriter;
    </script>
</body>

</html>
