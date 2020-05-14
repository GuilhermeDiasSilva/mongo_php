<?php
$manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");

$bw=new \MongoDB\Driver\BulkWrite;

$filter=['nome'=>'Guilherme'];
//$option[];
$bw->delete($filter);

$manager->executeBulkWrite('raiz.academicos',$bw);
