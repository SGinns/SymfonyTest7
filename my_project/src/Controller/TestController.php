<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 12/01/2018
 * Time: 17:53
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function testFunc()
    {
        $tabTitle = "Test Page";
        $name = "Steven";
        $age = 17;

        return $this->render("test.html.twig", array(
            "name" => $name,
            "age" => $age,
            "title" => $tabTitle,

            "users" => array(
                array("name" => "Max", "age" => 14),
                array("name" => "James", "age" => 22),
                array("name" => "Billy", "age" => 34),
            )
        ));
    }
}
