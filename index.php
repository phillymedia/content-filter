<?php

if (isset($_GET['url'])) {
    header('Content-type: application/xml');
    include 'filter.php';
    $url = $_GET['url'];
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
