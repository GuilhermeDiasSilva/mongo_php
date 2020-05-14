<?php

$manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$up = new \MongoDB\Driver\BulkWrite;

//$up->update(['nome'=>'Guilherme'],['nome'=>'Guilherme','idade'=>20]);
$up->update(['nome'=>'Guilherme'],['$set'=>['nome'=>'Guilherme Dias']]);

$manager->executeBulkWrite('raiz.academicos',$up);
