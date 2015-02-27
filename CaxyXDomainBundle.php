<?php

namespace Caxy\Bundle\XDomainBundle;

use Caxy\Bundle\XDomainBundle\DependencyInjection\CaxyXDomainExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class CaxyXDomainBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new CaxyXDomainExtension();
    }
}
