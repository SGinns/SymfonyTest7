<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 11/01/2018
 * Time: 20:09
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    function index()
    {
        $text = "Hello, World!";
        return new response($text);
    }
}