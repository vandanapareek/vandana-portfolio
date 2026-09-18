<?php get_header(); ?>

<main class="contact-page">

    <section class="contact-intro">
        <p class="eyebrow">LET'S TALK</p>

        <h1>Have a project in mind?</h1>

        <p>
            Tell me a little about what you're working on.
        </p>

        <div class="contact-links">
            <a href="mailto:vandana.pareek42@gmail.com">Email</a>
            <a href="https://www.linkedin.com/in/vandanapareeek/" target="_blank">LinkedIn</a>
            <a href="https://github.com/vandanapareek" target="_blank">GitHub</a>
            <a href="https://www.upwork.com/freelancers/~01710d6bd922c62f66" target="_blank">Upwork</a>
        </div>

        <?php if ( get_transient( 'vandana_contact_success' ) ) : ?>
            <div class="contact-success">
                <strong>Message sent!</strong>
                <span>Thanks for reaching out. I'll get back to you soon.</span>
            </div>
            <?php delete_transient( 'vandana_contact_success' ); ?>
        <?php endif; ?>

        <form method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
            <input type="hidden" name="action" value="vandana_contact">
            <?php wp_nonce_field( 'vandana_contact_form', 'vandana_contact_nonce' ); ?>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>

    </section>

</main>

<?php get_footer(); ?>
