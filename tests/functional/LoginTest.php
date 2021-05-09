<?php

namespace App\Tests\Functional;

use PHPUnit\Framework\TestCase;

final class LoginTest extends TestCase
{
    public function testLoginWithoutFields(): void
    {
        require __DIR__.'/../../html/entrypoint/login.php';

        $this->assertSame(301, http_response_code());
    }

    public function testLoginSuccessful(): void
    {
        ob_start();
        $_POST['email'] = '1@onboard.demo';
        $_POST['password'] = 'Qwerty@123';
        require __DIR__.'/../../html/entrypoint/login.php';
        $this->assertSame('Login success!', ob_get_clean());
    }

    public function testLoginWithEmailNotExist(): void
    {
        ob_start();
        $_POST['email'] = 'not_exist@onboard.demo';
        $_POST['password'] = 'Qwerty@123';
        require __DIR__.'/../../html/entrypoint/login.php';
        $this->assertSame('Email not exist!', ob_get_clean());
    }

    public function testLoginWithIncorrectPassword(): void
    {
        ob_start();
        $_POST['email'] = '1@onboard.demo';
        $_POST['password'] = 'Qwerty@1233';
        require __DIR__.'/../../html/entrypoint/login.php';
        $this->assertSame('Password is not correct!', ob_get_clean());
    }
}