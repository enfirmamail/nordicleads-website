<?php
/**
 * WordPress Admin Password Reset Script
 * 
 * INSTRUCTIONS:
 * 1. Place this file in your WordPress root directory (where wp-config.php is)
 * 2. Access it via: http://localhost:8000/reset-password.php
 * 3. Enter your new password
 * 4. DELETE THIS FILE after use for security!
 */

// Load WordPress
require_once('wp-load.php');

// Check if form was submitted
if (isset($_POST['new_password']) && isset($_POST['username'])) {
    $username = sanitize_user($_POST['username']);
    $new_password = $_POST['new_password'];
    
    // Get user
    $user = get_user_by('login', $username);
    
    if ($user) {
        // Reset password
        wp_set_password($new_password, $user->ID);
        
        echo '<div style="padding: 20px; background: #4CAF50; color: white; font-family: Arial; border-radius: 5px; margin: 20px;">';
        echo '<h2>✅ Password Reset Successful!</h2>';
        echo '<p><strong>Username:</strong> ' . esc_html($username) . '</p>';
        echo '<p><strong>New Password:</strong> ' . esc_html($new_password) . '</p>';
        echo '<p><a href="' . admin_url() . '" style="color: white; text-decoration: underline;">Go to WordPress Admin →</a></p>';
        echo '</div>';
        
        // Auto-delete this file after successful reset
        if (file_exists(__FILE__)) {
            @unlink(__FILE__);
            echo '<p style="color: #ff9800; margin: 20px;"><strong>⚠️ This file has been automatically deleted for security.</strong></p>';
        }
    } else {
        echo '<div style="padding: 20px; background: #f44336; color: white; font-family: Arial; border-radius: 5px; margin: 20px;">';
        echo '<h2>❌ User not found!</h2>';
        echo '<p>Username "' . esc_html($username) . '" does not exist.</p>';
        echo '</div>';
    }
} else {
    // Show form
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Reset WordPress Admin Password</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                max-width: 500px;
                margin: 50px auto;
                padding: 20px;
                background: #f5f5f5;
            }
            .form-container {
                background: white;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            h1 {
                color: #333;
                margin-bottom: 20px;
            }
            label {
                display: block;
                margin-bottom: 8px;
                color: #555;
                font-weight: bold;
            }
            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 12px;
                margin-bottom: 20px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 14px;
            }
            button {
                background: #0073aa;
                color: white;
                padding: 12px 30px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                width: 100%;
            }
            button:hover {
                background: #005a87;
            }
            .warning {
                background: #fff3cd;
                border: 1px solid #ffc107;
                padding: 15px;
                border-radius: 4px;
                margin-bottom: 20px;
                color: #856404;
            }
        </style>
    </head>
    <body>
        <div class="form-container">
            <h1>🔐 Reset WordPress Admin Password</h1>
            <div class="warning">
                <strong>⚠️ Security Notice:</strong> Delete this file immediately after use!
            </div>
            <form method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="admin" required>
                
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" required>
                
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>

