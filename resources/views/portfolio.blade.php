<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Pratik Malani</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f4f7fb;
        }

        /* ===========================
            Navigation Bar
        =========================== */

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 80px;
            background: rgba(15, 23, 42, .95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
            z-index: 1000;
        }

        .logo {
            font-size: 30px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 1px;
        }

        .logo span {
            color: #3b82f6;
        }

        nav ul {
            display: flex;
            list-style: none;
            align-items: center;
        }

        nav ul li {
            margin-left: 35px;
        }

        nav ul li a {
            text-decoration: none;
            color: #e2e8f0;
            font-size: 16px;
            font-weight: 500;
            transition: .3s;
            position: relative;
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 0;
            height: 2px;
            background: #3b82f6;
            transition: .3s;
        }

        nav ul li a:hover {
            color: #3b82f6;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        @media(max-width:900px) {

            nav {
                padding: 18px 25px;
            }

            nav ul {
                display: none;
            }

        }

        /* Hero */

        .hero {

            height: 100vh;

            display: flex;

            align-items: center;

            justify-content: space-between;

            max-width: 1200px;

            margin: auto;

            padding: 100px 30px 0;
        }

        .hero-text {

            width: 55%;
        }

        .hero-text h3 {

            color: #2563eb;

            font-size: 24px;
        }

        .hero-text h1 {

            font-size: 60px;

            margin: 10px 0;
        }

        .hero-text p {

            color: #666;

            line-height: 30px;

            margin: 20px 0;
        }

        .btn {

            display: inline-block;

            padding: 14px 30px;

            background: #2563eb;

            color: white;

            text-decoration: none;

            border-radius: 30px;

            margin-right: 10px;

            transition: .3s;
        }

        .btn:hover {

            background: #0f172a;
        }

        .hero-img img {

            width: 360px;

            height: 460px;

            object-fit: cover;

            border-radius: 50%;

            border: 8px solid #2563eb;

            box-shadow: 0 15px 40px rgba(0, 0, 0, .2);
        }

        .social {

            margin-top: 25px;
        }

        .social a {

            display: inline-block;

            margin-right: 15px;

            text-decoration: none;

            color: white;

            background: #2563eb;

            padding: 12px 18px;

            border-radius: 50px;

            transition: .3s;
        }

        .social a:hover {

            background: #0f172a;
        }

        /* ===========================
            About Section
        =========================== */

        .about {
            padding: 100px 8%;
            background: #ffffff;
        }

        .about-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .about-left h2 {
            font-size: 42px;
            color: #0f172a;
            margin-bottom: 25px;
        }

        .about-left p {
            font-size: 17px;
            color: #64748b;
            line-height: 32px;
            margin-bottom: 20px;
        }

        .about-right {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .about-card {
            background: #fff;
            padding: 35px 20px;
            text-align: center;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            transition: .3s;
        }

        .about-card:hover {
            transform: translateY(-8px);
        }

        .about-card h3 {
            font-size: 38px;
            color: #2563eb;
            margin-bottom: 10px;
        }

        .about-card p {
            color: #64748b;
            font-size: 16px;
        }

        @media(max-width:900px) {

            .about-container {
                grid-template-columns: 1fr;
            }

            .about-right {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width:900px) {

            .hero-tag {
                display: inline-block;
                background: #dbeafe;
                color: #2563eb;
                padding: 8px 18px;
                border-radius: 30px;
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 20px;
            }

            .hero-text h1 {
                font-size: 58px;
                line-height: 1.2;
                margin-bottom: 10px;
                color: #0f172a;
            }

            .hero-text h1 span {
                color: #2563eb;
            }

            .hero-text h2 {
                font-size: 30px;
                font-weight: 600;
                color: #475569;
                margin-bottom: 20px;
            }

            .hero-text p {
                font-size: 18px;
                line-height: 32px;
                color: #64748b;
                margin-bottom: 30px;
            }

            .hero-buttons {
                display: flex;
                gap: 15px;
                flex-wrap: wrap;
                margin-bottom: 30px;
            }

            .btn-outline {
                background: transparent;
                color: #2563eb;
                border: 2px solid #2563eb;
            }

            .btn-outline:hover {
                background: #2563eb;
                color: #fff;
            }

            nav {

                padding: 20px;
            }

            nav ul {

                display: none;
            }

        }

        /* ===========================
                  Projects Section
        =========================== */

        .projects {
            padding: 100px 8%;
            background: #ffffff;
        }

        .projects-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 30px;
        }

        .project-card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
            transition: .35s;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
        }

        .project-content {
            padding: 30px;
        }

        .project-content h3 {
            color: #0f172a;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .project-content p {
            color: #64748b;
            line-height: 28px;
            margin-bottom: 25px;
        }

        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
        }

        .tech-stack span {
            background: #dbeafe;
            color: #2563eb;
            padding: 8px 16px;
            border-radius: 25px;
            font-size: 13px;
            font-weight: 600;
        }

        .project-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        /* ===========================
             Skills Section
        =========================== */

        .skills {
            padding: 100px 8%;
            background: #f8fafc;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 42px;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #64748b;
            font-size: 17px;
        }

        .skills-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: auto;
        }

        .skill-card {
            background: #fff;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            transition: .3s;
        }

        .skill-card:hover {
            transform: translateY(-8px);
        }

        .skill-card h3 {
            margin-bottom: 25px;
            color: #2563eb;
        }

        .skill-item {
            margin-bottom: 20px;
        }

        .skill-item span {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
        }

        .progress {
            width: 100%;
            height: 10px;
            background: #e2e8f0;
            border-radius: 30px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #2563eb, #38bdf8);
            color: #fff;
            font-size: 10px;
            text-align: right;
            padding-right: 8px;
            line-height: 10px;
            border-radius: 30px;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .skill-tags span {
            background: #dbeafe;
            color: #2563eb;
            padding: 10px 18px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
            transition: .3s;
        }

        .skill-tags span:hover {
            background: #2563eb;
            color: #fff;
        }


        @keyframes fillBar {
            from {
                width: 0;
            }
        }

        /* ===========================
            Experience
        =========================== */

        .experience {
            padding: 100px 8%;
            background: #f8fafc;
        }

        .timeline {
            position: relative;
            max-width: 1000px;
            margin: auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 35px;
            top: 0;
            width: 4px;
            height: 100%;
            background: #2563eb;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 50px;
            position: relative;
        }

        .timeline-icon {
            width: 70px;
            height: 70px;
            background: #2563eb;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            z-index: 2;
            flex-shrink: 0;
            box-shadow: 0 10px 25px rgba(37, 99, 235, .25);
        }

        .timeline-content {
            background: #fff;
            margin-left: 30px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            width: 100%;
            transition: .3s;
        }

        .timeline-content:hover {
            transform: translateY(-8px);
        }

        .timeline-date {
            color: #2563eb;
            font-weight: 600;
            display: block;
            margin-bottom: 10px;
        }

        .timeline-content h3 {
            color: #0f172a;
            margin-bottom: 5px;
        }

        .timeline-content h4 {
            color: #64748b;
            margin-bottom: 20px;
        }

        .timeline-content ul {
            padding-left: 20px;
        }

        .timeline-content li {
            margin-bottom: 12px;
            color: #475569;
            line-height: 28px;
        }

        .experience-tech {
            margin-top: 25px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .experience-tech span {
            background: #dbeafe;
            color: #2563eb;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            font-weight: 600;
        }

        @media(max-width:768px) {

            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                flex-direction: row;
            }

            .timeline-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }

            .timeline-content {
                margin-left: 20px;
            }

        }

        /* ===========================
             Education
        =========================== */

        .education {
            padding: 100px 8%;
            background: #ffffff;
        }

        .education-container {
            max-width: 1100px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .education-card {
            background: #fff;
            padding: 35px;
            border-radius: 18px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            transition: .35s;
        }

        .education-card:hover {
            transform: translateY(-10px);
        }

        .edu-icon {
            width: 80px;
            height: 80px;
            margin: auto;
            margin-bottom: 25px;
            background: #2563eb;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 36px;
        }

        .education-card h3 {
            color: #0f172a;
            margin-bottom: 10px;
        }

        .education-card h4 {
            color: #64748b;
            margin-bottom: 10px;
        }

        .education-card span {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            font-weight: 600;
        }

        .education-card p {
            color: #475569;
            line-height: 28px;
        }

        /* ===========================
            Achievements
        =========================== */

        .achievement {
            padding: 100px 8%;
            background: #f8fafc;
        }

        .achievement-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .achievement-card {
            background: #fff;
            border-radius: 18px;
            padding: 35px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
            transition: .35s;
        }

        .achievement-card:hover {
            transform: translateY(-10px);
        }

        .achievement-icon {
            width: 80px;
            height: 80px;
            margin: auto auto 25px;
            border-radius: 50%;
            background: #2563eb;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 36px;
        }

        .achievement-card h3 {
            color: #0f172a;
            margin-bottom: 15px;
        }

        .achievement-card p {
            color: #64748b;
            line-height: 28px;
        }

        /* ===========================
   Contact Section
=========================== */

        .contact {
            padding: 100px 8%;
            background: #ffffff;
        }

        .contact-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 50px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            gap: 20px;
            background: #f8fafc;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 15px;
            transition: .3s;
        }

        .contact-card:hover {
            transform: translateX(10px);
        }

        .contact-card .icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #2563eb;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 26px;
        }

        .contact-card h3 {
            margin-bottom: 5px;
        }

        .contact-card p {
            color: #64748b;
        }

        .social-links {
            margin-top: 30px;
        }

        .social-links a {
            display: inline-block;
            margin-right: 15px;
            padding: 12px 22px;
            border-radius: 30px;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            transition: .3s;
        }

        .social-links a:hover {
            background: #0f172a;
        }

        .contact-form {
            background: #f8fafc;
            padding: 35px;
            border-radius: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 16px;
            outline: none;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #2563eb;
        }

        .contact-form button {
            width: 100%;
        }

        @media(max-width:900px) {

            .contact-container {
                grid-template-columns: 1fr;
            }

        }

        /* ===========================
   Footer
=========================== */

        footer {
            background: #0f172a;
            color: #fff;
            text-align: center;
            padding: 40px 20px;
        }

        footer h3 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        footer p {
            color: #cbd5e1;
            margin-top: 10px;
        }

        #topBtn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
            transition: .3s;
        }

        #topBtn:hover {
            background: #0f172a;
        }
    </style>

