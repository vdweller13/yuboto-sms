<?php


namespace Liagkos\SMS\Yuboto\Object;


class BalanceResponse
{
    /** @var integer 0 if successful */
    public $ErrorCode;

    /** @var string Null if successful */
    public $ErrorMessage;

    /** @var float Your current balance in credits */
    public $balance;

    /** @var float To what limit your account can send messaging (default=0) */
    public $balanceLimit;

    /** @var string credits|money */
    public $type;
}