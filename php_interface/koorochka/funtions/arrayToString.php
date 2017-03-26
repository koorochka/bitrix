if(!function_exists("arrayToString")) {
    /**
     * @param $array
     * @return string
     */
    function arrayToString($array)
    {
        $separator = "\r\n";
        $result = $separator;
        foreach ($array as $k => $val) {
            if (is_array($val)) {
                $result .= "----------------------------";
                $result .= arrayToString($val);
                $result .= "----------------------------";
            } else {
                $result .= $k . ": " . $val;
            }
            $result .= $separator;
        }
        return $result;
    }
}