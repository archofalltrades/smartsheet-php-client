# smartsheet-php-client
PHP Client Library to communicate with the Smartsheet API

I am very new to github and a self-taught PHP programmer, so I will admit my code may be somewhat clunky.  I am always looking to learn and happy for any assistance along the way.  

Smartsheet is extremely powerful and versatile but there is always room for customization / improvement.  The Smartsheet API does not offer a PHP SDK but does provide cURL examples.  Since PHP is all I know, I thought I would start building out a client library.

This makes use of the Requests for PHP.  A humble HTTP request library. It simplifies how you interact with other sites and takes away all your worries. https://requests.ryanmccue.info/  I found this to be the simplest way to make cURL requests.

I also started working on this in Wordpress as it gave me a solid PHP foundation.  

// Create a new object
$obj = new Smartsheet;
$dataID = $obj->getSheet($sheetID);

