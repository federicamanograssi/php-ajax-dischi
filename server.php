<?php

require __DIR__.'/database/database.php';

header('Content-Type: application/json');

$findList = $_GET['findList'];

switch($findList){
    case 'allAlbums':
        echo json_encode($database);
        break;

    case 'authors':
        $authors =[];

        foreach ($database as $album) {
            $authors[] = $album['author'];
        }
        
        echo json_encode($authors);
        break;

};


?>