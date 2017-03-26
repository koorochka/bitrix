if(!function_exists("s"))
{
    function s($str)
    {
        /**
         * formating prolog
         */
        $separator = "\r\n";
        $prolog = $separator ."############# S-function: #################";
        $prolog .= $separator . "This function save string data in socket like a string";
        $prolog .= $separator . "cat koorochka/socet.txt or cat socet.txt";
        $prolog .= $separator . "The result is:";
        $prolog .= $separator . "################" . date("d.m.Y H:i:s") . "#################";
        $prolog .= $separator;
        /**
         * formating epilog 
         */
        $epilog = $separator . "###########################";
        $epilog .= $separator;


        $str =  $prolog . $str . $epilog;
        file_put_contents($_SERVER["DOCUMENT_ROOT"]."/koorochka/socet.txt", $str);
    }
}