<?php
/**
 * Create Services Pages Script
 * Run this file once to create the Services page structure
 * 
 * Usage: Navigate to this file in your browser or run via WP-CLI
 * Example: php create-services-pages.php (if WP is loaded)
 */

// Load WordPress
require_once('wp-load.php');

// Security check - only allow execution in specific contexts
if (!defined('ABSPATH')) {
    die('WordPress not loaded');
}

// Function to create or update a page
function create_service_page($title, $slug, $template = 'page-service-single.php', $parent_id = 0) {
    // Check if page already exists
    $existing_page = get_page_by_path($slug);
    
    if ($existing_page) {
        echo "Page '{$title}' already exists (ID: {$existing_page->ID})\n";
        return $existing_page->ID;
    }
    
    // Create page
    $page_data = array(
        'post_title'    => $title,
        'post_name'     => $slug,
        'post_content'  => '<p>Placeholder content for ' . $title . '. Update this content in WordPress admin.</p>',
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_author'   => 1,
        'post_parent'   => $parent_id,
        'page_template' => $template
    );
    
    $page_id = wp_insert_post($page_data);
    
    if ($page_id && !is_wp_error($page_id)) {
        // Set the template
        update_post_meta($page_id, '_wp_page_template', $template);
        echo "Created page: {$title} (ID: {$page_id}, Slug: {$slug})\n";
        return $page_id;
    } else {
        echo "Error creating page: {$title}\n";
        if (is_wp_error($page_id)) {
            echo "Error message: " . $page_id->get_error_message() . "\n";
        }
        return false;
    }
}

echo "<h2>Creating Services Pages...</h2>\n";
echo "<pre>\n";

// Create main Services page (currently not used as main, but could be added to menu later)
$services_main_id = create_service_page(
    'Services',
    'services',
    'page-services.php'
);

if ($services_main_id) {
    // Create service sub-pages
    $services = array(
        array(
            'title' => 'Lead Generation',
            'slug' => 'services/lead-generation',
            'template' => 'page-service-single.php'
        ),
        array(
            'title' => 'Webudvikling',
            'slug' => 'services/webudvikling',
            'template' => 'page-service-single.php'
        ),
        array(
            'title' => 'AI-Integration & Automation',
            'slug' => 'services/ai-integration-automation',
            'template' => 'page-service-single.php'
        ),
        array(
            'title' => 'Custom Løsninger',
            'slug' => 'services/custom-loesninger',
            'template' => 'page-service-single.php'
        )
    );
    
    foreach ($services as $service) {
        create_service_page(
            $service['title'],
            $service['slug'],
            $service['template']
        );
    }
}

echo "\n✅ Done! All services pages have been created.\n";
echo "\nNext steps:\n";
echo "1. Go to WordPress Admin → Pages to see all created pages\n";
echo "2. Edit each service page to add real content\n";
echo "3. The Services dropdown menu is already in the header\n";
echo "</pre>\n";

?>

