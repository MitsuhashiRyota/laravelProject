<?php
declare(strict_types=1);

namespace App\Service;

use App\Extend\SampleAbstract;

class HelloService extends SampleAbstract {

    public $string = "World!!!!!!!!!!!!!";

    public function HelloService(string $string): string {
        echo "String型です。";

        echo $string;

        echo $this->string;

        $this->SampleAbstract();

        return "123";
    }

    public function SampleAbstract() {

        echo "Sampleabstract!!!";
    }
}
