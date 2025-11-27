<?php
/**
 * Twenty Twenty-Five Child Theme Functions
 * NordicLeads - Lead generation og outreach til danske virksomheder
 *
 * @package Twenty_Twenty_Five_Child
 * @since 1.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function twentytwentyfive_child_setup() {
    // Make theme available for translation
    load_child_theme_textdomain('twentytwentyfive-child', get_stylesheet_directory() . '/languages');
    
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'twentytwentyfive_child_setup');

/**
 * Custom Favicon - Override WordPress site icon
 */
function nordicleads_custom_favicon() {
    // Remove default WordPress site icon
    remove_action('wp_head', 'wp_site_icon', 99);
}
add_action('init', 'nordicleads_custom_favicon');

/**
 * Enqueue Parent and Child Theme Styles and Scripts
 */
function twentytwentyfive_child_enqueue_assets() {
    // Parent theme stylesheet
    wp_enqueue_style(
        'twentytwentyfive-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );
    
    // Tailwind CSS (local copy to avoid CDN blocking)
    wp_enqueue_style(
        'tailwind-local',
        get_stylesheet_directory_uri() . '/assets/tailwind.min.css',
        array(),
        '3.4.1'
    );
    
    // Google Fonts - Inter
    wp_enqueue_style(
        'google-fonts-inter',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );
    
    // Child theme stylesheet
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('twentytwentyfive-parent-style', 'tailwind-local', 'google-fonts-inter'),
        wp_get_theme()->get('Version')
    );
    
    // Child theme JavaScript
    wp_enqueue_script(
        'twentytwentyfive-child-script',
        get_stylesheet_directory_uri() . '/app.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('twentytwentyfive-child-script', 'nordicleadsData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('nordicleads_nonce'),
        'siteUrl' => get_site_url(),
        'themeUrl' => get_stylesheet_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_assets');

/**
 * Add Preconnect to External Domains for Performance
 */
function twentytwentyfive_child_resource_hints($urls, $relation_type) {
    if ($relation_type === 'preconnect') {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin'
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin'
        );
        $urls[] = array(
            'href' => 'https://www.google-analytics.com'
        );
        $urls[] = array(
            'href' => 'https://www.googletagmanager.com'
        );
    }
    return $urls;
}
add_filter('wp_resource_hints', 'twentytwentyfive_child_resource_hints', 10, 2);

/**
 * Add Custom Security Headers
 */
function twentytwentyfive_child_security_headers() {
    if (!is_admin()) {
        // Content Security Policy
        header("Content-Security-Policy: default-src 'self' https:; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://www.googletagmanager.com https://www.google-analytics.com https://connect.facebook.net https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self' https://www.google-analytics.com https://www.facebook.com;");
        
        // X-Frame-Options
        header('X-Frame-Options: SAMEORIGIN');
        
        // X-Content-Type-Options
        header('X-Content-Type-Options: nosniff');
        
        // Referrer Policy
        header('Referrer-Policy: strict-origin-when-cross-origin');
        
        // Permissions Policy
        header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
    }
}
add_action('send_headers', 'twentytwentyfive_child_security_headers');

/**
 * Add Favicon Support
 */
function twentytwentyfive_child_favicon() {
    $favicon_path = get_stylesheet_directory_uri() . '/assets/favicon.svg';
    echo '<link rel="icon" href="' . esc_url($favicon_path) . '" type="image/svg+xml">';
}
add_action('wp_head', 'twentytwentyfive_child_favicon', 5);

/**
 * Disable Emojis (Performance Optimization)
 */
function twentytwentyfive_child_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'twentytwentyfive_child_disable_emojis');

/**
 * Remove Query Strings from Static Resources (Performance)
 */
function twentytwentyfive_child_remove_query_strings($src) {
    if (strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'twentytwentyfive_child_remove_query_strings', 15);
add_filter('style_loader_src', 'twentytwentyfive_child_remove_query_strings', 15);

/**
 * Defer JavaScript Loading (Performance)
 */
function twentytwentyfive_child_defer_scripts($tag, $handle, $src) {
    // Don't defer jQuery or admin scripts
    $defer_exclusions = array('jquery', 'jquery-core', 'jquery-migrate');
    
    if (in_array($handle, $defer_exclusions) || is_admin()) {
        return $tag;
    }
    
    return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'twentytwentyfive_child_defer_scripts', 10, 3);

/**
 * AJAX Handler for Contact Form Submission
 */
function twentytwentyfive_child_handle_contact_form() {
    // Verify nonce
    check_ajax_referer('nordicleads_nonce', 'nonce');
    
    // Sanitize inputs
    $name = sanitize_text_field($_POST['name']);
    $company = sanitize_text_field($_POST['company']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Ugyldig e-mail adresse.'));
        return;
    }
    
    // Prepare email
    $to = get_option('admin_email'); // Or use: info@nordicleads.dk
    $subject = 'Ny henvendelse fra ' . $name . ' (' . $company . ')';
    $body = "Navn: $name\n";
    $body .= "Virksomhed: $company\n";
    $body .= "E-mail: $email\n";
    $body .= "Telefon: $phone\n\n";
    $body .= "Besked:\n$message\n";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );
    
    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);
    
    if ($sent) {
        // Log lead (optional - could save to database)
        do_action('nordicleads_new_lead', array(
            'name' => $name,
            'company' => $company,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'timestamp' => current_time('mysql')
        ));
        
        wp_send_json_success(array(
            'message' => 'Tak for din henvendelse! Vi kontakter dig inden for 24 timer.'
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'Der opstod en fejl. Prøv venligst igen eller kontakt os direkte på info@nordicleads.dk'
        ));
    }
    
    wp_die();
}
add_action('wp_ajax_nordicleads_contact', 'twentytwentyfive_child_handle_contact_form');
add_action('wp_ajax_nopriv_nordicleads_contact', 'twentytwentyfive_child_handle_contact_form');

