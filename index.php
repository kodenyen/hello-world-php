<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        :root {
            --primary: #2563eb;
            --secondary: #64748b;
            --bg: #f8fafc;
            --text: #1e293b;
        }
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            margin: 0;
            padding: 0;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        header {
            background: white;
            padding: 1.5rem 0;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary);
        }
        nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul a {
            text-decoration: none;
            color: var(--secondary);
            font-weight: 500;
            transition: color 0.2s;
        }
        nav ul a:hover {
            color: var(--primary);
        }
        .hero {
            padding: 6rem 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #0f172a;
        }
        .hero p {
            font-size: 1.25rem;
            color: var(--secondary);
            max-width: 600px;
            margin: 0 auto 2rem;
        }
        .btn {
            background: var(--primary);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: opacity 0.2s;
        }
        .btn:hover {
            opacity: 0.9;
        }
        .section {
            padding: 5rem 0;
        }
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }
        .card h3 {
            margin-top: 0;
            color: #0f172a;
        }
        footer {
            background: #0f172a;
            color: white;
            padding: 3rem 0;
            text-align: center;
            margin-top: 5rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">MyPortfolio</div>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Hi, I'm a Web Developer</h1>
                <p>I build clean, modern, and responsive websites. Looking to bring your ideas to life? Let's talk.</p>
                <a href="#contact" class="btn">Get in touch</a>
            </div>
        </section>

        <section id="projects" class="section">
            <div class="container">
                <h2 class="section-title">My Projects</h2>
                <div class="grid">
                    <div class="card">
                        <h3>Project One</h3>
                        <p>A sophisticated web application built with modern technologies and a focus on user experience.</p>
                    </div>
                    <div class="card">
                        <h3>Project Two</h3>
                        <p>E-commerce platform with seamless payment integration and real-time inventory management.</p>
                    </div>
                    <div class="card">
                        <h3>Project Three</h3>
                        <p>Interactive data visualization dashboard for complex analytics and reporting.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="container">
                <h2 class="section-title">Contact Me</h2>
                <div class="card" style="max-width: 500px; margin: 0 auto;">
                    <form>
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem;">Name</label>
                            <input type="text" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem;">Email</label>
                            <input type="email" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem;">Message</label>
                            <textarea style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; height: 100px;"></textarea>
                        </div>
                        <button type="submit" class="btn" style="width: 100%; border: none; cursor: pointer;">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> MyPortfolio. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
