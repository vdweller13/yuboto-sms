<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * Using this method, you can retrieve the cost details of sending a simple SMS or
 * Viber message for a specific iso2. The difference from Cost Method is that this
 * method returns for a specific iso2, the mcc and mnc.
 *
 * POST https://services.yuboto.com/omni/v1/CostDetails
 */
class CostDetails
{
    /** @var string 2 letter ISO_3166-1_alpha-2 code of the country (req if not phonenumber) */
    public $iso2;
}