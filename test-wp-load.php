<?php
/**
 * Test WordPress Load
 * Besøg: https://nordicleads.dk/test-wp-load.php
 */

echo '<h1>WordPress Load Test</h1>';

// Test 1: Check if wp-load.php exists
$wp_load_path = __DIR__ . '/wp-load.php';
echo '<h2>1. Checking wp-load.php</h2>';
if (file_exists($wp_load_path)) {
    echo '<p style="color: green;">✅ wp-load.php found at: ' . $wp_load_path . '</p>';
} else {
    echo '<p style="color: red;">❌ wp-load.php NOT found at: ' . $wp_load_path . '</p>';
    echo '<p>Current directory: ' . __DIR__ . '</p>';
    echo '<p>Files in root:</p><ul>';
    $files = scandir(__DIR__);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && is_file(__DIR__ . '/' . $file)) {
            echo '<li>' . $file . '</li>';
        }
    }
    echo '</ul>';
    die();
}

// Test 2: Try to load WordPress
echo '<h2>2. Loading WordPress</h2>';
try {
    require_once($wp_load_path);
    echo '<p style="color: green;">✅ WordPress loaded successfully</p>';
} catch (Exception $e) {
    echo '<p style="color: red;">❌ Error loading WordPress: ' . $e->getMessage() . '</p>';
    die();
}

// Test 3: Check WordPress functions
echo '<h2>3. Checking WordPress Functions</h2>';
if (function_exists('wp_insert_post')) {
    echo '<p style="color: green;">✅ wp_insert_post() function exists</p>';
} else {
    echo '<p style="color: red;">❌ wp_insert_post() function NOT found</p>';
}

if (function_exists('get_permalink')) {
    echo '<p style="color: green;">✅ get_permalink() function exists</p>';
} else {
    echo '<p style="color: red;">❌ get_permalink() function NOT found</p>';
}

// Test 4: Check if user is logged in
echo '<h2>4. Checking User Authentication</h2>';
if (function_exists('is_user_logged_in')) {
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        echo '<p style="color: green;">✅ User is logged in: ' . $user->user_login . '</p>';
        
        if (function_exists('current_user_can')) {
            if (current_user_can('manage_options')) {
                echo '<p style="color: green;">✅ User has admin capabilities</p>';
            } else {
                echo '<p style="color: orange;">⚠️ User does NOT have admin capabilities</p>';
            }
        }
    } else {
        echo '<p style="color: orange;">⚠️ User is NOT logged in</p>';
        echo '<p><a href="' . wp_login_url($_SERVER['REQUEST_URI']) . '">Log ind her</a></p>';
    }
} else {
    echo '<p style="color: red;">❌ is_user_logged_in() function NOT found</p>';
}

// Test 5: Check database connection
echo '<h2>5. Checking Database Connection</h2>';
global $wpdb;
if (isset($wpdb) && $wpdb->last_error === '') {
    echo '<p style="color: green;">✅ Database connection OK</p>';
} else {
    echo '<p style="color: red;">❌ Database connection error: ' . (isset($wpdb) ? $wpdb->last_error : 'wpdb not set') . '</p>';
}

echo '<hr>';
echo '<h2>✅ Test Complete</h2>';
echo '<p>Hvis alle tests er grønne, kan du prøve <a href="create-case-studies-v2.php">create-case-studies-v2.php</a></p>';

