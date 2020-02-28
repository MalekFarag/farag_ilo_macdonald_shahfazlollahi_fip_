<?php
// finish later
function getPosts(){

    $pdo = Database::getInstance()->getConnection();


    $query = 'SELECT * FROM tbl_blog GROUP BY id';

    $blogGet = $pdo->prepare($query);
    $blogGet->execute();

    return $blogGet;
}