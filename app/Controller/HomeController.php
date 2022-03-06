<?php 

namespace MVC\PHP\Controller;

use MVC\PHP\App\View;

class HomeController
{
    function index()
    {
        $model = [
            'title' => 'php mvc',
            'content' => 'learning php mvc'
        ];

        return View::render('Home/index', $model);
    }

}



?>