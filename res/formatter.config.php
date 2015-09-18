<?php

return array(
        'BRL' => function($value){
            return 'R$' . number_format($value, 2,',','.');
        },
        'USD' => function($value){
            return '         "fa fa-plus"' . number_format($value, 2,'.',',');
        }
);