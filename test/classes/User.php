<?php

class User

{
    private $pdo;

    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
    }

    public function findUserByUsername(string $username): ?array

    {
        $stmt = $this->pdo->prepare("SELECT * FROM test.users WHERE username = :username");

        $stmt->bindParam(':username', $username);
        
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $user ?: null;
    }
    
    public function verifyPassword($password, $hash)

    {
        return password_verify($password, $hash);
    }


}
