<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AbstractController {
    public function indexAction(): void
{
        parent :: render('index/index');
}
public function LoginAction(): void{
     parent :: render('index/login');
}
}
