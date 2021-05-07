<?php

namespace App;


final class UserConnection extends \PDO
{
    public function __construct()
    {
        parent::__construct(
            $_ENV['APP_MYSQL_DSN'],
            $_ENV['APP_MYSQL_USERNAME'],
            $_ENV['APP_MYSQL_PASSWORD']
        );
        $this->setAttribute(self::ERRMODE_EXCEPTION, true);
    }

    public function findRecordByUsername(string $username): ?array
    {
        $stm = $this->prepare('SELECT * FROM user WHERE username=:username');
        $stm->execute(
            [
                ':username' => $username
            ]
        );


        return $stm->fetchAll(self::FETCH_ASSOC)[0] ?? null;
    }
}