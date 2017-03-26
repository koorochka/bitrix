if(!function_exists("l"))
{
    /**
     * @param $str
     */
    function l($str)
    {
        $file = $_SERVER["DOCUMENT_ROOT"]."/koorochka/log.txt";

        /**
         * get log string? where append neo string
         */
        $current = file_get_contents($file);

        /**
         * formating prolog
         */
        $separator = "\r\n";
        $prolog = $separator ."############# D-function: #################";
        $prolog .= $separator . "This function save string data in log like a string";
        $prolog .= $separator . "cat koorochka/log.txt or cat log.txt";
        $prolog .= $separator . "The result is:";
        $prolog .= $separator . "##########################################";
        $prolog .= $separator;

        /**
         * formating epilog
         */
        $epilog = $separator . "############" . date("d.m.Y H:i:s") . "#############";
        $epilog .= $separator;


        $current .=  $prolog . $str . $epilog;

        file_put_contents($file, $current);
    }
}