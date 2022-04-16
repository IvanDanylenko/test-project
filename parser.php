<?php

include 'vendor/autoload.php';

use GuzzleHttp\Client;
use PHPHtmlParser\Dom;

$client = new Client([
    'base_uri' => 'https://ithillel.ua/ua',
]);

$result = $client->get('/');

$dom = new Dom();
$dom->loadStr($result->getBody()->getContents());

$courses = $dom->find('.block-course-cats_item');

foreach ($courses as $course) {
    try {
        echo $course->find('.course-cat-bar_label')->innerHtml . PHP_EOL;
        echo $course->find('.course-cat-bar_descr')->innerHtml . PHP_EOL;
    } catch (Exception $exception) {
        // One of the blocks is empty, inner html can't be accessed.
        // Silenced error for now
    }
}
