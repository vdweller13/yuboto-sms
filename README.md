# Consumer for Yuboto SMS API
* Written for PHP >= 7
* Easy to parse results
* Based on OMNI API Documentation v1.2
* Using [Guzzle](https://github.com/guzzle/guzzle) for communication
* Using [Carbon](https://github.com/briannesbitt/Carbon) for date manipulation

## Why did I write this
I wanted to use Guzzle, and I wanted to use IDE autocomplete
capabilities. There is no other reason, API is very simple and easy to
use, even without my library.

## Installation

Install the package using Composer:

```
composer require liagkos/yuboto-sms
```

## Usage
```php
use Liagkos\SMS\Yuboto\Request;

require_once 'vendor/autoload.php';

$token   = 'API-token';
$command = 'Command';
$params  = ['param1' => 'value1', 'param2' => 'value2'];

$response = Request::exec($token, $command, $params);

if ($response['success']) {
    print_r(Response::<ResponseObject>($response['response']));
} else {
    echo 'Error (' . $response['type'] . '): ' . $response['msg'] . ' ('. $response['code'] .')';
}
```

## Details
* **$token** is the API token you received from Yuboto
* **$command** is **case sensitive** and may be one of the following
  * Send - Send SMS/Viber message
  * Dlr - Retrieve message status in real time
  * Cost - Retrieve cost information per country/network
  * CostDetails - Retrieve cost information per network
  * Balance - Check your balance
  * Cancel - Cancel a scheduled message
  * CreateKey - Create sub-user API key
  * verifypin - Verify PIN for TFA messages
  * DlrPhonenumber - Get details for sent messages for specific phonenumber
* **$params** is null or the parameters for the specific command
* **Response** is **case sensitive** and may be one of the following
  * Send - For *Send* commands
  * Dlr - For *Dlr* commands
  * Cost - For *Cost* commands
  * CostDetails - For *CostDetails* commands
  * Balance - For *Balance* commands
  * Cancel - For *Cancel* commands
  * CreateKey - For *CreateKey* commands
  * VerifyPin - For *verifypin* commands 
  * DlrPhonenumber - For *DlrPhonenumber* commands
   
> Check the PDF guide in tech-specs folder for detailed information on commands and parameters. There is no point to repeat the documentation here. 

## Response
* $response['success'] = false - Error
  * $response['type'] = comm|api
  * $respone['msg'] = Error message
  * $response['code'] = Error code
* $response['success'] == true - OK
  * $reponse['response'] = Guzzle Body Object
  
## Other information
* All responses are \Liagkos\SMS\Yuboto\Object\Something objects, thorough defined in *Object* folder, following API definitions
* **submitDate** and **dlrDate** of *Dlr* and *DlrPhonenumber* commands are **Carbon** date objects

## Finally
I'm **NOT** related with Yuboto and *Yuboto* word is their respective trademark. I have no responsibilty of any misuse of the program or any damage or loss you may have, inlcuding financial damage or loss. Use it are your own risk. 
