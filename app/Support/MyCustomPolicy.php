<?php

namespace App\Support;
 
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;
 
class MyCustomPolicy extends Basic
{
    public function configure()
    {
        parent::configure();
 
        $this->addDirective(Directive::SCRIPT, 'www.google.com');
    }
}