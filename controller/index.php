<?php

$model = $_REQUEST['model'];
$o = new $model;
$fields = $o->fields;

$new_fields = $fields;
$list_fields = array_slice($fields, 0, 3);

$data = $o->getArray();