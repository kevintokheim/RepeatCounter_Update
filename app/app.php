<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    //Routes
    $app->get("/", function() use ($app) {
        return $app['twig']->render('repeatcounter.html.twig');
    });

    $app->get("/results", function() use ($app) {
        $new_repeat_counter = new RepeatCounter;

        //Repeated error: Undefined offset
        $repeat_counter_results = $new_repeat_counter->countRepeats($_GET['input_word'], $_GET['input_string']);

        return $app['twig']->render('results.html.twig', array('result' => implode(" ", $repeat_counter_results)));
    });

    return $app;

 ?>
