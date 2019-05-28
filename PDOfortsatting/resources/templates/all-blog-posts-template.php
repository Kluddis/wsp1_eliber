<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);


// Content - New way for Blogging
echo '<div class="content">';
echo '<h2>Alla blogginlägg</h2>';
echo $error;

/* Search Form */
echo <<<SEARCH
    <form class="" action="" method="post">
        Fallande: <input type="radio" name="order" value="DESC" checked>
        Stigande: <input type="radio" name="order" value="ASC"><br>
        Söktext: <br>
        <input type="text" name="searchText" value=""><br>
        <input type="submit" name="search" value="Sök">
    </form>
SEARCH;
foreach ($model as $key => $value) {
    $text = shorttext($value['text']);
    echo <<<post
    <div class="post">
        <h3>{$value['title']} </h3>
        <p class="author">Författare:  {$value['author']}</p>
        <p class="date">Datum: {$value['date']} </p>
        <p class="message">$text...<a href="index.php?page=blogg&post= {$key}  ">Läs mer</a></p>
    </div>
post;
}

echo '</div>';

require ('resources/views/footer.php');
?>
