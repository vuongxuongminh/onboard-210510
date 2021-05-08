<?php

require __DIR__.'/../../vendor/autoload.php';

use App\LoginService;
use App\LoginException;

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (!isset($email, $password)) {
    header('Location: /login.html', true, 301);

    return;
}

$loginService = new LoginService();

try {
    $loginService->login($email, $password);
    echo 'Login success!';
} catch (LoginException | \PDOException $exception) {
    echo $exception->getMessage();
}