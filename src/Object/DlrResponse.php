<?php


namespace Liagkos\SMS\Yuboto\Object;


class DlrResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string The id of message status */
    public $id;

    /** @var string Recipient */
    public $phonenumber;

    /** @var string Included in call of callback_url */
    public $option1;

    /** @var string Included in call of callback_url */
    public $option2;

    /** @var DlrChannel[] A list with dlr channels and their details */
    public $dlr;
}