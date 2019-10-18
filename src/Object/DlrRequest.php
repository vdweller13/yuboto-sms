<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * Using this method, you can retrieve information on sent
 * text messages and check their status in real-time.
 *
 * POST https://services.yuboto.com/omni/v1/Dlr
 */
class DlrRequest
{
    /** @var string ID of message status */
    public $id;
}