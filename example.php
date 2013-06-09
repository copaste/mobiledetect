<?php
include ("mobile.class.php");

// Set different URLs for different devices

$devices = array
(
  'ipad' => 'http://apple.com',
	'iphone' => 'http://apple.com/iphone',
	'symbian' => 'http://m.nokia.com'
)

$mobile = new mobile("http://m.site.com", $devices);

//or use samle way
//all mobile devices redirected to one URL
// $mobile = new mobile("http://m.site.com")
