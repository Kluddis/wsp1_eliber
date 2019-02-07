<?php

$host = 'localhost';
$dbname = 'blogg';
$user = 'admin';
$password = 'Omegalul';


//Define verible for host, dbname and charset
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
//Define Variabel with atribute for our PDO-object
$attr = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
//Create our new PDO-object
$pdo = new PDO($dsn, $user, $password, $attr);

//Test our Connection
if($pdo) {
    //Define my SqL -var
    $sql = "SELECT p.Slug, p.Headline, u.Username, p.Creation_time, p.Text  FROM posts AS p JOIN users AS u ON p.UserID = u.ID  ORDER BY Creation_time DESC";
    //Define $model-array
    $model= array();

//Fill our pre-drfined $model-array
foreach($pdo->query($sql) as $row){
    $model += array(
        $row['Slug'] => array(
                'title' => $row['Headline'],
                'author' => $row['Username'],
               'date' => $row['Creation_time'],
                'text' => $row['Text']
            ),
    );

}

}
//
else {
print_r($pdo->errorInfo());
}

?>
