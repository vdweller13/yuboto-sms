<?php


namespace Liagkos\SMS\Yuboto\Object;


class CreateKeyResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string The user’s username */
    public $username;

    /** @var string The unique API Key of the user */
    public $apiKey;

    /** @var string sms|viber|omni */
    public $channel;
}