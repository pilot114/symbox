<?php
 
namespace Symbox;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ContentTypeListener implements EventSubscriberInterface
{
    public function onResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $headers = $response->headers;
     
        if (!$headers->has('Content-Length') && !$headers->has('Transfer-Encoding')) {
            $headers->set('Content-Length', strlen($response->getContent()));
        }
    }

    public static function getSubscribedEvents()
    {
        return ['response' => ['onResponse', -255]];
    }
}