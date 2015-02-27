<?php

namespace Caxy\Bundle\XDomainBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Class XFrameOptionHeaderListener.
 */
class XFrameOptionHeaderListener
{
    /**
     * @var string
     */
    private $allowFrom;

    /**
     * @param $allowFrom string
     */
    public function __construct($allowFrom)
    {
        $this->allowFrom = $allowFrom;
    }

    /**
     * @param FilterResponseEvent $event
     */
    public function onKernelResponse(FilterResponseEvent $event)
    {
        if ($event->getRequest()->attributes->get('_route') === 'caxy_xdomain_proxy') {
            $event->getResponse()->headers->add(array('X-Frame-Options' => 'ALLOW-FROM '.$this->allowFrom));
        }
    }
}
