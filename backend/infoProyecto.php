<?php

include_once('/vendor/autoload.php');

use Enserio\db\DB;

#var_dump($_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php');

//recogida de valores
$cliente = trim(isset($_POST['cliente']) ? $_POST['cliente'] : "");

$db = new DB();
$context = $db->context;
$objResp = new stdClass();

//var_dump($db);
$id = 1;

$result = $context->query('SELECT * FROM proyecto where id =' . $id);
//var_dump($result->fetch());

$objResp->status = 1;
$objResp->data = $result->fetch();
echo json_encode($objResp);
