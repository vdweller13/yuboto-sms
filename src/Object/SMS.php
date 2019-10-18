<?php


namespace Liagkos\SMS\Yuboto\Object;


class SMS
{
    /** @var string Required 1-20 Numeric, 1-11 Alphanumeric */
    public $sender;

    /** @var string Required If Twofa {pin_code} placeholder mandatory */
    public $text;

    /** @var integer 30-4320 (default) in seconds*/
    public $validity;

    /** @var string 1=sms (default), 2=flash, 3=unicode */
    public $typesms;

    /** @var boolean false (default), true > 160 characters */
    public $longsms;

    /** @var integer Priority channel in omni messaging (default 0) */
    public $priority;

    /** @var TwoFa */
    public $TwoFa;
}