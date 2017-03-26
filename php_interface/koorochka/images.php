<?
class ImagesLoader{
    var $_images = array();

    /**
     * @return array
     */
    public function GetImages()
    {
        return $this->_images;
    }

    /**
     * @param $array
     */
    public function SetImages($array)
    {
        $this->_images = $array;
    }

    public function SaveOnDesk($dir="img")
    {
        // На всякий случай создадим каталог. Если он уже создан,
        // сообщение об ошибки мы не увидим, поскольку воспользуемся оператором @:
        @mkdir($dir, 0777);
        $images = $this->GetImages();
        foreach($images as $image)
        {
            // Копируем файл из /tmp в uploads
            // Имя файла будет таким же, как и до отправки на сервер:
            copy($image['tmp_name'],$dir.basename($image['name']));
        }
    }
}
?>