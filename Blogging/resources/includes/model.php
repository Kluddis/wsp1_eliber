<?php
//practice  array

//Simple array for topics - Övning 4
$model = array(
    'Första inlägget',
    'Snart är de vår',
    'Robin presenterar sig',
    'Senaste inlägget'
);

//2D Associative array for full posts - Övning 9
$model = array(
    'forsta-inlagget' => array(
        'slug' => 'forsta-inlagget',
        'title' => 'Första inlägget',
        'author' => 'Gugge',
        'date' => '2015-01-01',
        'text' => 'Här kommer det första inlägget i sin helhet. Välkommen till Labb 3! Här övar vi på PHP för att bli duktiga webbserverprogrammerare.'
    ),
    'snart-ar-det-var' => array(
        'slug' => 'snart-ar-det-var',
        'title' => 'Snart är de vår',
        'author' => 'Gugge',
        'date' => '2015-02-24',
        'text' => 'Snart är det vår! Då övar vi på PHP för att bli duktiga webbserverprogrammerare.'
    ),
    'robin-presenterar-sig' => array(
        'slug' => 'robin-presenterar-sig',
        'title' => 'Robin presenterar sig',
        'author' => 'Robin',
        'date' => '2015-02-25',
        'text' => 'Robin är en trevlig prick som gärna övar på PHP för att som du bli en duktig webbserverprogrammerare.'
    ),
    'senaste-inlagget' => array(
        'slug' => 'senaste-inlagget',
        'title' => 'Senaste inlägget',
        'author' => 'Robin',
        'date' => '2015-02-26',
        'text' => 'Här kommer senaste inlägget i sin helhet. Här övar vi på PHP för att bli duktiga webbserverprogrammerare. Detta är tredje labben och andra labben i en serie labbar som tillsammans bygger ihop detta projekt. Ett enkelt PHP-projekt men väl strukturerat och genomtänkt konstruerat.'
    )
);

// echo $model['2']['slug']; //value 2
// echo '<br>';
// echo'<pre>';
// print_r($model);
// echo'</pre>';


?>