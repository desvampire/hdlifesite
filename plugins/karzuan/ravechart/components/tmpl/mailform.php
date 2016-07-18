<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
	 $("#Send").after('<label class="error" id="after_submit"></label>');
	 $('#code').click(function() {
	 $("#after_submit").html('');
	 });

	 $('#Send').click(function() {

			// name validation

			var nameVal = $("#name").val();
			if(nameVal == '') {

				$("#lname").html('<span class="redtext">Введите Ваше имя</span>');
				$("#name").focus();
				return false
			}
			else
			{
				$("#name_error").html('');
			}


			/// email validation

			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var emailaddressVal = $("#email").val();

			if(emailaddressVal == '') {
				$("#lemail").html('<span class="redtext">Введите Ваш e-mail</span>');
				$("#email").focus();
				return false
			}
			else if(!emailReg.test(emailaddressVal)) {
				$("#lemail").html('<span class="redtext">Введите корректный e-mail</span>');
				$("#email").focus();
				return false

			}
			else
			{
				$("#email_error").html('');
			}


			var str = $("#mailsend").serialize();
			$.post("/tmpl/post.php", str, function(response) {

			if(response==1)
			{
				mailSubsend()

				/*
				$("#after_submit").html('');
				$("#Send").after('<label class="success" id="after_submit">Сообщение отправлено.</label>');
				change_captcha();
				clear_form();*/
			}
			else
			{
				$("#after_submit").html('Ошибка! Не правильно введен код с картинки.');
				$("#code").focus();
			}



		});

		return false;
	 });

	 // refresh captcha
	 $('img#refresh').click(function() {

			change_captcha();
	 });

	 function change_captcha()
	 {
	 	document.getElementById('captcha').src="/tmpl/get_captcha.php?rnd=" + Math.random();
	 }

	 function clear_form()
	 {
	 	$("#name").val('');
		$("#email").val('');
		$("#code").val('');

	 }
});
// ]]></script>
<?php

//ini_set('display_errors', 1);
//error_reporting(E_ALL);



if ($_POST['action'] =='form')
	{

		?>
		<!--
		<form action="" method="post" id="mailsend">
		<input type="hidden" name="action" value="mail"></input>
		<p><input type="text" value="" name="email"></p>

		<p><input onclick="mailSubsend(); return false" type="button" value="OK"></p>
		</form>
		-->
		<div id="myform_cont"><form id="mailsend" action="#">
		<p><label id="lname">Ваше имя</label><input id="name" class="zinput" name="name" size="30" type="text" /></p>
		<p><label id="lemail">E-mail</label><input id="email" class="zinput" name="email" size="30" type="text" /></p>
		<p><input type="checkbox" name="recive_mail" value="1" checked id="mailchekb"><label id="mailchekb">Получать рассылку</label></p>
		<div id="cap_wrap"><label class="lsmall">Символы с картинки</label> <input id="code" name="code" type="text" /><img id="refresh" src="/tmpl/refresh.jpg" alt="" width="25" />
		<div id="cap_img"><img id="captcha" src="/tmpl/get_captcha.php" alt="" /></div>
		</div>
		<div id="fsubmt"><input id="Send" type="submit" value="Отправить" /></div>
		<input type="hidden" name="image" value="<?php echo $_POST['image']?>" />
		<input type="hidden" name="type" value="<?php echo $_POST['type']?>" />
		<input type="hidden" name="profile" value="<?php echo $_POST['profile']?>" />
		<input type="hidden" name="difin" value="<?php echo $_POST['difin']?>" />
		<input type="hidden" name="authority" value="<?php echo $_POST['authority']?>" />
		<input type="hidden" name="strategy" value="<?php echo $_POST['strategy']?>" />
		<input type="hidden" name="theme" value="<?php echo $_POST['theme']?>" />
		<input type="hidden" name="cross" value="<?php echo $_POST['cross']?>" />
		</form></div>
		<?php
		//echo $_POST['action'];
	}

else
	{
		echo '<div id="mailsended"><center>Ошибка обработки!<br/>Проверьте правильность указанных данных в форме.</center></div>';
	}
















?>