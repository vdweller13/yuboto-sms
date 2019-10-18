<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * This method allows you to send text messages to one or multiple recipients
 * simultaneously. The maximum number of recipients you can send at one time is 1000.
 *
 * POST https://services.yuboto.com/omni/v1/Send
 */
class SendRequest
{
    /** @var string|array Phone number with no ++ or 00 */
    public $phonenumbers;

    /** @var integer YYYYMMDD (default=instantly) */
    public $dateinToSend;

    /** @var integer HHMM (default=instantly) */
    public $timeinToSend;

    /** @var boolean Delivery report to customer's application (default=false) */
    public $dlr;

    /** @var string URL called when message in final state */
    public $callbackUrl;

    /** @var string Included in call of callback_url */
    public $option1;

    /** @var string Included in call of callback_url */
    public $option2;

    /** @var SMS */
    public $sms;

    /** @var Viber */
    public $viber;
}