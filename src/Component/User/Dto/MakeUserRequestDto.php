<?php declare(strict_types=1);


namespace App\Component\User\Dto;


class MakeUserRequestDto
{
    private string $email;
    private string $givenName;
    private string $familyName;
    private string $password;

    public function __construct(string $email, string $givenName, string $familyName, string $password)
    {
        $this->email=$email;
        $this->givenName=$givenName;
        $this->familyName=$familyName;
        $this->password=$password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getGivenName(): string
    {
        return $this->givenName;
    }


    public function getFamilyName(): string
    {
        return $this->familyName;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}