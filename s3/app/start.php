<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Aws\S3\S3Client;

$config = require('config.php');

// Instantiate an Amazon S3 client.
// $s3 = S3Client::factory([
//     'key' => $config['s3']['key'],
//     'secret' => $config['s3']['secret']
// ]);
$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'ap-south-1',
    'credentials' => array(
        'key' => 'AKIAIYFBANZFPICFPLBQ',
        'secret'  => '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',
      )
]);

?>