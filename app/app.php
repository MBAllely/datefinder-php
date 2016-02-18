<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/DayFinder.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/result", function() use ($app) {
        $my_DateFinder = new DayFinder;
        $result = $my_DateFinder->returnDay($_GET['day'] , $_GET['month'] , $_GET['year']);

        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'type' => 'info',
                'text' => 'That day was a ' . $result
            )
        ));
    });

    return $app;
?>
