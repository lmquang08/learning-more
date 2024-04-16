<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider as UserProvider;


class CustomUserProvider extends UserProvider
{
    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param mixed $identifier
     * @param string $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token)
    {
        $user = parent::retrieveByToken($identifier, $token);

        return $this->validAuthenticated($user);
    }


    /**
     * Retrieve a user by their unique identifier.
     *
     * @param mixed $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        $user = parent::retrieveById($identifier);

        return $this->validAuthenticated($user);
    }

    protected function validAuthenticated(\Illuminate\Contracts\Auth\Authenticatable|null $user)
    {
        if ($user && ($user->status === INACTIVE || $user->status === WITHDRAWAL || $user->is_draft == ACTIVE)) {
            return null;
        }

        return $user;
    }
}
