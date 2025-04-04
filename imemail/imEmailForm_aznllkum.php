<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre', @$_POST['imObjectForm_3_1'], '', false);
	$form->setField('Consulta', @$_POST['imObjectForm_3_2'], '', false);
	$form->setField('Email ', @$_POST['imObjectForm_3_3'], '', false);
	$form->setField('Teléfono', @$_POST['imObjectForm_3_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '45E64639B8431E0B27A2ADFCB710768C' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('', '', 'example@example.com', '', "", false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file