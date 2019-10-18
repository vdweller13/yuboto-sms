<?php


namespace Liagkos\SMS\Yuboto\Object;


use Carbon\Traits\Date;

class DlrPhonenumberChannel
{
    /** @var string The id of message status */
    public $id;

    /** @var string api|web */
    public $system;

    /** @var string sms|viber */
    public $channel;

    /** @var integer Indicates which channel has priority when it comes to omni messaging (default 0) */
    public $priority;

    /** @var string The status that the message has */
    public $status;

    /** @var float The cost of the message */
    public $cost;

    /** @var string The sender of the message */
    public $sender;

    /** @var string The text that the message has */
    public $text;

    /** @var Date The date the message was sent */
    public $submitDate;

    /** @var Date The date the message was delivered */
    public $dlrDate;
}