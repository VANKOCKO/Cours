<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class NoJohnUserChecker implements UserCheckerInterface
{

    public function checkPreAuth(UserInterface $user)
    {
        $this->checkAuth($user);
    }

    public function checkPostAuth(UserInterface $user)
    {
        $this->checkAuth($user);
    }

    private function checkAuth (UserInterface $user) {
        if (!$user instanceof User) {
            return;
        }

        if (str_contains($user->getEmail(), 'john')) {
            // throw new CustomUserMessageAccountStatusException('Pas de john sur le site !');
        }
    }
}
