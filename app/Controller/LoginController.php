<?php 

namespace MVC\PHP\Controller;

use MVC\PHP\App\View;

class LoginController
{
    function index()
    {
        $model = [
            'title' => 'login',
            'content' => 'login'
        ];

        return View::render('Login/index', $model);
    }

}



?>