/**
 * Add Body Classes for Customization
 */
function twentytwentyfive_child_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'nordicleads-frontpage';
    }
    return $classes;
}
add_filter('body_class', 'twentytwentyfive_child_body_classes');

/**
 * Custom Excerpt Length
 */
function twentytwentyfive_child_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'twentytwentyfive_child_excerpt_length');

/**
 * Custom Excerpt More
 */
function twentytwentyfive_child_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'twentytwentyfive_child_excerpt_more');

/**
 * Add Structured Data JSON-LD to Head
 */
function twentytwentyfive_child_structured_data() {
    if (!is_front_page()) {
        return;
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@graph' => array(
            // Organization
            array(
                '@type' => 'Organization',
                '@id' => get_site_url() . '/#organization',
                'name' => 'NordicLeads',
                'url' => get_site_url(),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_stylesheet_directory_uri() . '/assets/logo.svg',
                    '@id' => get_site_url() . '/#logo'
                ),
                'contactPoint' => array(
                    '@type' => 'ContactPoint',
                    'email' => 'info@nordicleads.dk',
                    'contactType' => 'customer service',
                    'areaServed' => 'DK',
                    'availableLanguage' => 'da'
                ),
                'sameAs' => array()
            ),
            // ProfessionalService
            array(
                '@type' => 'ProfessionalService',
                '@id' => get_site_url() . '/#service',
                'name' => 'NordicLeads',
                'description' => 'Lead generation og outreach til danske virksomheder - GDPR-sikre leads fra offentlige kilder',
                'provider' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'areaServed' => array(
                    '@type' => 'Country',
                    'name' => 'Denmark'
                ),
                'serviceType' => 'Lead Generation',
                'priceRange' => '$$'
            ),
            // Service
            array(
                '@type' => 'Service',
                'serviceType' => 'B2B Lead Generation',
                'provider' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'areaServed' => array(
                    '@type' => 'Country',
                    'name' => 'Denmark'
                ),
                'hasOfferCatalog' => array(
                    '@type' => 'OfferCatalog',
                    'name' => 'Lead Generation Services',
                    'itemListElement' => array(
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name' => 'GDPR-sikker lead generation'
                            )
                        ),
                        array(
                            '@type' => 'Offer',
                            'itemOffered' => array(
                                '@type' => 'Service',
                                'name' => 'Kolde emails på dansk'
                            )
                        )
                    )
                )
            ),
            // WebPage
            array(
                '@type' => 'WebPage',
                '@id' => get_site_url() . '/#webpage',
                'url' => get_site_url(),
                'name' => 'NordicLeads - Lead generation og outreach til danske virksomheder',
                'isPartOf' => array(
                    '@id' => get_site_url() . '/#website'
                ),
                'about' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'description' => 'Få 50-250 nye kunder hver måned med GDPR-sikre leads fra offentlige kilder. Dansk support, hurtig opsætning, ingen spam-risiko.',
                'inLanguage' => 'da-DK'
            ),
            // WebSite
            array(
                '@type' => 'WebSite',
                '@id' => get_site_url() . '/#website',
                'url' => get_site_url(),
                'name' => 'NordicLeads',
                'description' => 'Lead generation og outreach til danske virksomheder',
                'publisher' => array(
                    '@id' => get_site_url() . '/#organization'
                ),
                'inLanguage' => 'da-DK'
            ),
            // BreadcrumbList
            array(
                '@type' => 'BreadcrumbList',
                '@id' => get_site_url() . '/#breadcrumb',
                'itemListElement' => array(
                    array(
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Forside',
                        'item' => get_site_url()
                    )
                )
            )
        )
    );
    
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'twentytwentyfive_child_structured_data', 1);

/**
 * Remove Unnecessary WordPress Head Items (Performance & Security)
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

/**
 * Enable SVG Upload Support
 */
function twentytwentyfive_child_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'twentytwentyfive_child_mime_types');

/**
 * Fix SVG Display in Media Library
 */
function twentytwentyfive_child_fix_svg_display($response, $attachment, $meta) {
    if ($response['mime'] == 'image/svg+xml' && empty($response['sizes'])) {
        $svg_path = get_attached_file($attachment->ID);
        if (file_exists($svg_path)) {
            $svg = simplexml_load_file($svg_path);
            if ($svg !== false) {
                $width = (int) $svg['width'];
                $height = (int) $svg['height'];
                $response['sizes'] = array(
                    'full' => array(
                        'url' => $response['url'],
                        'width' => $width,
                        'height' => $height,
                        'orientation' => $width > $height ? 'landscape' : 'portrait'
                    )
                );
            }
        }
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'twentytwentyfive_child_fix_svg_display', 10, 3);

/**
 * Custom Admin Footer Text
 */
function twentytwentyfive_child_admin_footer() {
    echo 'NordicLeads Theme v' . wp_get_theme()->get('Version');
}
add_filter('admin_footer_text', 'twentytwentyfive_child_admin_footer');

