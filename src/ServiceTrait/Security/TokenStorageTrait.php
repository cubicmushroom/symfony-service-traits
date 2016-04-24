<?php
/**
 * Created by PhpStorm.
 * User: toby
 * Date: 24/04/2016
 * Time: 18:44
 */

namespace CubicMushroom\Symfony\ServiceTrait\Security;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Class TokenStorageTrait
 *
 * Provides easy access to the Symfony's TokenStorage service
 *
 * @package LIMTool\KeyFITBundle
 */
trait TokenStorageTrait
{

    // -----------------------------------------------------------------------------------------------------------------
    // Properties
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @var TokenStorage
     */
    protected $tokenStorage;


    // -----------------------------------------------------------------------------------------------------------------
    // Helper methods
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return UserInterface|null
     *
     * @throws \RuntimeException if token storage is not available
     */
    protected function getCurrentUser()
    {
        $tokenStorage = $this->getTokenStorage();

        if (null === $token = $tokenStorage->getToken()) {
            return null;
        }

        if (!is_object($user = $token->getUser())) {
            // e.g. anonymous authentication
            return null;
        }

        return $user;
    }

    // -----------------------------------------------------------------------------------------------------------------
    // Getters and Setters
    // -----------------------------------------------------------------------------------------------------------------

    /**
     * @return TokenStorage
     *
     * @throws \RuntimeException if token storage is not available
     */
    public function getTokenStorage()
    {
        if (empty($this->tokenStorage)) {
            throw new \RuntimeException('Token storage service has not been set');
        }

        return $this->tokenStorage;
    }


    /**
     * @param TokenStorage $tokenStorage
     *
     * @return $this
     */
    public function setTokenStorage($tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;

        return $this;
    }


    /**
     * @return TokenInterface|null
     *
     * @throws \RuntimeException if token storage is not available
     */
    protected function getToken()
    {
        return $this->getTokenStorage()->getToken();
    }


    /**
     * Convenience method to set token on token storage
     *
     * @param $token
     */
    protected function setToken($token)
    {
        $this->getTokenStorage()->setToken($token);
    }
}