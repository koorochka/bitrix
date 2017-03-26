// IsAdmin
if (!function_exists("ia") )
{
    function ia()
    {
        global $USER;
        return $USER->IsAdmin();
    }
}