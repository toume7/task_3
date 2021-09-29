<?php


class printer
{
    public $type;
    public $color;
    public $price;
    public $functional;
    public $size;

    /**
     * printer constructor.
     * @param $type
     * @param $color
     * @param $price
     * @param $functional
     * @param $size
     */
    public function __construct($type, $color, $price, $functional, $size)
    {
        $this->type = $type;
        $this->color = $color;
        $this->price = $price;
        $this->functional = $functional;
        $this->size = $size;
    }

    public function connected()
    {
        /**
         * код подключение к устройству
         */
    }

    public function on()
    {
        /**
         * код включения
         */
    }

    public function printdocument()
    {
        /**
         * код распечатавания документов
         */
    }

    public function off()
    {
        /**
         * код выключения
         */
    }

    public function Dsplay()
    {
        echo('тип принтера-' . $this->type . '<br>' . 'цвет принтера-' . $this->color . '<br>' . 'цена принтера-' . $this->price . '<br>' . 'функционал-' . $this->functional . '<br>' . 'размер принтера-' . $this->size . '<br>');
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getFunctional()
    {
        return $this->functional;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

}