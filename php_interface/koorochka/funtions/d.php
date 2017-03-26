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