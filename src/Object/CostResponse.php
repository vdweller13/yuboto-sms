<?php


namespace Liagkos\SMS\Yuboto\Object;


class CostResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string sms|viber */
    public $channel;

    /** @var string credits|money */
    public $type;

    /** @var CostInfo[] A list with all the details about the cost of sending a simple SMS or Viber message */
    public $costInfo;
}