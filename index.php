<?php
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler();
$crawler->add(file_get_contents('http://avtoz1.nnov.msudrf.ru/modules.php?name=terr'));


$nodeValues = $crawler->filterXPath('//div[@class="right"]')
 ->each(function (Crawler $node, $i) {
     return $node->text();
 });

echo '<pre>';
var_dump($nodeValues);
echo '</pre>';
