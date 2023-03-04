<?php
// Bucket Name
$bucket="fc-web-add-product";
require_once('S3.php');			
//AWS access info
$awsAccessKey = 'Access Key';
$awsSecretKey = 'Security Key';
//instantiate the class
$s3 = new S3($awsAccessKey, $awsSecretKey);
$s3->putBucket($bucket, S3::ACL_PUBLIC_READ);
?>