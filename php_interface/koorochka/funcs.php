<?
if(!function_exists("l"))
{
    function l($str)
    {
        $file = $_SERVER["DOCUMENT_ROOT"]."/bitrix/koorochka.log.txt";
        $current = file_get_contents($file);
        $current .= $str . "<hr>";
        file_put_contents($file, $current);
    }
}
if(!function_exists("s"))
{
    function s($str)
    {
        file_put_contents($_SERVER["DOCUMENT_ROOT"]."/bitrix/koorochka.socet.php", $str);
    }
}
if (!function_exists("d") )
{
	function d($value, $type="pre")
	{
		if ( is_array( $value ) || is_object( $value ) )
		{
			echo "<" . $type . " class=\"prettyprint\">".htmlspecialcharsbx( print_r($value, true) )."</" . $type . ">";
		}
		else
		{
			echo "<" . $type . " class=\"prettyprint\">".htmlspecialcharsbx($value)."</" . $type . ">";
		}
	}
}

if (!function_exists("fd") )
{
	function fd($value, $type="pre")
	{
		$value = file_get_contents($value);
		echo "<" . $type . " class=\"prettyprint\">".htmlspecialcharsbx($value)."</" . $type . ">";
	}
}

//var_dump Вывод отладочной информации
if (!function_exists("vd") )
{
	function vd($value)
	{
		echo "<pre>";
		var_dump($value);
		echo "</pre>";
	}
}

//var_dump Вывод отладочной информации
//print_r Вывод отладочной информации
if (!function_exists("lo") )
{
	function lo($value)
	{
		if ( is_array( $value ) || is_object( $value ) )
		{
			$text = print_r($value, true);
		}
		else
		{
			$text = $value;
		}

		AddMessage2Log( $text );
		//AddMessage2Log( $text, "", 0, false );
	}
}

// IsAdmin
if (!function_exists("ia") )
{
	function ia()
	{
		global $USER;
		return $USER->IsAdmin();
	}
}

// IsAdmin
if (!function_exists("dia") )
{
	function dia($value)
	{
		if ( ia() )
		{
			d($value);
		}
	}
}
?>
