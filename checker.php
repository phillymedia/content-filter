<?php
$w = stream_get_wrappers();
echo 'openssl: ',  extension_loaded  ('openssl') ? 'yes':'no', "\n";
echo 'http wrapper: ', in_array('http', $w) ? 'yes':'no', "\n";
echo 'https wrapper: ', in_array('https', $w) ? 'yes':'no', "\n";
echo 'wrappers: ', var_dump($w);

$random = substr(md5(mt_rand()), 0, 7);
$queryString = $_SERVER['QUERY_STRING'];
$urlPart = substr($queryString, strpos($queryString, 'url=') + 4);
$url = $urlPart.'&_='.$random;

echo 'url', var_dump($url);

phpinfo();