<?php

namespace CureDAO\Client\Models;

class RefreshToken
{
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
    public function getClientId(): ?string
    {
        return $this->clientId;
    }

    /**
     * @param string|null $clientId
     *
     * @return RefreshToken
     */
    public function setClientId(?string $clientId): RefreshToken
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
     * @return RefreshToken
     */
    public function setCreatedAt(?string $createdAt): RefreshToken
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
     * @return RefreshToken
     */
    public function setExpires(?string $expires): RefreshToken
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
     * @return RefreshToken
     */
    public function setUpdatedAt(?string $updatedAt): RefreshToken
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
     * @return RefreshToken
     */
    public function setUserId(?int $userId): RefreshToken
    {
        $this->userId = $userId;
        
        return $this;
    }
}

