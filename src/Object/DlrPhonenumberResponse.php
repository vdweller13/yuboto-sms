<?php


namespace Liagkos\SMS\Yuboto\Object;


class DlrPhonenumberResponse
{
    /** @var integer 0 if successful, 37=Invalid PIN, 38=Expired PIN */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string Phonenumber */
    public $phonenumber;

    /** @var DlrPhonenumberChannel[] */
    public $dlr;
}