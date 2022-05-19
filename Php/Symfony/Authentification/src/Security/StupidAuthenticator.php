<?php

namespace App\Security;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\PassportInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;

class StupidAuthenticator extends AbstractAuthenticator
{

    public function __construct(private UserRepository $userRepository){
    }

    public function supports(Request $request): ?bool
    {
        return $request->query->has('auth');
    }

    public function authenticate(Request $request): PassportInterface
    {
        $userId = $request->query->get('auth');

        return new SelfValidatingPassport(
            new UserBadge($userId, fn (string $userId) => $this->userRepository->find($userId))
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        return null;
    }
}
