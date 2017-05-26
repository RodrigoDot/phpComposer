<?php

require_once'./vendor/autoload.php';

use \GUMP;

$dados = ['nome' => 'rodrigo'];
$regra = ['nome' => 'required|max_len,20'];

$is_valid = GUMP::is_valid($dados, $regra);

if($is_valid === true) {
	echo'uhuuuu';
} else {
	print_r($is_valid);
}