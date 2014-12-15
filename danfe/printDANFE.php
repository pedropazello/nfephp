<?php

require_once('../libs/NFe/DanfeNFePHP.class.php');

$docxml = $_POST['xml'];
$cnpj = $_POST['cnpj'];

$logo = 'logos/'.$cnpj;

if ( is_file($logo) ){
	$danfe = new DanfeNFePHP($docxml, 'P', 'A4', $logo,'I','');
} else {
	$danfe = new DanfeNFePHP($docxml, 'P', 'A4','','I','');
}
$id = $danfe->montaDANFE();
$impresso = $danfe->printDANFE($id.'.pdf','I');

?>
