<?php

if (isset($_GET['url'])) {
    header('Content-type: application/xml');
    include 'filter.php';
    $random = substr(md5(mt_rand()), 0, 7);
    $queryString = $_SERVER['QUERY_STRING'];
    $urlPart = substr($queryString, strpos($queryString, 'url=') + 4);
    $url = $urlPart.'&_='.$random;
    $filter_option = $_GET['type'];

    $webpage = file_get_contents($url);

    if (!isset($filter[$filter_option])) {
        $filter[$filter_option] = 'default';
    }

    foreach ($filter[$filter_option] as $regex) {
        $pattern = $regex['pattern'];
        $replacement = $regex['replacement'];

        $webpage = preg_replace($pattern, $replacement, $webpage);
    }

    echo $webpage;
} else {
    echo 'Please fill out the url parameter on the URL';
}
