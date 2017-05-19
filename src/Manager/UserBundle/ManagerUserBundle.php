<?php

namespace Manager\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ManagerUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
