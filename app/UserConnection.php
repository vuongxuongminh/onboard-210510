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

    public function findRecordByEmail(string $email): ?array
    {
        $stm = $this->prepare('SELECT * FROM user WHERE email=:email');
        $stm->execute(
            [
                ':email' => $email
            ]
        );

        return $stm->fetchAll(self::FETCH_ASSOC)[0] ?? null;
    }
}