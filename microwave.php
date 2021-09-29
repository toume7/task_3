<?php


class microwave
{
    public $color;
    public $capacit;
    public $functional;
    public $size;

    /**
     * microwave constructor.
     * @param $color
     * @param $capacit
     * @param $functional
     * @param $size
     */
    public function __construct($color, $capacit, $functional, $size)
    {
        $this->color = $color;
        $this->capacit = $capacit;
        $this->functional = $functional;
        $this->size = $size;
    }

    public function Display()
    {
        echo('цвет микроволновки-' . $this->color . '<br>' . 'вместимость микроволновки-' . $this->capacit . '<br>' . 'функционал-' . $this->functional . "<br>" . 'размер микроволновки-' . $this->size . '<br>');
    }

    public function on()
    {
        /**
         * код включения
         */
    }

    public function openDoor()
    {
        /**
         * код открытия двери
         */
    }

    public function put_food()
    {
        /**
         * код для заклдыки еды
         */
    }

    public function closeDoor()
    {
        /**
         * код закрытия двери
         */
    }

    public function timer()
    {
        /**
         * код звключения таймера
         */
    }

    public function get_groceries()
    {
        /**
         * код доставания еды
         */
    }

    public function off()
    {
        /**
         * код выключения
         */
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
    public function getCapacit()
    {
        return $this->capacit;
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