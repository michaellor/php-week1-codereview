<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Addressbook.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('addressbook.html.twig');
    });

    $app->get('/create_contact', function() use ($app) {
        return $app['twig']->render('createcontact.html.twig');
    });

    $app->post('/delete_contacts', function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('deletecontact.html.twig');
    });

    return $app;

?>
