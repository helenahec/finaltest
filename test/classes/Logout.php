<?php

class Logout

{
    private $session;

    public function __construct(Session $session)

    {
        $this->session = $session;
    }

    public function handleLogout()

    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) 
        
        {
            $this->session->delete('loggedin');

            $this->session->delete('username');
            
            header('Location: /');

            exit;

        }

    }
    
}