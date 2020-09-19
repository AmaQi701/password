<?php declare(strict_types=1);


namespace App\Controller;


use App\Component\User\Dto\MakeUserRequestDto;
use App\Component\User\MakeUser;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class MakeUserController
{
    public function __invoke(
        MakeUser $makeUser,
        SerializerInterface $serializer,
        Request $request
    ): Response
    {
        /** @var MakeUserRequestDto $dto  */

        $dto =$serializer->deserialize($request->getContent(), MakeUserRequestDto::class, 'json');

        $user = $makeUser->make($dto);
        $json=$serializer->serialize($user, 'jsonld');

        return new Response($json);
    }
}