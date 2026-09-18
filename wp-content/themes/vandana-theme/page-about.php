<?php get_header(); ?>

<main class="about-page">

    <section class="about-intro">
        <p class="eyebrow">ABOUT ME</p>

        <h1>Software engineer, problem solver & curious human.</h1>

        <div class="about-text">
            <?php
            while ( have_posts() ) :
                the_post();

                the_content();
            endwhile;
            ?>
        </div>

        <a class="resume-link"
        href="http://localhost:8881/wp-content/uploads/2026/09/Full_Stack_Engineer_Vandana_Pareek.pdf"
        target="_blank">
            Download Resume →
        </a>
    </section>

    <section class="about-strengths">

    <p class="eyebrow">WHAT I BRING</p>

    <h2>Broad experience, practical problem solving.</h2>

    <div class="strengths-grid">

        <div>
            <h3>Full Stack</h3>
            <p>From APIs and backend systems to web interfaces and integrations.</p>
        </div>

        <div>
            <h3>Problem Solving</h3>
            <p>Comfortable stepping into existing systems, debugging issues and improving them.</p>
        </div>

        <div>
            <h3>Adaptability</h3>
            <p>Years of working across different technologies, projects and engineering environments.</p>
        </div>

    </div>

    </section>

</main>

<?php get_footer(); ?>