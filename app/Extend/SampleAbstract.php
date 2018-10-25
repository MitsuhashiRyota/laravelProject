<?php

namespace App\Extend;

abstract class SampleAbstract {

    abstract public function SampleAbstract();

    public function GoHello(String $string) {
        echo $string;
        echo "SampleAbstractを起動したよ！";
    }
}

?>
