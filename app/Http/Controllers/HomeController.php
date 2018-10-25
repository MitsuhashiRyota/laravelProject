<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service\NewsInformationService;

use App\Constents\CommonConst;

class HomeController extends Controller
{
    public $title;

    public $key = "NUll";

    // Start Function
    public function index(Request $request) {

       // Page Titles
       $this->title = CommonConst::HOME_TITLE;

       // Get Page Create Parameters
       $INewsInformation = new NewsInformationService();
       $INewsInformation->getNewsInformation($this->key);

       // Return
       return view('home.home', ['title' => $this->title, 'INewsInformation' => $INewsInformation]);
    }
}
