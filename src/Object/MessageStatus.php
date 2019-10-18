<?php


namespace Liagkos\SMS\Yuboto\Object;


class MessageStatus
{
    /** @var string ID of message status */
    public $id;

    /** @var string SMS|Viber */
    public $channel;

    /** @var string Recipient */
    public $phonenumber;

    /** @var string Status */
    public $status;
}