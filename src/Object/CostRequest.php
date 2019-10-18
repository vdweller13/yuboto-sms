<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * Through the following method you can request the cost of sending a simple SMS or Viber
 *
 * POST https://services.yuboto.com/omni/v1/Cost
 */
class CostRequest
{
    /** @var string 2 letter ISO_3166-1_alpha-2 code of the country (req if not phonenumber) */
    public $iso2;

    /** @var string Refers to the phone number of the recipient of the text message (req if not iso2) */
    public $phonenumber;

    /** @var string sms|viber (req if used with API key) */
    public $channel;
}