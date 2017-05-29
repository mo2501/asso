<?php

namespace Security\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SecurityUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
