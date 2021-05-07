<?php

namespace App;

final class LoginService
{
    private UserConnection $connection;

    public function __construct(UserConnection $connection = null)
    {
        $this->connection ??= new UserConnection();
    }

    public function login(string $username, string $password): void
    {
        if (!$record = $this->connection->findRecordByUsername($username)) {
            throw new LoginException('Username not exist!');
        }

        if ($record['password'] !== $password) {
            throw new LoginException('Password is not correct!');
        }
    }
}