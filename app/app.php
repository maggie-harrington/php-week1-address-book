<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app ['debug'] = true;

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get("/create_contact", function() use ($app) {
        return $app['twig']->render('create_contact.html.twig');
    });

    $app->get("/delete_contacts", function() use ($app) {
        return $app['twig']->render('delete_contacts.html.twig');
    });

    return $app;
?>
