<?php

namespace ExtremeSa\Aramex\API\Response;

use ExtremeSa\Aramex\API\Classes\Notification;
use ExtremeSa\Aramex\API\Classes\Transaction;

abstract class Response
{
    private $transaction;
    private $notifications;
    private $hasErrors;

    /**
     * @return Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * @param Transaction $transaction
     * @return $this
     */
    public function setTransaction(Transaction $transaction)
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * @param Notification[] $notifications
     * @return $this
     */
    public function setNotifications(array $notifications)
    {
        $this->notifications = $notifications;
        return $this;
    }

    /**
     * @param Notification[] $notifications
     * @return $this
     */
    public function addNotifications(array $notifications)
    {
        $this->notifications = array_merge(($this->notifications ?? []), $notifications);
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasErrors()
    {
        return $this->hasErrors;
    }

    /**
     * @param bool $hasErrors
     * @return $this
     */
    public function setHasErrors(bool $hasErrors)
    {
        $this->hasErrors = $hasErrors;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return !$this->hasErrors;
    }

    public function getNotificationMessages()
    {
        return collect($this->getNotifications())->keyBy(function (Notification $notification) {
            return $notification->getCode();
        })->map(function (Notification $notification) {
            return $notification->getMessage();
        })->toArray();
    }

    public function getMessages()
    {
        return array_map(function (Notification $notification) {
            return $notification->getMessage();
        }, $this->getNotifications());
    }

    /**
     * @return bool
     */
    public function isFail()
    {
        return $this->hasErrors;
    }

    protected function parse($obj)
    {
        $this->setHasErrors($obj->HasErrors)
            ->setTransaction(Transaction::parse($obj->Transaction))
            ->setNotifications(Notification::parseArray($obj->Notifications));

        return $this;
    }

    public static abstract function make($obj);
}