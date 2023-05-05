<?php

require_once 'classes/Database.php';

require_once 'classes/User.php';

require_once 'classes/Login.php';

require_once 'classes/Session.php';


$session = new Session();

$config = require_once 'config.php';

$db = new Database($config['database']);

$user = new User($db->getPdo());

$login = new Login($user, $session);


$login->handleLoginForm(); 


if ($session->get('loggedin')) 

{
    header('Location: /views/admin.php');
    
    exit;
}


include ("views/login_form.php");