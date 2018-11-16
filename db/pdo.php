<?php

$pdo = new PDO('mysql:host=localhost;dbname=28967964_jasimalgosia;encoding=utf8', '28967964_jasimalgosia', 'Herkules2018');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pdo->query('SET NAMES utf8');



//class Lampka
//{
//	public $moc = 10;
//
//	const TEST = 1;
//
//	public function __construct($moc)
//	{
//		echo 'moc: ' . $moc;
//	}
//
//	public function zaswiec()
//	{
//		echo 'SWIECE';
//	}
//
//	public function zgas()
//	{
//		echo 'GASZE';
//	}
//}
//
//$lampa = new Lampka(100);
//$lampa->zaswiec();
//$lampa->zgas();
//echo $lampa->moc;