<?php

namespace App;

final class LoginService
{
    private UserConnection $connection;

    public function __construct(UserConnection $connection = null)
    {
        $this->connection ??= new UserConnection();
    }

    public function login(string $email, string $password): void
    {
        if (!$record = $this->connection->findRecordByEmail($email)) {
            throw new LoginException('Email not exist!!');
        }

        if ($record['password'] !== $password) {
            throw new LoginException('Password is not correct!');
        }
    }
}