<?php
namespace myapp;

require_once __DIR__ . '/Bootstrap.class.php';

$loader = new \Twig_Loader_Filesystem(Bootstrap::VIEW_DIR);
$twig = new \Twig_Environment($loader, [
    'cache' => Bootstrap::CACHE_DIR
]);

$dataArr = [];
$errArr = [];
$context = [];

// 初期データを設定
$dataArr = [
    'family_name' => '',
    'first_name' => '',
    'family_name_kana' => '',
    'first_name_kana' => '',
    'sex' => '',
    'year' => '',
    'month' => '',
    'day' => '',
    'zip1' => '',
    'zip2' => '',
    'address' => '',
    'email' => '',
    'tel1' => '',
    'tel2' => '',
    'tel3' => '',
    'traffic' => '',
    'contents' => ''
];

// エラーメッセージの定義、初期化
foreach ($dataArr as $key => $value) {
    $errArr[$key] = '';
}

$context['yearArr'] = $yearArr;
$context['monthArr'] = $monthArr;
$context['dayArr'] = $dayArr;
$context['sexArr'] = $sexArr;
$context['trafficArr'] = $trafficArr;

$context['dataArr'] = $dataArr;
$context['errArr']= $errArr;

$template = $twig->loadTemplate('regist.html.twig');
$template->display($context);