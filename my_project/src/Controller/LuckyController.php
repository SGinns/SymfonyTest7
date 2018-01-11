<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 09/01/2018
 * Time: 19:19
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Tests\Controller;

class LuckyController extends Controller
{
    public function number()
    {
        return new Response("<html><body>Hello, World</body></html>");
    }
}