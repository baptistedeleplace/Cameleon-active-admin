<?php

$model = $_REQUEST['model'];
$o = new $model;
$fields = $o->fields;
$data = $o->getArray();