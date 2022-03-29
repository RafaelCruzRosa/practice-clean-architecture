<?php

class Payment
{
    protected string $name;
    protected string $type;

    public function pay()
    {
        if($this->type == 'bill'){
            return 'Paying bill';
        }else{
            return 'Paying card';
        }
    }
}