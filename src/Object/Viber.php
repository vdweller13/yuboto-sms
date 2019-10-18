<?php


namespace Liagkos\SMS\Yuboto\Object;


class Viber
{
    /** @var string Required 1-20 Alphanumeric */
    public $sender;

    /** @var string Required 1000 characters max
     * if Twofa {pin_code} placeholder mandatory
     * alone|button|button+image
     *
    /*
    public $text;

    /** @var integer 15-86400 (default) in seconds*/
    public $validity;

    /** @var string Required iOS only */
    public $expiryText;

    /** @var string Button text max 30 characters (text|text+image) */
    public $buttonCaption;

    /** @var string Button link (text|text+image) */
    public $buttonAction;

    /** @var string Image URL (alone|text+button) */
    public $image;

    /** @var integer Priority channel in omni messaging (default 0) */
    public $priority;

    /** @var TwoFa */
    public $TwoFa;
}