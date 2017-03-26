if (!function_exists("fd") )
{
    function fd($value, $type="pre")
    {
        $value = file_get_contents($value);
        echo "<" . $type . " class=\"prettyprint\">".htmlspecialcharsbx($value)."</" . $type . ">";
    }
}