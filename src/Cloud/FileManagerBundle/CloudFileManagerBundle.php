<?php

namespace Cloud\FileManagerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CloudFileManagerBundle extends Bundle
{
    public function getParent()
    {
        return 'FMElfinderBundle';
    }
}
