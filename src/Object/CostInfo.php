<?php


namespace Liagkos\SMS\Yuboto\Object;


class CostInfo
{
    /** @var string The name of the network */
    public $networkName;

    /** @var float The cost of sending a simple SMS or Viber message to one or multiple recipients */
    public $cost;
}