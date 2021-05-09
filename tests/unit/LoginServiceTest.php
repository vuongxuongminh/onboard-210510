<?php

namespace App\Tests\Unit;

use App\LoginException;
use App\LoginService;
use PHPUnit\Framework\TestCase;

class LoginServiceTest extends TestCase
{
    private LoginService $service;

    public function setUp(): void
    {
        $this->service = new LoginService();
    }

    public function testLoginSuccessful()
    {
        $this->expectNotToPerformAssertions();
        $this->service->login('1@onboard.demo', 'Qwerty@123');
    }

    public function testLoginWithWrongEmail()
    {
        $this->expectException(LoginException::class);
        $this->expectExceptionMessage('Email not exist!');
        $this->service->login('wrong_email@onboard.demo', 'Qwerty@123');
    }

    public function testLoginWithWrongPassword()
    {
        $this->expectException(LoginException::class);
        $this->expectExceptionMessage('Password is not correct!');
        $this->service->login('1@onboard.demo', 'Qwerty@1233');
    }
}