//var_dump ����� ���������� ����������
if (!function_exists("vd") )
{
    function vd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
}