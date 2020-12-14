<?php

namespace App\tests\Unit;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @var User
     */
    private  $user;

    protected function setUp() : void
{
    parent::setUp(); // TODO: Change the autogenerated stub
    $this->user = new User();
}

public function testGetEmail(): void
{
    $value = 'test@test.fr';
    $response = $this->user->setEmail($value);
    self::assertInstanceOf(User::class, $response);
    self::assertEquals($value, $this->user->getEmail());
    self::assertEquals($value, $this->user->getUsername());

    }

    public function testGetPassword(): void
    {
        $value = 'vsdds';
        $response = $this->user->setPassword($value);
        self::assertInstanceOf(User::class, $response);
        self::assertContains($value,$this->user->getPassword());
    }

    public function testGetFirstName(): void
    {
        $value = 'jhon';
        $response = $this->user->setFirstName($value);
        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value,$this->user->getFirstName());
    }

    public function testGetRoles(): void
    {
        $value = ['ROLE_ADMIN'];
        $response = $this->user->setRoles($value);
        self::assertInstanceOf(User::class, $response);
        self::assertContains('ROLE_USER',$this->user->getRoles() );
        self::assertContains('ROLE_ADMIN',$this->user->getRoles() );

    }




}