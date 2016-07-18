<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

 // Таблица русского алфавита:
    $trans_table_ru = array(
        'А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е', 'Ё', 'ё',
        'Ж', 'ж', 'З', 'з', 'И', 'и', 'Й', 'й', 'К', 'к', 'Л', 'л', 'М', 'м',
        'Н', 'н', 'О', 'о', 'П', 'п', 'Р', 'р', 'С', 'с', 'Т', 'т', 'У', 'у',
        'Ф', 'ф', 'Х', 'х', 'Ц', 'ц', 'Ы', 'ы', 'Э', 'э', 'Ч', 'ч', 'Ш', 'ш',
        'Щ', 'щ', 'Ю', 'ю', 'Я', 'я'
    );
    // Таблица латинского алфавита для адекватной замены букв (транслит):
    $trans_table_lat = array(
        'A', 'a', 'B', 'b', 'V', 'v', 'G', 'g', 'D', 'd', 'E', 'e', 'E', 'e',
        'J', 'j', 'Z', 'z', 'I', 'i', 'Y', 'y', 'K', 'k', 'L', 'l', 'M', 'm',
        'N', 'n', 'O', 'o', 'P', 'p', 'R', 'r', 'S', 's', 'T', 't', 'U', 'u',
        'F', 'f', 'H', 'h', 'C', 'c', 'I', 'i', 'E', 'e',
        'Ch', 'ch', 'Sh', 'sh', 'Sh', 'sh', 'Yu', 'yu', 'Ya', 'ya'
    );
	
	function getTransName($str) {
        global $trans_table_ru, $trans_table_lat;
        // заменяем пробелы на знак подчерка:
        $str = str_replace(" ", "_", $str);
        // Убираем все не алфавитные символы, а также некоторые непроизносимые:
        $str = preg_replace('/W|Ь|ь|Ъ|ъ/i', '', $str);
        // убираем все дублирующиеся подчерки (нам они не нужны):
        $str = preg_replace('/_+/', '_', $str);
        // обрезаем строку:
        $str = trim($str, "_");
        // переводим русские символы в аналогичные латинские по определеным выше
        // правилам:
        $str = str_replace($trans_table_ru, $trans_table_lat, $str);
        // переводим в нижний регистр:
        $str = mb_strtolower($str, 'utf-8');

        return $str;
    }
	
	function dbconnect($dblocation, $dbname, $dbuser, $dbpassword)                        																   	    
				{
					mysql_connect($dblocation, $dbuser, $dbpassword) or die ('No connection with database') ;
					mysql_select_db ($dbname)or die (mysql_error()) ;
					mysql_query("SET character_set_client = 'utf8'");
					mysql_query("SET character_set_connection = 'utf8'");
					mysql_query("SET character_set_results = 'utf8'");
				}

	
	$email_from = "info@humandesign.pro";
	$email_from_text = "Дизайн человека";
	$email_to = $_POST['email'];
	$sender = $_POST['name'];
	
	$where_temp = dirname(dirname(__FILE__))."/tmp/";//danmap
	$img_url= 'http://www.jovianarchive.com'.$_POST['image'];
	$img_file_name_arr = explode('/', $_POST['image']);
	$img_file_name = $img_file_name_arr[count($img_file_name_arr)-1];
	$img_file_cont = file_get_contents($img_url);
	file_put_contents($where_temp.$img_file_name, $img_file_cont);
	
		
	$filename = $img_file_name; //Имя файла для прикрепления
	$to = $email_to; //Кому
	$from = $email_from; //От кого
	$from_txt = $email_from_text;
	$subject = "Ваша персональная карта"; //Тема
	$message = "<b>Здравствуйте, ".$sender."</b><br/><br/>"; //Текст письма
	$message .="Ниже приведены данные Вашей персональной карты:<br/>";
	$message .= "<b>Тип: </b>".$_POST['type']."<br/>";
	$message .= "<b>Профиль: </b>".$_POST['profile']."<br/>";
	$message .= "<b>Определение: </b>".$_POST['difin']."<br/>";
	$message .= "<b>Внутренний авторитет: </b>".$_POST['authority']."<br/>";
	$message .= "<b>Стратегия: </b>".$_POST['strategy']."<br/>";
	$message .= "<b>Ложное Я: </b>".$_POST['theme']."<br/>";
	$message .= "<b>Инкарнационный крест: </b>".$_POST['cross']."<br/>";
	
	//$email_from_text = iconv('utf-8', 'cp1251', $email_from_text);
	//$subject = iconv('utf-8', 'cp1251', $subject);
	$message = iconv('utf-8', 'cp1251', $message);
	
	$boundary = "---"; //Разделитель
	/* Заголовки */
	$headers = "From: ".$from_txt." <".$from.">\nReply-To: ".$from."\n";
	$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\" \n".'X-Mailer: PHP/' . phpversion();
	$body = "--$boundary\n";
	/* Присоединяем текстовое сообщение */
	$body .= "Content-type: text/html; charset='cp1251'\n";
	$body .= "Content-Transfer-Encoding: quoted-printablenn";
	$body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
	$body .= $message."\n";
	$body .= "--$boundary\n";
	$file = fopen($where_temp.$filename, "r"); //Открываем файл
	$text = fread($file, filesize($where_temp.$filename)); //Считываем весь файл
	fclose($file); //Закрываем файл
	/* Добавляем тип содержимого, кодируем текст файла и добавляем в тело письма */
	$body .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode($filename)."?=\n";
	$body .= "Content-Transfer-Encoding: base64\n";
	$body .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode($filename)."?=\n\n";
	$body .= chunk_split(base64_encode($text))."\n";
	$body .= "--".$boundary ."--\n";
	
	if(mail($to, $subject, $body, $headers))
		{
			if(@$_POST['recive_mail'] == 1)
				{
					$recive_mail =1;
				}
			else
				{
					$recive_mail =0;
				}
			
			echo '<div id="mailsended"><center>Ваша персональная карта отправлена <br/> на указанный Вами e-mail <b>'.$email_to.'</b></center></div>';
			unlink($where_temp.$filename);
			//danmap
			/*
			require_once $_SERVER['DOCUMENT_ROOT'].'/configuration.php';
			$configs = new JConfig();
			//echo $configs->host;
			$dblocation = $configs->host;
			$dbname = $configs->db;
			$dbuser = $configs->user;
			$dbpassword = $configs->password;
			$pref = $configs->dbprefix;
			dbconnect($dblocation, $dbname, $dbuser, $dbpassword);
			$query = mysql_query("select email from ".$pref."users where email = '".$email_to."'");
			$row = mysql_fetch_assoc($query);
			$e_inb = $row['email'];
			if ($e_inb == '')
				{
					//echo 'нет такого адреса';
					$query = mysql_query("SELECT id FROM ".$pref."users order by id desc limit 0, 1 ");
					$ids_arr = mysql_fetch_assoc($query);
					$last_id = $ids_arr['id'];
					$newid = $last_id+1;
					$usrname = preg_replace('~[/!();$,№«»"+:*^%#@\[\]&{}]+~s','', $sender);
					$usernik = getTransName($usrname);
					mysql_query("insert into ".$pref."users (id, name, username, email, block, sendEmail, registerDate) values ('$newid', '$usrname', '$usernik', '$email_to', '1', '$recive_mail', NOW())");
					mysql_query("insert into ".$pref."user_usergroup_map (user_id, group_id) values ('$newid', '13')");
				}
			else
				{
					mysql_query("update ".$pref."users set lastvisitDate = NOW(), sendEmail = '$recive_mail' where email = '$e_inb'");
				}
			*/
			//danmap
		}
	else
		{
			echo '<div id="mailsended"><center>На данный момент нет возможности отправить персональную карту,<br/> попробуйте не много позже</center></div>';
		}
?>
