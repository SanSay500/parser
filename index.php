<?php
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler('http://avtoz1.nnov.msudrf.ru/modules.php?name=terr');

$nodeValues = $crawler->filterXPath('//div[@class="left"]')->text();
// ->each(function (Crawler $node, $i) {
//     return $node->text();
// });

var_dump($nodeValues);