</head>

<body>

    <nav>

        <div class="logo">
            Pratik Malani<span>.</span>
        </div>

        <ul>

            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#contact">Contact</a></li>

        </ul>

    </nav>

    <!-- Hero Section -->
    <section class="hero" id="home">

        <div class="hero-text">

            <span class="hero-tag">Welcome to My Portfolio</span>

            <h1>Hi, I'm <span>Pratik Malani</span></h1>

            <h2>PHP & Laravel Developer</h2>

            <p>
                Passionate Web Application Developer with hands-on experience in
                developing enterprise-level applications using <strong>PHP, Laravel,
                    MySQL, JavaScript, HTML, and CSS</strong>. Experienced in building
                Banking, Insurance, Hostel, Transport, and E-Commerce Management
                Systems with a strong focus on clean architecture, security, and
                performance.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn">View Projects</a>
                <a href="#experience" class="btn btn-outline">Experience</a>
                <a href="{{ asset('Pratik Resume.pdf') }}" target="_blank" class="btn">
                    View Resume
                </a>
            </div>

            <div class="social">

                <a href="https://linkedin.com/in/pratik-malani-564327281" target="_blank">
                    LinkedIn
                </a>

                <a href="https://github.com/pratikmalani" target="_blank">
                    GitHub
                </a>

                <a href="mailto:malanipratik9@gmail.com">
                    Email
                </a>

            </div>

        </div>

        <div class="hero-img">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Pratik Malani">
        </div>

    </section>
    <!-- About Section -->
    <section class="about" id="about">

        <div class="about-container">

            <div class="about-left">

                <h2>About Me</h2>

                <p>
                    I'm <strong>Pratik Malani</strong>, a passionate PHP & Laravel
                    Developer currently pursuing a Master of Computer Applications (MCA).
                    I specialize in building secure, scalable, and user-friendly web
                    applications using modern technologies.
                </p>

                <p>
                    At <strong>Bytes System</strong>, I develop enterprise applications,
                    manage databases, assist with server configuration and deployment,
                    and provide technical support. I enjoy solving real-world problems
                    and continuously learning new technologies.
                </p>

                <a href="#contact" class="btn">
                    Let's Connect
                </a>

            </div>

            <div class="about-right">

                <div class="about-card">
                    <h3>1+</h3>
                    <p>Years Experience</p>
                </div>

                <div class="about-card">
                    <h3>10+</h3>
                    <p>Projects Completed</p>
                </div>

                <div class="about-card">
                    <h3>8+</h3>
                    <p>Technologies</p>
                </div>

                <div class="about-card">
                    <h3>100%</h3>
                    <p>Commitment</p>
                </div>

            </div>

        </div>

    </section>
    <!-- Projects Section -->
    <section class="projects" id="projects">

        <div class="section-title">
            <h2>Featured Projects</h2>
            <p>
                A selection of enterprise applications and web solutions I've developed.
            </p>
        </div>

        <div class="projects-container">

            <!-- Project 1 -->
            <div class="project-card">

                <div class="project-content">

                    <h3>🏦 Banking Management System</h3>

                    <p>
                        Developed a secure banking administration system for managing
                        customers, employees, transactions, reports, and role-based access.
                    </p>

                    <div class="tech-stack">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>


                </div>

            </div>

            <!-- Project 2 -->
            <div class="project-card">

                <div class="project-content">

                    <h3>🛡 Insurance Management System</h3>

                    <p>
                        Enterprise insurance platform for customer onboarding,
                        policy management, renewals, claim processing,
                        and reporting.
                    </p>

                    <div class="tech-stack">
                        <span>Core PHP</span>
                        <span>MySQL</span>
                        <span>JavaScript</span>
                    </div>


                </div>

            </div>

            <!-- Project 3 -->
            <div class="project-card">

                <div class="project-content">

                    <h3>🛒 E-Commerce Platform</h3>

                    <p>
                        Complete online shopping application featuring product
                        management, shopping cart, order processing,
                        inventory management, and admin dashboard.
                    </p>

                    <div class="tech-stack">
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                    </div>


                </div>

            </div>

            <!-- Project 4 -->
            <div class="project-card">

                <div class="project-content">

                    <h3>🎓 Student Sathi</h3>

                    <p>
                        Student support platform providing notices,
                        academic resources, announcements,
                        and communication between students and faculty.
                    </p>

                    <div class="tech-stack">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>


                </div>

            </div>

        </div>

    </section>
    <!-- Skills Section -->
    <section class="skills" id="skills">

        <div class="section-title">
            <h2>Technical Skills</h2>
            <p>Technologies and tools I use to build scalable web applications.</p>
        </div>

        <div class="skills-container">

            <!-- Backend -->
            <div class="skill-card">
                <h3>Backend Development</h3>

                <div class="skill-item">
                    <span>PHP</span>
                    <div class="progress">
                        <div class="progress-bar" style="width:95%;">95%</div>
                    </div>
                </div>

                <div class="skill-item">
                    <span>Laravel</span>
                    <div class="progress">
                        <div class="progress-bar" style="width:90%;">90%</div>
                    </div>
                </div>

            </div>

            <!-- Frontend -->
            <div class="skill-card">
                <h3>Frontend Development</h3>

                <div class="skill-item">
                    <span>HTML5</span>
                    <div class="progress">
                        <div class="progress-bar" style="width:95%;">95%</div>
                    </div>
                </div>

                <div class="skill-item">
                    <span>CSS3</span>
                    <div class="progress">
                        <div class="progress-bar" style="width:90%;">90%</div>
                    </div>
                </div>

                <div class="skill-item">
                    <span>JavaScript</span>
                    <div class="progress">
                        <div class="progress-bar" style="width:80%;">80%</div>
                    </div>
                </div>

            </div>

            <!-- Database -->
            <div class="skill-card">
                <h3>Database</h3>

                <div class="skill-item">
                    <span>MySQL</span>
                    <div class="progress">
                        <div class="progress-bar" style="width:90%;">90%</div>
                    </div>
                </div>

            </div>

            <!-- DevOps & Tools -->
            <div class="skill-card">
                <h3>DevOps & Tools</h3>

                <div class="skill-tags">
                    <span>Git</span>
                    <span>GitHub</span>
                    <span>Linux</span>
                    <span>Apache</span>
                    <span>XAMPP</span>
                    <span>VS Code</span>
                    <span>Server Configuration</span>
                    <span>Deployment</span>
                    <span>Technical Support</span>
                    <span>CRM</span>
                </div>

            </div>

        </div>

    </section>

    <!-- Experience -->

    <!-- Experience Section -->
    <section class="experience" id="experience">

        <div class="section-title">
            <h2>Professional Experience</h2>
            <p>My professional journey in software development and IT.</p>
        </div>

        <div class="timeline">

            <!-- Experience 1 -->
            <div class="timeline-item">

                <div class="timeline-icon">
                    💼
                </div>

                <div class="timeline-content">

                    <span class="timeline-date">
                        May 2025 - Present
                    </span>

                    <h3>Web Developer</h3>

                    <h4>Bytes System</h4>

                    <ul>

                        <li>Developed Banking, Insurance, Hostel, Transport and E-Commerce Management Systems.</li>

                        <li>Built secure web applications using PHP, Laravel and MySQL.</li>

                        <li>Configured and deployed applications on on-premise servers.</li>

                        <li>Provided technical support and client issue resolution.</li>

                        <li>Managed CRM modules and optimized database performance.</li>

                        <li>Worked closely with clients to understand business requirements.</li>

                    </ul>

                    <div class="experience-tech">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>Linux</span>
                        <span>Apache</span>
                        <span>Git</span>
                    </div>

                </div>

            </div>

            <!-- Experience 2 -->

            <div class="timeline-item">

                <div class="timeline-icon">
                    🏢
                </div>

                <div class="timeline-content">

                    <span class="timeline-date">
                        Feb 2024 - Sep 2024
                    </span>

                    <h3>Associate Trainee</h3>

                    <h4>Suma Soft Pvt. Ltd.</h4>

                    <ul>

                        <li>Worked in the Insurance Process handling policy renewals.</li>

                        <li>Maintained customer records with high accuracy.</li>

                        <li>Collaborated with team members to improve operational efficiency.</li>

                        <li>Received the Best Quarter Performer Award.</li>

                    </ul>

                    <div class="experience-tech">
                        <span>Insurance</span>
                        <span>CRM</span>
                        <span>Support</span>
                        <span>Documentation</span>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- Education -->

    <!-- Education Section -->
    <section class="education" id="education">

        <div class="section-title">
            <h2>Education</h2>
            <p>My academic journey in computer science and software development.</p>
        </div>

        <div class="education-container">

            <!-- MCA -->

            <div class="education-card">

                <div class="edu-icon">
                    🎓
                </div>

                <h3>Master of Computer Applications (MCA)</h3>

                <h4>Dr. Moonje Institute</h4>

                <span>2024 – 2026</span>

                <p>
                    Pursuing MCA with specialization in software development,
                    cloud computing, databases, and modern web technologies.
                </p>

            </div>

            <!-- BSc -->

            <div class="education-card">

                <div class="edu-icon">
                    🖥️
                </div>

                <h3>B.Sc. Computer Science</h3>

                <h4>K. K. Wagh College</h4>

                <span>2021 – 2024</span>

                <p>
                    Graduated with a CGPA of <strong>7.44</strong>.
                    Built a strong foundation in programming,
                    database management, networking, and software engineering.
                </p>

            </div>

        </div>

    </section>
    <!-- Achievements -->
    <section class="achievement" id="achievement">

        <div class="section-title">
            <h2>Achievements</h2>
            <p>Recognition earned through dedication and consistent performance.</p>
        </div>

        <div class="achievement-container">

            <div class="achievement-card">

                <div class="achievement-icon">
                    🏆
                </div>

                <h3>Best Quarter Performer</h3>

                <p>
                    Awarded at Suma Soft for outstanding performance,
                    quality of work, and commitment.
                </p>

            </div>

            <div class="achievement-card">

                <div class="achievement-icon">
                    ⭐
                </div>

                <h3>Rising Star Employee</h3>

                <p>
                    Recognized for consistently delivering quality work
                    and taking ownership of responsibilities.
                </p>

            </div>

            <div class="achievement-card">

                <div class="achievement-icon">
                    🤝
                </div>

                <h3>Client Appreciation</h3>

                <p>
                    Appreciated by clients for technical support,
                    effective communication, and timely issue resolution.
                </p>

            </div>

        </div>

    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">

        <div class="section-title">
            <h2>Let's Work Together</h2>
            <p>
                Have a project, internship, or job opportunity? Feel free to get in touch.
            </p>
        </div>

        <div class="contact-container">

            <!-- Left Side -->
            <div class="contact-info">

                <div class="contact-card">
                    <div class="icon">📧</div>
                    <div>
                        <h3>Email</h3>
                        <p>malanipratik9@gmail.com</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="icon">📱</div>
                    <div>
                        <h3>Phone</h3>
                        <p>+91 7875654853 </p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="icon">📍</div>
                    <div>
                        <h3>Location</h3>
                        <p>Nashik, Maharashtra, India</p>
                    </div>
                </div>

                <div class="social-links">

                    <a href="https://github.com/pratikmalani" target="_blank">
                        GitHub
                    </a>

                    <a href="https://linkedin.com/in/pratik-malani-564327281" target="_blank">
                        LinkedIn
                    </a>

                </div>

            </div>

            <!-- Right Side -->

            <!-- <div class="contact-form">

                <form>

                    <input type="text" placeholder="Your Name" required>

                    <input type="email" placeholder="Your Email" required>

                    <input type="text" placeholder="Subject" required>

                    <textarea rows="6" placeholder="Write your message..." required></textarea>

                    <button type="submit" class="btn">
                        Send Message
                    </button>

                </form>

            </div> -->

        </div>

    </section>
    <footer>

        <h3>Pratik Malani</h3>

        <p>
            PHP & Laravel Developer | MCA Student
        </p>

        <p>
            © 2026 Pratik Malani. All Rights Reserved.
        </p>

    </footer>

    <a href="#" id="topBtn">↑</a>
</body>

</html>