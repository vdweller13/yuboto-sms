<?php


namespace Liagkos\SMS\Yuboto\Object;


class SendResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var MessageStatus[] */
    public $Message;
}