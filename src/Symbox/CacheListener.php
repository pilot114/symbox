<?php
 
namespace Symbox;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CacheListener implements EventSubscriberInterface
{
    public function onResponse(ResponseEvent $event)
    {
        $request = $event->getRequest();
        $response = $event->getResponse();
        if ($response->isNotModified($request)) {
            return $response;
        }
        $date = date_create_from_format('Y-m-d H:i:s', '2005-10-15 10:00:00');
        $response->setCache(array(
            'public'        => true,
            'etag'          => 'abcde',
            'last_modified' => $date,
            'max_age'       => 10,
            's_maxage'      => 10,
        ));
    }

    public static function getSubscribedEvents()
    {
        return ['response' => ['onResponse', 0]];
    }
}