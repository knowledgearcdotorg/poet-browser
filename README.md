# Po.et Browser
A simple Po.et browser for displaying works via the Frost API.

## Prerequisites

You should be able to run the index.html by simply browsing to it via your web browser. However, because CORS is configured to deny remote domains, you will need a web server such as Apache2 or Nginx and deploy the Po.et Browser files to your web root (or subdirectory within your web root).

You will also need PHP 5.6+ or 7.0+ installed.

## Installation

Download the Po.et Browser package zip or check out the code from Github (https://github.com/knowledgearcdotorg/poet-browser).

Next, extract the downloaded zip file to your web server's web root directory, or create a sub directory such as poet-browser, and extract there.

Browse to the index.html page using your web browser. For example, If you have unzipped the Po.et Browser files to /var/www/html/poet-browser then you would browse to http://localhost/poet-browser/index.html.

## Usage

To view your works, enter your Frost token. Frost tokens can be created and managed by registering at https://frost.po.et.

Caveat: currently https://api.frost.po.et does not allow connections from web browsers due to strict CORS configuration so you will need to use the request.php file provided. For example, if the Po.et Browser has been deployed to /var/www/html/poet-browser, you would specify the url http://localhost/poet-browser/request.php.

## More Information

For more information about Po.et, check out https://po.et.