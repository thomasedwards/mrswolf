<?php

require __DIR__ . '/vendor/autoload.php';

$mrswolftime = Symfony\Component\Yaml\Yaml::parseFile('mrswolftime.yaml');

$loader = new Twig_Loader_Filesystem(__DIR__ . '/views');
$twig = new Twig_Environment($loader);
$template = $twig->load('index.html');

if (!is_dir('public')) {
    mkdir('public');
}

file_put_contents(
    'public/index.html',
    $template->render($mrswolftime)
);
