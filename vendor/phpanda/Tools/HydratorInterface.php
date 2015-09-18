<?php
/**
 * Created by PhpStorm.
 * User: pandacoder
 * Date: 15/08/15
 * Time: 14:58
 */

namespace PHPanda\Tools;


interface HydratorInterface
{
    public function hydrate($values, $obj);
}