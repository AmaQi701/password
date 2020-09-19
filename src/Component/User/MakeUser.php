<?php


namespace App\Component\User;


use App\Component\User\Dto\MakeUserRequestDto;
use App\Entity\User;

class MakeUser
{
    private UserFactory $userFactory;
    private UserManager $userManager;

    public function __construct(
        UserFactory $userFactory,
        UserManager $userManager
    ){
        $this->userFactory=$userFactory;
        $this->userManager=$userManager;
    }

    public function make(MakeUserRequestDto $dto): User
    {
        $user =$this->userFactory->create(
            $dto->getEmail(),
            $dto->getGivenName(),
            $dto->getFamilyName(),
            $dto->getPassword()
        );

        $this->userManager->save($user, true);

        return $user;
    }
}