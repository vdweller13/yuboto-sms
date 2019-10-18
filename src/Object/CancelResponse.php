<?php


namespace Liagkos\SMS\Yuboto\Object;


class CancelResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string sms|viber */
    public $channel;

    /** @var string The id of message status */
    public $id;

    /** @var string The status that the message has */
    public $status;
}