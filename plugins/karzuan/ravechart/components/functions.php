<?php


function loadPage($url, $refer = 'http://google.com/', $file_img = false, $post = false, $init = false, $redir = false, $cookie = false)
{
	static $time = 0;
	static $curl_redir = 0;
	static $curl_redir_max = 15;
	
	$us_agent = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; ru; rv:1.9.2.12) Gecko/20101026 Firefox/3.6.12 ( .NET CLR 3.5.30729; .NET4.0E)';

	if ($curl_redir >= $curl_redir_max)
	{
		$curl_redir = 0;
		return false;
	}

	

	if ($init == false)
	{
		$ch = curl_init($url);
	}
	else
	{
		$ch = $init;
	}
	curl_setopt($ch, CURLOPT_USERAGENT, $us_agent);
	@curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	//curl_setopt($ch, CURLOPT_TIMEOUT, 120);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	curl_setopt($ch, CURLOPT_REFERER, $refer);
	
	if ($cookie)
	{
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);	
	}
	else
	{
		if (!defined('BASEPATH'))
		{
			define('BASEPATH', './');
		}
		
		curl_setopt($ch, CURLOPT_COOKIEJAR, BASEPATH."cookie1.txt");
		curl_setopt($ch, CURLOPT_COOKIEFILE, BASEPATH."cookie1.txt");		
	}
	
	
	if ($redir)
	{
		curl_setopt($ch, CURLOPT_HEADER, 1);
	}
	else
	{
		curl_setopt($ch, CURLOPT_HEADER, 0);
	}
	
	if ($post)
	{
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	
	if ($file_img && !$redir)
	{
		$fp = fopen($file_img, 'w');
		curl_setopt($ch, CURLOPT_FILE, $fp);
	}
	$page = curl_exec($ch);

	if ($file_img && !$redir)
	{
		fclose($fp);
	}
	
	if ($redir)
	{
		list($header, $page) = explode("\r\n\r\n", $page, 2);
	}
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

	if (($http_code == 301 || $http_code == 302) && !$redir)
	{
		return loadPage($url, $refer, $file_img, $post, $ch, true);
	}
	elseif ($http_code == 301 || $http_code == 302)
	{
		$matches = array();
		preg_match('/Location:(.*?)(\n|$)/is', $header, $matches);
		$url = @parse_url(trim($matches[1]));
		if (!$url)
		{
			$curl_redir = 0;			
			//$page = mb_convert_encoding($page, 'utf-8', 'windows-1251');
			return $page;
		}
		$last_url = parse_url(curl_getinfo($ch, CURLINFO_EFFECTIVE_URL));
		
		if (!$url['scheme'])
		{
			$url['scheme'] = $last_url['scheme'];
		}
			
		if (!$url['host'])
		{
			$url['host'] = $last_url['host'];
		}
			
		if (!$url['path'])
		{
			$url['path'] = $last_url['path'];
		}
			
		$new_url = $url['scheme'].'://'.$url['host'].$url['path'].(empty($url['query']) ? '' : '?'.$url['query']);
		
		
		curl_setopt($ch, CURLOPT_URL, $new_url);
		$curl_redir++;
		return loadPage($new_url, $refer, $file_img, $post, $ch);
	}
	else
	{
		$curl_redir = 0;
		@curl_close($ch);
		if ($file_img && !$redir)
		{
			if (is_array(@getimagesize($file_img)))
			{
				return true;
			}
			else
			{
				@unlink($file_img);
				return false;
			}
		}
		//$page = mb_convert_encoding($page, 'utf-8', 'windows-1251');
		return $page;
	}
}

	


function print2($array, $noexit = false) {
	echo '<pre>',print_r($array, 1),'</pre>';
	
	if (!$noexit) exit;
}