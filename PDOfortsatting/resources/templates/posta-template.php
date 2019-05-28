<?php
// Include Meta
require ('resources/includes/head.php');

// Include Header
require ('resources/views/header.php');

navigation($header);

// Old way from Beginning
//echo $content;
// Content - New way for Blogging
echo '<div class="content">';
echo '<h2>Kort information</h2>';
echo $error;

echo <<<Posta
<form method="post">
posta: <br>
<input type="text" name="text" style="width: 550px" style"height: 200px">
<>

echo '</div>';

// Inlcude Footer
require ('resources/views/footer.php');
?>
