<?php

$manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$query = new \MongoDB\Driver\Query([]);

$cursor=$manager->executeQuery('raiz.academicos',$query);

foreach($cursor as $c){
    echo $c->nome."<br>";
    echo $c->idade;
}