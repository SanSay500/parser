<?php
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$crawler = new Crawler('https://ya.ru');

$crawler = $crawler->filter('body > p')->text();	

echo $crawler;

