<?php


namespace Liagkos\SMS\Yuboto\Object;


class CostDetailsResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var string sms|viber */
    public $channel;

    /** @var string credits|money */
    public $type;

    /** @var CostInfoDetails[] A list with all the details about the cost info of sending a message */
    public $costInfoDetails;
}