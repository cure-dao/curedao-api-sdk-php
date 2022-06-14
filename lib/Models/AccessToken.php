<?php

namespace CureDAO\Client\Models;

class AccessToken
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $expires;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var int
     */
    private $userId;


    /**
     * @return string|null
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * @param string|null $accessToken
     *
     * @return AccessToken
     */
    public function setAccessToken(?string $accessToken): AccessToken
    {
        $this->accessToken = $accessToken;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return AccessToken
     */
    public function setClientId(?string $clientId): AccessToken
    {
        $this->clientId = $clientId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @param string|null $createdAt
     *
     * @return AccessToken
     */
    public function setCreatedAt(?string $createdAt): AccessToken
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExpires(): ?string
    {
        return $this->expires;
    }

    /**
     * @param string|null $expires
     *
     * @return AccessToken
     */
    public function setExpires(?string $expires): AccessToken
    {
        $this->expires = $expires;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @param string|null $updatedAt
     *
     * @return AccessToken
     */
    public function setUpdatedAt(?string $updatedAt): AccessToken
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int|null $userId
     *
     * @return AccessToken
     */
    public function setUserId(?int $userId): AccessToken
    {
        $this->userId = $userId;
        
        return $this;
    }
}
