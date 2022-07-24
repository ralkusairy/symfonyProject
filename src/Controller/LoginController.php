<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LoginController
{
    public function login(): Response
    {
        $text = 'Hi am from login page';

        return new Response(
            '<html><body>Lucky number: '.$text.'</body></html>'
        );
    }
}