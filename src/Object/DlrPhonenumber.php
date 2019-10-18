<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * This method retrieves all existing send/delivery reports for previous
 * campaigns based on recipient’s phone number.
 *
 * POST https://services.yuboto.com/omni/v1/DlrPhonenumber
 */
class DlrPhonenumber
{
    /** @var string Recipient’s Phone number in international format */
    public $phonenumber;
}