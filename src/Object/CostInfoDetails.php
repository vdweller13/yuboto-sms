<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * MCC first digit
 * 0 - Test networks
 * 2 - Europe
 * 3 - North America and the Caribbean
 * 4 - Asia and the Middle East
 * 5 - Oceania
 * 6 - Africa
 * 7 - South and Central America
 * 9 - Worldwide (Satellite, Air - aboard aircraft, Maritime - aboard ships, Antarctica)
 *
 */
class CostInfoDetails
{
    /** @var string The name of the network */
    public $networkName;

    /** @var string The mobile country code (MCC) consists of 3 decimal digits (e.g. `202`) */
    public $mcc;

    /** @var string The mobile network code (MNC) consists of 2 or 3 decimal digits  */
    public $mnc;

    /** @var float The cost of sending a simple SMS or Viber message to one or multiple recipients */
    public $cost;
}