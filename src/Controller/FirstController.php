<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class FirstController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><title>Lucky Number</title><body>Lucky number: '.$number.'</body></html>'
        );
    }
}