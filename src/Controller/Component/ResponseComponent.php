<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class ResponseComponent extends Component
{
    public function makeRandStr($length){
        $str = array_merge(range('a','z'), range('0','9'), range('A','Z'));
        $r_str = null;
        for($i = 0; $i < $length; $i++){
            $r_str .= $str[rand(0, count($str) - 1)];
        }
        return $r_str;
    }

    public function getUniqueArray($array, $column)
    {
        $tmp = [];
        $uniqueArray = [];
        foreach($array as $value){
            if(!in_array($value[$column],$tmp)){
                $tmp[] = $value[$column];
                $uniqueArray[] = $value;
            }
        }
        return $uniqueArray;
    }
}