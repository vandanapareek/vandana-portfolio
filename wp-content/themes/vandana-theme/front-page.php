<?php get_header(); ?>

<main>

    <section class="hero">
    <div class="hero-content">

        <p class="eyebrow">FULL STACK SOFTWARE ENGINEER</p>

        <h1>Hi, I'm Vandana.</h1>

        <h2>
            I build software — from the backend to the browser.
        </h2>

        <p>
            11 years of building software across backend systems,
            web applications, APIs, integrations and more.
        </p>

        <p class="hero-stack">
            PHP · Go · Node.js · Python · Vue/Nuxt · React
        </p>

        <a href="#contact">Let's Talk</a>

    </div>
    </section>

    <section class="about" id="about">
    <div class="about-content">

        <p class="eyebrow">A LITTLE ABOUT ME</p>

        <h2>I never really followed one stack.</h2>

        <p>
            I started my career working on service-based projects, where every
            project brought a new problem to solve and often a new technology to learn.
            That's where I built my foundation in Core PHP, CodeIgniter, CakePHP and
            WordPress.
        </p>

        <p>
            Over the years, my work evolved into full-stack and product engineering.
            I've worked across PHP, Go, Node.js and Python on the backend, while also
            building interfaces with Vue, Nuxt and React.
        </p>

        <p>
            Today, I bring that broad experience into freelance work — whether it's
            building a WordPress solution, developing an API, fixing a production
            problem, or working on a larger application.
        </p>

    </div>
    </section>

    <section class="experience" id="experience">
    <div class="experience-content">

        <p class="eyebrow">EXPERIENCE</p>

        <h2>A career built across different kinds of software.</h2>

        <div class="experience-item">
            <span>2014 — 2017</span>
            <h3>Service-based projects</h3>
            <p>
                Worked across dozens of client projects, building and maintaining
                web applications while learning different technologies and frameworks
                including Core PHP, CodeIgniter, CakePHP and WordPress.
            </p>
        </div>

        <div class="experience-item">
            <span>2017 — 2021</span>
            <h3>CarDekho</h3>
            <p>
                Moved into full-stack product development, working with PHP, Yii2,
                NuxtJS and Elasticsearch while building and improving web applications
                and APIs.
            </p>
        </div>

        <div class="experience-item">
            <span>2021 — 2023</span>
            <h3>Chope</h3>
            <p>
                Built Go-based microservices for F&B ordering and payments, working
                with multiple payment gateways, webhooks, queues, APIs and AWS services.
            </p>
        </div>

        <div class="experience-item">
            <span>2023 — 2025</span>
            <h3>U-Reg</h3>
            <p>
                Worked across PHP, Node.js and frontend technologies while building
                regulatory software, improving application security and working with
                AWS cloud services.
            </p>
        </div>

        <div class="experience-item">
            <span>2025 — Present</span>
            <h3>Freelance</h3>
            <p>
                Working with PHP and WordPress on client projects, including custom
                themes, plugins, integrations, maintenance and application enhancements.
                Also building Python-based AI applications using FastAPI, LangChain,
                RAG and LLM APIs.
            </p>
        </div>

    </div>
    </section>

    <section class="skills" id="skills">
    <div class="skills-content">

        <p class="eyebrow">MY TOOLBOX</p>

        <h2>What I work with.</h2>

        <div class="skill-group">
            <h3>Languages</h3>
            <p>PHP · Go · JavaScript · Python</p>
        </div>

        <div class="skill-group">
            <h3>Frontend</h3>
            <p>VueJS · NuxtJS · React</p>
        </div>

        <div class="skill-group">
            <h3>Backend</h3>
            <p>Laravel · CakePHP · Node.js · Flask · Django · FastAPI</p>
        </div>

        <div class="skill-group">
            <h3>Data & Cloud</h3>
            <p>MySQL · PostgreSQL · MongoDB · DynamoDB · Elasticsearch · AWS · Docker</p>
        </div>

        <div class="skill-group">
            <h3>AI</h3>
            <p>LangChain · RAG · LLM APIs · OpenAI API · Embeddings</p>
        </div>

    </div>
    </section>

    <section class="services">

    <div class="services-content">

        <p class="eyebrow">WHAT I CAN HELP WITH</p>

        <h2>From fixing what's broken to building what's next.</h2>

        <div class="services-grid">

            <div class="service-item">
                <h3>WordPress & PHP</h3>
                <p>Custom themes, plugins, WooCommerce, integrations and ongoing improvements.</p>
            </div>

            <div class="service-item">
                <h3>Backend & APIs</h3>
                <p>APIs, backend systems and integrations using PHP, Go, Node.js and Python.</p>
            </div>

            <div class="service-item">
                <h3>Existing Applications</h3>
                <p>Bug fixing, maintenance, debugging, production issues and application enhancements.</p>
            </div>

            <div class="service-item">
                <h3>AI Applications</h3>
                <p>LLM integrations, RAG, document processing and automation with Python.</p>
            </div>

        </div>

    </div>

    </section>

    <section class="beyond-code" id="beyond-code">
    <div class="beyond-content">

        <p class="eyebrow">BEYOND CODE</p>

        <h2>There’s more to me than code.</h2>

        <p>
            I'm probably planning my next trip, exploring somewhere new,
            or taking far too many photos along the way.
        </p>

        <div class="travel-photos">
            <div class="travel-photo">
                <img src="http://localhost:8881/wp-content/uploads/2026/09/gemini.png" alt="Travel photo">
            </div>

            <div class="travel-photo">
                <img src="http://localhost:8881/wp-content/uploads/2026/09/gemini1.png" alt="Travel photo">
            </div>

            <div class="travel-photo">
                <img src="http://localhost:8881/wp-content/uploads/2026/09/gemini_vintage2.png" alt="Travel photo">
            </div>
        </div>

    </div>
    </section>

    <section class="contact" id="contact">
    <div class="contact-content">

        <p class="eyebrow">LET'S TALK</p>

        <h2>Have a project in mind?</h2>

        <p>
            Tell me what you're working on and let's see how I can help.
        </p>

        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
            Get in touch →
        </a>
    </div>
    </section>
</main>

<?php get_footer(); ?>