<?php
/**
 * Created by PhpStorm.
 * User: pandacoder
 * Date: 15/08/15
 * Time: 14:05
 */

namespace PHPanda\Tools;


class Divisor
{
    protected $divisor;

    public function divide($elements, $type)
    {
        $aux = [];
        $steps = count($elements) / $this->divisor;
        for($i=0; $i<=$steps; $i++){
            $temp = new $type();
            $temp->push( array_slice($elements, $i*$steps, $this->divisor) ) ;
            $aux[] = $type;
        }

        return $aux;
    }
}