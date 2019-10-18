<?php


namespace Liagkos\SMS\Yuboto\Object;


class TwoFa
{
    /** @var integer 4-32 */
    public $pinLength;

    /** @var string ALPHA|ALPHA_ALPHA_LOWER_NUMERIC|ALPHA_NUMERIC|NUMERICWITHOUTZERO|NUMERIC */
    public $pinType;

    /** @var boolean */
    public $isCaseSensitive;

    /** @var integer 60-600 seconds */
    public $expiration;
}