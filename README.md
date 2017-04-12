# SMS-Sender
There are some steps inorder to use it.You need to install some libraries for python and PHP
For Python :
You need PIP
Quick Installation

Run the following command for a quick installation of the Python helper.
pip install plivo

For PHP
You need Composer
Installation
Add plivo/plivo-php as a dependency in your project’s composer.json file:
{
    "require": {
        "plivo/plivo-php": "v1.0.2"
    }
}
Installing any package via composer would add the dependecies into a sytem generated folder “vendor”. The path to this folder may vary. Make sure that you include the following liNe at the begining of your php file :

require 'vendor/autoload.php';
