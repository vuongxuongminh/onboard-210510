<?php

require __DIR__ . '/../../vendor/autoload.php';

use App\LoginService;
use App\LoginException;

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if (!isset($username, $password)) {
    header('Location: /login.html');
}

$loginService = new LoginService();

try {
    $loginService->login($username, $password);
    echo 'Login success!';
} catch (LoginException | \PDOException $exception) {
    echo $exception->getMessage();
}