<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Addressbook.php";

    session_start();
    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array('twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('addressbook.html.twig', array('contacts' => Contact::getAll()));
    });

    $app->post('/createcontact', function() use ($app) {
        $contact = new Contact($_POST['name'], $_POST['phone_number'], $_POST['address']);
        $contact->save();
        return $app['twig']->render('createcontact.html.twig', array('newcontact' => $contact));
    });

    $app->post('/deletecontacts', function() use ($app) {
        Contact::deleteAll();
        return $app['twig']->render('deletecontact.html.twig');
    });

    return $app;

?>
