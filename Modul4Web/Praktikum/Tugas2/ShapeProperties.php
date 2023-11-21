<?php

namespace Shapes;

trait ShapeProperties
{
    protected $borderWidth;
    protected $borderColor;

    // Pindahkan properti $name dan $color ke dalam trait
    protected $name;
    protected $color;

    public function setBorder($width, $color)
    {
        $this->borderWidth = $width;
        $this->borderColor = $color;
    }

    public function getBorderColor()
    {
        return $this->borderColor;
    }
}
