<?php


namespace Liagkos\SMS\Yuboto;


use Carbon\Carbon;
use Liagkos\SMS\Yuboto\Object\BalanceResponse;
use Liagkos\SMS\Yuboto\Object\CancelResponse;
use Liagkos\SMS\Yuboto\Object\CostDetailsResponse;
use Liagkos\SMS\Yuboto\Object\CostInfo;
use Liagkos\SMS\Yuboto\Object\CostInfoDetails;
use Liagkos\SMS\Yuboto\Object\CostResponse;
use Liagkos\SMS\Yuboto\Object\CreateKeyResponse;
use Liagkos\SMS\Yuboto\Object\DlrChannel;
use Liagkos\SMS\Yuboto\Object\DlrPhonenumberChannel;
use Liagkos\SMS\Yuboto\Object\DlrPhonenumberResponse;
use Liagkos\SMS\Yuboto\Object\DlrResponse;
use Liagkos\SMS\Yuboto\Object\MessageStatus;
use Liagkos\SMS\Yuboto\Object\SendResponse;
use Liagkos\SMS\Yuboto\Object\VerifyPinResponse;

class Response
{
    public static function Send($response) : SendResponse
    {
        $parsed = new SendResponse();

        foreach ($response as $key => $value) {
            if ($key !== 'Message') {
                $parsed->{$key} = $value;
            }
            else {
                /** @var MessageStatus[] $status */
                $status = [];
                /** @var SendResponse $response */
                foreach ($response->Message as $message) {
                    $data = new MessageStatus();
                    foreach ($message as $msgKey => $msgValue) {
                        $data->{$msgKey} = $msgValue;
                    }
                    $status[] = $data;
                }
                $parsed->{$key} = $status;
            }
        }

        return $parsed;
    }

    public static function Dlr($response) : DlrResponse
    {
        $parsed = new DlrResponse();

        foreach ($response as $key => $value) {
            if ($key !== 'dlr') {
                $parsed->{$key} = $value;
            } else {
                /** @var DlrChannel[] $channels */
                $channels = [];
                /** @var DlrResponse $response*/
                foreach ($response->dlr as $channel) {
                    $data = new DlrChannel();
                    foreach ($channel as $dlrKey => $dlrValue) {
                        if ($dlrKey !== 'submitDate' && $dlrKey !== 'dlrDate') {
                            $data->{$dlrKey} = $dlrValue;
                        } else {
                            $data->{$dlrKey} = Carbon::parse($dlrValue);
                        }
                    }
                    $channels[] = $data;
                }
                $parsed->{$key} = $channels;
            }
        }

        return $parsed;
    }

    public static function Cost($response) : CostResponse
    {
        $parsed = new CostResponse();

        foreach ($response as $key => $value) {
            if ($key !== 'costInfo') {
                $parsed->{$key} = $value;
            }
            else {
                /** @var CostInfo[] $cost */
                $cost = [];
                /** @var CostResponse $response */
                foreach ($response->{$key} as $info) {
                    $data = new CostInfo();
                    foreach ($info as $infoKey => $infoValue) {
                        $data->{$infoKey} = $infoValue;
                    }
                    $cost[] = $data;
                }
                $parsed->{$key} = $cost;
            }
        }

        return $parsed;
    }

    public static function CostDetails($response) : CostDetailsResponse
    {
        $parsed = new CostDetailsResponse();

        foreach ($response as $key => $value) {
            if ($key !== 'costInfoDetails') {
                $parsed->{$key} = $value;
            }
            else {
                /** @var CostInfoDetails[] $cost */
                $cost = [];
                /** @var CostDetailsResponse $response */
                foreach ($response->{$key} as $info) {
                    $data = new CostInfoDetails();
                    foreach ($info as $infoKey => $infoValue) {
                        $data->{$infoKey} = $infoValue;
                    }
                    $cost[] = $data;
                }
                $parsed->{$key} = $cost;
            }
        }

        return $parsed;
    }

    public static function Balance($response) : BalanceResponse
    {
        $parsed = new BalanceResponse();

        foreach ($response as $key => $value) {
            $parsed->{$key} = $value;
        }

        return $parsed;
    }

    public static function Cancel($response) : CancelResponse
    {
        $parsed = new CancelResponse();

        foreach ($response as $key => $value) {
            $parsed->{$key} = $value;
        }

        return $parsed;
    }

    public static function CreateKey($response) : CreateKeyResponse
    {
        $parsed = new CreateKeyResponse();

        foreach ($response as $key => $value) {
            $parsed->{$key} = $value;
        }

        return $parsed;
    }

    public static function VerifyPin($response) : VerifyPinResponse
    {
        $parsed = new VerifyPinResponse();

        foreach ($response as $key => $value) {
            $parsed->{$key} = $value;
        }

        return $parsed;
    }

    public static function DlrPhonenumber($response) : DlrPhonenumberResponse
    {
        $parsed = new DlrPhonenumberResponse();

        foreach ($response as $key => $value) {
            if ($key !== 'dlr') {
                $parsed->{$key} = $value;
            }
            else {
                /** @var DlrPhonenumberChannel[] $dlr */
                $dlr = [];
                /** @var DlrPhonenumberChannel $response */
                foreach ($response->{$key} as $info) {
                    $data = new DlrPhonenumberChannel();
                    foreach ($info as $infoKey => $infoValue) {
                        $data->{$infoKey} = $infoValue;
                        if ($infoKey !== 'submitDate' && $infoKey !== 'dlrDate') {
                            $data->{$infoKey} = $infoValue;
                        } else {
                            $data->{$infoKey} = Carbon::parse($infoValue);
                        }
                    }
                    $dlr[] = $data;
                }
                $parsed->{$key} = $dlr;
            }
        }

        return $parsed;
    }
}