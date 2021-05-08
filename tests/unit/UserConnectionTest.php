<?php

namespace App\Tests\Unit;

use App\UserConnection;
use PHPUnit\Framework\TestCase;

final class UserConnectionTest extends TestCase
{
    private UserConnection $connection;

    public function setUp(): void
    {
        $this->connection = new UserConnection();
    }

    public function testFindByEmailNotExist(): void
    {
        $result = $this->connection->findRecordByEmail('not_exist@onboard.demo');
        $this->assertNull($result);
    }

    public function testFindByEmailExist(): void
    {
        $result = $this->connection->findRecordByEmail('1@onboard.demo');
        $this->assertIsArray($result);
    }
}