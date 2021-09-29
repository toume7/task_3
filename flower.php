<?php


class flower
{
    public $color;
    public $scent;
    public $size;

    /**
     * flower constructor.
     * @param $color
     * @param $scent
     * @param $size
     */
    public function __construct($color, $scent, $size)
    {
        $this->color = $color;
        $this->scent = $scent;
        $this->size = $size;
    }

    public function Display()
    {
        echo('цвет цветка-' . $this->color . '<br>' . 'размер цветка-' . $this->size . "<br>" . 'запах- ' . $this->scent . "<br>");
    }

    public function plant_a_prout()
    {
        /**
         * код посадки растения
         */
    }

    public function water()
    {
        /**
         * поливка растения
         */
    }

    public function grow_up()
    {
        /**
         * рост
         */
    }

    public function bloom()
    {
        /**
         * распуститься
         */
    }

    public function doom()
    {
        /**
         * гибель
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
    public function getScent()
    {
        return $this->scent;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

}