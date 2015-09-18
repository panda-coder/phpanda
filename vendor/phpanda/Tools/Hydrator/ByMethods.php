<?php
/**
 * Created by PhpStorm.
 * User: pandacoder
 * Date: 15/08/15
 * Time: 14:56
 */

namespace PHPanda\Tools\Hydrator;

use PHPanda\Tools\HydratorInterface;
use PHPanda\Tools\Strings;


class ByMethods
    implements HydratorInterface
{
    protected $hydrateds = [];

    public function __construct()
    {

    }

    public function hydrate($values, $obj)
    {
        $strTool = Strings::getInstance();

        foreach($values as $idx => $vl){

            $funcName = 'set' . $strTool->snakeToCamel($idx);

            if ( method_exists($obj, $funcName) ){
                $obj->$funcName($vl);
            }

        }
        $this->hydrateds[] = $obj;
    }
}