<?php declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFactory
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder=$encoder;
    }
    public function create(string $email, string $givenName, string $familyName, string $password): User
    {
        $user= new User();
        $user->setEmail($email);
        $user->setGivenName($givenName);
        $user->setFamilyName($familyName);
        $user->setPassword($this->encoder->encodePassword($user, $password));

        return $user;
    }
}