<?php
declare(strict_types=1);
namespace App\Implement;

use App\Entity\TNewsInformation;

use Illuminate\Http\Request;

interface NewsInformationInterface {

    public function getNewsInformation(?string $key);

    public function setNewsInformation(Request $request);
}

?>
