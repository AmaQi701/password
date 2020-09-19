<?php declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;

class UserFactory
{
    public function create(string $email, string $givenName, string $familyName, string $password): User
    {
        $user= new User();
        $user->setEmail($email);
        $user->setGivenName($givenName);
        $user->setFamilyName($familyName);
        $user->setPassword($password);

        return $user;
    }
}