<?php
// Get the parameter from the URL
$param = $_GET['param'];

// Check if the parameter exists
if ($param) {
    echo 'Login page with parameter: ' . $param;
} else {
    // Redirect to 404 page if the parameter is missing
    header('Location: /404.php');
    exit();
}
?>
