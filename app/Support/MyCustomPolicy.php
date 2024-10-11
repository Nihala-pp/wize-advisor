<?php

namespace App\Support;
 
use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;
 
class MyCustomPolicy extends Basic
{
    public function configure()
    {
        parent::configure();
 
        $this->addDirective(Directive::SCRIPT, 'https://wiseadvizor.com/');
        $this->addDirective(Directive::SCRIPT, 'self');
        $this->addDirective(Directive::STYLE, 'self');
        $this->addNonceForDirective(Directive::SCRIPT);
        $this->addNonceForDirective(Directive::STYLE);
    }
}