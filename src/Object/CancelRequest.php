<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * Through the following method you can cancel a scheduled message, before the scheduled date and
 * time. You are able to cancel the sending of a message up to three minutes before the time it is
 * scheduled to send.
 *
 * POST https://services.yuboto.com/omni/v1/Cancel
 */
class CancelRequest
{
    /** @var string ID of message status */
    public $id;
}