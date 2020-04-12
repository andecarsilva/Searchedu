<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-skyblue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-skyblue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-default-skyblue" style="background-color:#ffffff;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Avaliação de faculdade</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">Nome<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title">Email<span class="required">*</span></label><input class="large" type="text" name="input1" required="required"/></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">Escolha a faculdade<span class="required">*</span></label><div class="large"><span><select name="select" required="required">

		<option value="option 1">option 1</option>
		<option value="option 2">option 2</option>
		<option value="option 3">option 3</option></select><i></i></span></div></div>
	<div class="element-rating<?php frmd_add_class("rating"); ?>"><label class="title">Qual a nota que você daria para essa faculdade<span class="required">*</span></label><div class="rating"><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Escreva uma mensagem para uma melhor avaliação</label><textarea class="small" name="textarea" cols="20" rows="5" ></textarea></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-default-skyblue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>