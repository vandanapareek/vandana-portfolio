<?php

function vandana_theme_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'vandana_theme_setup' );


function vandana_theme_assets() {
    wp_enqueue_style(
        'vandana-style',
        get_stylesheet_uri()
    );
}

add_action( 'wp_enqueue_scripts', 'vandana_theme_assets' );


function vandana_handle_contact_form() {

    if ( ! isset( $_POST['vandana_contact_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce(
        $_POST['vandana_contact_nonce'],
        'vandana_contact_form'
    ) ) {
        return;
    }

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        return;
    }

    if ( ! is_email( $email ) ) {
        return;
    }
    
    wp_mail(
        get_option( 'admin_email' ),
        'New message from your website',
        "Name: $name\nEmail: $email\n\n$message"
    );

    set_transient( 'vandana_contact_success', true, 30 );

    wp_safe_redirect( home_url( '/contact/' ) );
    exit;
}

add_action( 'admin_post_vandana_contact', 'vandana_handle_contact_form' );
add_action( 'admin_post_nopriv_vandana_contact', 'vandana_handle_contact_form' );