<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * This method validates the pin for specific sms id for two factor authentication messages.
 *
 * POST https://services.yuboto.com/omni/v1/verifypin
 */
class VerifyRequest
{
    /** @var string Sms id system returned upon submission */
    public $id;

    /** @var string User enterd pin for validation */
    public $pin;
}