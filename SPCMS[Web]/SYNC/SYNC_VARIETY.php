<?php
require_once '../core/initInternal.php';
$output = DB::getInstance()->query('SELECT * FROM variety');
if($output)
{
	print(json_encode($output->results()));
}
