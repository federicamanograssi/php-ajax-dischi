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

    case 'filterByAuthor':
        $currentAuthor = $_GET['currentAuthor'];
        $filteredList =[];
        if($currentAuthor=='All'){
            $filteredList=$database;
        } else {
            foreach ($database as $album) {
                if(!$currentAuthor=="" && $album['author']==$currentAuthor){
                    $filteredList[]=$album;
                }
            }
        };
        echo json_encode($filteredList);
        break;
};


?>