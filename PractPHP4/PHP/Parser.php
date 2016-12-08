<?php
	if(isset($_POST['_URL']))
	{
		$url = $_POST['_URL'];
		$url = iconv("UTF-8","windows-1251",$url);
		
		$html = file_get_contents($url);

		if($_POST['_Pattern'] == 1)
		{
			//$pattern = "!=/[a-z]{1,}/";
                          $pattern = "/[а-яА-Я]{1,}/u";
		}
		if($_POST['_Pattern'] == 2)
		{
			$pattern = "/[а-яА-Я]{1}[0-9]{3}[а-яА-Я]{2}/u";
		}
		if($_POST['_Pattern'] == 3)
		{
			$pattern = "/[а-яА-Я]{1,} - [а-яА-Я]{1,}/u";
		}
		if($_POST['_Pattern'] == 4)
		{
			$pattern = "/[a-zA-Z0-9_]{1,}@[a-zA-Z0-9_]{1,}.[a-zA-Z]{1,}/u"; 
		}
		if($_POST['_Pattern'] == 5)
		{
			//$pattern = "/[0-9]{1,}.[0-9]{1,}$/"; 
                         $pattern ="/([1-9][0-9]*|0)(\.[0-9]{2})/"; 
		}
		//if($_POST['_Pattern'] == 6)
		//{
		//	$pattern = "/(\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})/"; 
		//}
		
		$result_index = preg_match_all($pattern, $html, $result, PREG_PATTERN_ORDER);
		if($result_index == 0)
		{
			echo "Извините, но на сайте ничего не найдено";
		}
		else
		{
			for($i = 0; $i < $result_index; $i++)
			{
				echo "<Div style=\"width:100%;\">".$i." ".@$result[0][$i]."</Div>";
			}
		}
	}
?>