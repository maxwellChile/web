<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre', @$_POST['imObjectForm_18_1'], '', false);
	$form->setField('Teléfono', @$_POST['imObjectForm_18_2'], '', false);
	$form->setField('EMAIL ', @$_POST['imObjectForm_18_3'], '', false);
	$form->setField('Consulta', @$_POST['imObjectForm_18_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '13C6F074482F5E4FCA62A7CD11087612' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('', '', 'example@example.com', '', "", false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file