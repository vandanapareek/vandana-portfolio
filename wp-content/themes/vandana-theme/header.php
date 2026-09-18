<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ( is_front_page() ) : ?>
    <meta name="description" content="Vandana Pareek is a Full Stack Software Engineer with 11 years of experience building web applications, APIs, backend systems, WordPress solutions and AI applications.">
    <?php elseif ( is_page('about') ) : ?>
        <meta name="description" content="Learn about Vandana Pareek, a Full Stack Software Engineer with 11 years of experience across PHP, Go, Python, JavaScript, WordPress and AI.">
    <?php elseif ( is_page('contact') ) : ?>
        <meta name="description" content="Get in touch with Vandana Pareek about software engineering, WordPress, backend development, APIs and AI application projects.">
    <?php endif; ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
        Vandana
    </a>

    <nav class="site-nav">
        <a href="<?php echo esc_url(home_url('/about/')); ?>">About</a>
        <a href="<?php echo esc_url(home_url('/')); ?>#experience">Experience</a>
        <a href="<?php echo esc_url(home_url('/')); ?>#skills">Skills</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>
    </nav>
</header>