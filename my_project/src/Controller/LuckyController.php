<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 09/01/2018
 * Time: 19:19
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/lucky/number")
 */

class LuckyController extends Controller
{
    public function loopTest()
    {
        $num = rand(0, 50);
        if($num < 25 )
        {
            return new Response("The number is lower than 25.\nRefresh the page for a new random number!");
        }
        else if($num > 25)
        {
            return new Response("The number is greater than 25.\nRefresh the page for a new random number!");
        }
        else
        {
            return new Response("The number is 25!\nRefresh the page for a new random number!");
        }
    }
}
