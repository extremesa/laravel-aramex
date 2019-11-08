<?php


namespace ExtremeSa\Aramex\API\Classes;

/**
 * Contains details of the request errors or success.
 *
 * Class Notification
 * @package ExtremeSa\Aramex\API\Classes
 */
class Notification
{
    private $code;
    private $message;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * To Identify the notification category.
     *
     * @param string $code
     * @return Notification
     */
    public function setCode(string $code): Notification
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Deeper description of the Notification.
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage(string $message): Notification
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param object $notificationsData
     * @return self[]
     */
    public static function parseArray($notificationsData)
    {
        if (!$notificationsData || !object_get($notificationsData, 'Notification'))
            return [];

        if (is_object($notificationsData->Notification)) {
            $notificationsData = [$notificationsData->Notification];
        } else {
            $notificationsData = $notificationsData->Notification;
        }

        return array_map(function ($item) {
            return self::parse($item);
        }, $notificationsData);
    }

    public static function parse($item): Notification
    {
        return (new self())
            ->setCode(object_get($item, 'Code'))
            ->setMessage(object_get($item, 'Message'));
    }
}