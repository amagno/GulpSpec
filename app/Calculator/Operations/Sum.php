<?php

namespace Calculator\Operations;

class Sum
{
    public function execute($n = [])
    {
        $result = null;
        if(sizeof($n) > 1){
            foreach($n as $key => $value){
                $result = $result + $value;
            }
        }else{
            $result = $n[0];
        }
        return $result;
    }

}
