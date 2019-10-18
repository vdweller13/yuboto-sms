<?php


namespace Liagkos\SMS\Yuboto\Object;


class VerifyPinResponse
{
    /** @var integer 0 if successful, 37=Invalid PIN, 38=Expired PIN */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string The id of message status */
    public $id;

    /** @var string PIN enttered */
    public $pin;

    /** @var string Phonenumber */
    public $phonenumber;

    /** @var string The status that the message has */
    public $status;
}