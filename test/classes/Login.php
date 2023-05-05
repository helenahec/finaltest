<?php

class Login
{
    private $user;
    private $session;

    public function __construct(User $user, Session $session)
    {
        $this->user = $user;
        $this->session = $session;
    }

    public function handleLoginForm()
    
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) 
        
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->user->findUserByUsername($username);

            if ($user && $this->user->verifyPassword($password, $user['password'])) 
            
            {
                $this->session->set('loggedin', true);
                $this->session->set('username', $user['username']);
                header('Location: /views/admin.php');
                exit;
            } 
            
            else 
            
            {
                $this->session->set('error', 'Wrong Login Data!');
                header('Location: /');
                exit;
            }
        }
    }
}
