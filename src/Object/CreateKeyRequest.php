<?php


namespace Liagkos\SMS\Yuboto\Object;

/*
 * This method creates an API Key for your subaccounts. Contact with Account Manager, in order to give you
 * more information about how getting an API Key. Thanks to this method, you can provide your subaccounts
 * with an API Key that they can use.
 *
 * POST https://services.yuboto.com/omni/v1/CreateKey
 */
class CreateKeyRequest
{
    /** @var string The username of your subaccount */
    public $username;
}