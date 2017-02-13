<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/clock.php";

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('homeView.html.twig');
    });

    $app->post("/new", function() use ($app) {
        $completely_New_Variable = new Clock();
        $another_Variable = $completely_New_Variable->ClockAngle($_POST["userClock"]);
        return $app["twig"]->render("clock.html.twig", array("result"=>$another_Variable));
    });

    return $app;
?>
