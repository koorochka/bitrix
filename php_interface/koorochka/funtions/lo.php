//var_dump ����� ���������� ����������
//print_r ����� ���������� ����������
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