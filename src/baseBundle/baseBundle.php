<?php

namespace baseBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class baseBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
