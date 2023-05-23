<?php
session_start();

// Destroy all session data
session_destroy();

// Clear any existing cache
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

// Redirect to login page
header('Location: index.php');
exit();
?>
