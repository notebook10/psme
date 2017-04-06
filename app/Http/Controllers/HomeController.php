<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Teepluss\Theme\Contracts\Theme;
use Theme;

class HomeController extends Controller
{
    //
    function veiwHomePage(){
        $theme = Theme::uses('default')->layout('default');
        return $theme->of('homepage')->render();
    }
}
