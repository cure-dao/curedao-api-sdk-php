<?php

namespace CureDAO\Client\Models;

class User
{
    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $analysisEndedAt;

    /**
     * @var string
     */
    private $analysisRequestedAt;

    /**
     * @var string
     */
    private $analysisStartedAt;

    /**
     * @var string
     */
    private $avatar;

    /**
     * @var string
     */
    private $birthday;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientUserId;

    /**
     * @var string
     */
    private $combineNotifications;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $coverPhoto;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @var string
     */
    private $earliestReminderTime;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $gravatar;

    /**
     * @var string
     */
    private $hasAndroidApp;

    /**
     * @var string
     */
    private $hasChromeExtension;

    /**
     * @var string
     */
    private $hasIosApp;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $isPublic;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $lastEmailAt;

    /**
     * @var string
     */
    private $lastLoginAt;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $lastPushAt;

    /**
     * @var string
     */
    private $latestReminderTime;

    /**
     * @var string
     */
    private $measurementsCount;

    /**
     * @var string
     */
    private $newestDataAt;

    /**
     * @var string
     */
    private $notificationsCount;

    /**
     * @var string
     */
    private $numberOfPatients;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $primaryOutcomeVariableId;

    /**
     * @var string
     */
    private $providerId;

    /**
     * @var string
     */
    private $pushNotificationsEnabled;

    /**
     * @var string
     */
    private $regProvider;

    /**
     * @var array
     */
    private $roles;

    /**
     * @var string
     */
    private $sendPredictorEmails;

    /**
     * @var string
     */
    private $sendReminderNotificationEmails;

    /**
     * @var string
     */
    private $sentEmailsCount;

    /**
     * @var string
     */
    private $shareAllData;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $tagLine;

    /**
     * @var string
     */
    private $timeZoneOffset;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var string
     */
    private $trackLocation;

    /**
     * @var string
     */
    private $trackingReminderNotificationsCount;

    /**
     * @var string
     */
    private $trackingRemindersCount;

    /**
     * @var bool
     */
    private $unsubscribed;

    /**
     * @var string
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $userErrorMessage;

    /**
     * @var string
     */
    private $userLogin;

    /**
     * @var string
     */
    private $userUrl;

    /**
     * @var string
     */
    private $verified;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var AccessToken
     */
    private $accessToken;

    /**
     * @var RefreshToken
     */
    private $refreshToken;


    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     *
     * @return User
     */
    public function setAddress(?string $address): User
    {
        $this->address = $address;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisEndedAt(): ?string
    {
        return $this->analysisEndedAt;
    }

    /**
     * @param string|null $analysisEndedAt
     *
     * @return User
     */
    public function setAnalysisEndedAt(?string $analysisEndedAt): User
    {
        $this->analysisEndedAt = $analysisEndedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisRequestedAt(): ?string
    {
        return $this->analysisRequestedAt;
    }

    /**
     * @param string|null $analysisRequestedAt
     *
     * @return User
     */
    public function setAnalysisRequestedAt(?string $analysisRequestedAt): User
    {
        $this->analysisRequestedAt = $analysisRequestedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAnalysisStartedAt(): ?string
    {
        return $this->analysisStartedAt;
    }

    /**
     * @param string|null $analysisStartedAt
     *
     * @return User
     */
    public function setAnalysisStartedAt(?string $analysisStartedAt): User
    {
        $this->analysisStartedAt = $analysisStartedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string|null $avatar
     *
     * @return User
     */
    public function setAvatar(?string $avatar): User
    {
        $this->avatar = $avatar;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * @param string|null $birthday
     *
     * @return User
     */
    public function setBirthday(?string $birthday): User
    {
        $this->birthday = $birthday;
        
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
     * @return User
     */
    public function setClientId(?string $clientId): User
    {
        $this->clientId = $clientId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientUserId(): ?string
    {
        return $this->clientUserId;
    }

    /**
     * @param string|null $clientUserId
     *
     * @return User
     */
    public function setClientUserId(?string $clientUserId): User
    {
        $this->clientUserId = $clientUserId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCombineNotifications(): ?string
    {
        return $this->combineNotifications;
    }

    /**
     * @param string|null $combineNotifications
     *
     * @return User
     */
    public function setCombineNotifications(?string $combineNotifications): User
    {
        $this->combineNotifications = $combineNotifications;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     *
     * @return User
     */
    public function setCountry(?string $country): User
    {
        $this->country = $country;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCoverPhoto(): ?string
    {
        return $this->coverPhoto;
    }

    /**
     * @param string|null $coverPhoto
     *
     * @return User
     */
    public function setCoverPhoto(?string $coverPhoto): User
    {
        $this->coverPhoto = $coverPhoto;
        
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
     * @return User
     */
    public function setCreatedAt(?string $createdAt): User
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     *
     * @return User
     */
    public function setCurrency(?string $currency): User
    {
        $this->currency = $currency;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @param string|null $displayName
     *
     * @return User
     */
    public function setDisplayName(?string $displayName): User
    {
        $this->displayName = $displayName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEarliestReminderTime(): ?string
    {
        return $this->earliestReminderTime;
    }

    /**
     * @param string|null $earliestReminderTime
     *
     * @return User
     */
    public function setEarliestReminderTime(?string $earliestReminderTime): User
    {
        $this->earliestReminderTime = $earliestReminderTime;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return User
     */
    public function setEmail(?string $email): User
    {
        $this->email = $email;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     *
     * @return User
     */
    public function setFirstName(?string $firstName): User
    {
        $this->firstName = $firstName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     *
     * @return User
     */
    public function setGender(?string $gender): User
    {
        $this->gender = $gender;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGravatar(): ?string
    {
        return $this->gravatar;
    }

    /**
     * @param string|null $gravatar
     *
     * @return User
     */
    public function setGravatar(?string $gravatar): User
    {
        $this->gravatar = $gravatar;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHasAndroidApp(): ?string
    {
        return $this->hasAndroidApp;
    }

    /**
     * @param string|null $hasAndroidApp
     *
     * @return User
     */
    public function setHasAndroidApp(?string $hasAndroidApp): User
    {
        $this->hasAndroidApp = $hasAndroidApp;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHasChromeExtension(): ?string
    {
        return $this->hasChromeExtension;
    }

    /**
     * @param string|null $hasChromeExtension
     *
     * @return User
     */
    public function setHasChromeExtension(?string $hasChromeExtension): User
    {
        $this->hasChromeExtension = $hasChromeExtension;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHasIosApp(): ?string
    {
        return $this->hasIosApp;
    }

    /**
     * @param string|null $hasIosApp
     *
     * @return User
     */
    public function setHasIosApp(?string $hasIosApp): User
    {
        $this->hasIosApp = $hasIosApp;
        
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return User
     */
    public function setId(?int $id): User
    {
        $this->id = $id;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsPublic(): ?string
    {
        return $this->isPublic;
    }

    /**
     * @param string|null $isPublic
     *
     * @return User
     */
    public function setIsPublic(?string $isPublic): User
    {
        $this->isPublic = $isPublic;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     *
     * @return User
     */
    public function setLanguage(?string $language): User
    {
        $this->language = $language;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastEmailAt(): ?string
    {
        return $this->lastEmailAt;
    }

    /**
     * @param string|null $lastEmailAt
     *
     * @return User
     */
    public function setLastEmailAt(?string $lastEmailAt): User
    {
        $this->lastEmailAt = $lastEmailAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastLoginAt(): ?string
    {
        return $this->lastLoginAt;
    }

    /**
     * @param string|null $lastLoginAt
     *
     * @return User
     */
    public function setLastLoginAt(?string $lastLoginAt): User
    {
        $this->lastLoginAt = $lastLoginAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     *
     * @return User
     */
    public function setLastName(?string $lastName): User
    {
        $this->lastName = $lastName;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastPushAt(): ?string
    {
        return $this->lastPushAt;
    }

    /**
     * @param string|null $lastPushAt
     *
     * @return User
     */
    public function setLastPushAt(?string $lastPushAt): User
    {
        $this->lastPushAt = $lastPushAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLatestReminderTime(): ?string
    {
        return $this->latestReminderTime;
    }

    /**
     * @param string|null $latestReminderTime
     *
     * @return User
     */
    public function setLatestReminderTime(?string $latestReminderTime): User
    {
        $this->latestReminderTime = $latestReminderTime;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMeasurementsCount(): ?string
    {
        return $this->measurementsCount;
    }

    /**
     * @param string|null $measurementsCount
     *
     * @return User
     */
    public function setMeasurementsCount(?string $measurementsCount): User
    {
        $this->measurementsCount = $measurementsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewestDataAt(): ?string
    {
        return $this->newestDataAt;
    }

    /**
     * @param string|null $newestDataAt
     *
     * @return User
     */
    public function setNewestDataAt(?string $newestDataAt): User
    {
        $this->newestDataAt = $newestDataAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotificationsCount(): ?string
    {
        return $this->notificationsCount;
    }

    /**
     * @param string|null $notificationsCount
     *
     * @return User
     */
    public function setNotificationsCount(?string $notificationsCount): User
    {
        $this->notificationsCount = $notificationsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumberOfPatients(): ?string
    {
        return $this->numberOfPatients;
    }

    /**
     * @param string|null $numberOfPatients
     *
     * @return User
     */
    public function setNumberOfPatients(?string $numberOfPatients): User
    {
        $this->numberOfPatients = $numberOfPatients;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     *
     * @return User
     */
    public function setPassword(?string $password): User
    {
        $this->password = $password;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     *
     * @return User
     */
    public function setPhoneNumber(?string $phoneNumber): User
    {
        $this->phoneNumber = $phoneNumber;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrimaryOutcomeVariableId(): ?string
    {
        return $this->primaryOutcomeVariableId;
    }

    /**
     * @param string|null $primaryOutcomeVariableId
     *
     * @return User
     */
    public function setPrimaryOutcomeVariableId(?string $primaryOutcomeVariableId): User
    {
        $this->primaryOutcomeVariableId = $primaryOutcomeVariableId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }

    /**
     * @param string|null $providerId
     *
     * @return User
     */
    public function setProviderId(?string $providerId): User
    {
        $this->providerId = $providerId;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPushNotificationsEnabled(): ?string
    {
        return $this->pushNotificationsEnabled;
    }

    /**
     * @param string|null $pushNotificationsEnabled
     *
     * @return User
     */
    public function setPushNotificationsEnabled(?string $pushNotificationsEnabled): User
    {
        $this->pushNotificationsEnabled = $pushNotificationsEnabled;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegProvider(): ?string
    {
        return $this->regProvider;
    }

    /**
     * @param string|null $regProvider
     *
     * @return User
     */
    public function setRegProvider(?string $regProvider): User
    {
        $this->regProvider = $regProvider;
        
        return $this;
    }

    /**
     * @return array|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param array|null $roles
     *
     * @return User
     */
    public function setRoles(?array $roles): User
    {
        $this->roles = $roles;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSendPredictorEmails(): ?string
    {
        return $this->sendPredictorEmails;
    }

    /**
     * @param string|null $sendPredictorEmails
     *
     * @return User
     */
    public function setSendPredictorEmails(?string $sendPredictorEmails): User
    {
        $this->sendPredictorEmails = $sendPredictorEmails;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSendReminderNotificationEmails(): ?string
    {
        return $this->sendReminderNotificationEmails;
    }

    /**
     * @param string|null $sendReminderNotificationEmails
     *
     * @return User
     */
    public function setSendReminderNotificationEmails(?string $sendReminderNotificationEmails): User
    {
        $this->sendReminderNotificationEmails = $sendReminderNotificationEmails;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSentEmailsCount(): ?string
    {
        return $this->sentEmailsCount;
    }

    /**
     * @param string|null $sentEmailsCount
     *
     * @return User
     */
    public function setSentEmailsCount(?string $sentEmailsCount): User
    {
        $this->sentEmailsCount = $sentEmailsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getShareAllData(): ?string
    {
        return $this->shareAllData;
    }

    /**
     * @param string|null $shareAllData
     *
     * @return User
     */
    public function setShareAllData(?string $shareAllData): User
    {
        $this->shareAllData = $shareAllData;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     *
     * @return User
     */
    public function setSlug(?string $slug): User
    {
        $this->slug = $slug;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return User
     */
    public function setState(?string $state): User
    {
        $this->state = $state;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTagLine(): ?string
    {
        return $this->tagLine;
    }

    /**
     * @param string|null $tagLine
     *
     * @return User
     */
    public function setTagLine(?string $tagLine): User
    {
        $this->tagLine = $tagLine;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimeZoneOffset(): ?string
    {
        return $this->timeZoneOffset;
    }

    /**
     * @param string|null $timeZoneOffset
     *
     * @return User
     */
    public function setTimeZoneOffset(?string $timeZoneOffset): User
    {
        $this->timeZoneOffset = $timeZoneOffset;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * @param string|null $timezone
     *
     * @return User
     */
    public function setTimezone(?string $timezone): User
    {
        $this->timezone = $timezone;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackLocation(): ?string
    {
        return $this->trackLocation;
    }

    /**
     * @param string|null $trackLocation
     *
     * @return User
     */
    public function setTrackLocation(?string $trackLocation): User
    {
        $this->trackLocation = $trackLocation;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingReminderNotificationsCount(): ?string
    {
        return $this->trackingReminderNotificationsCount;
    }

    /**
     * @param string|null $trackingReminderNotificationsCount
     *
     * @return User
     */
    public function setTrackingReminderNotificationsCount(?string $trackingReminderNotificationsCount): User
    {
        $this->trackingReminderNotificationsCount = $trackingReminderNotificationsCount;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTrackingRemindersCount(): ?string
    {
        return $this->trackingRemindersCount;
    }

    /**
     * @param string|null $trackingRemindersCount
     *
     * @return User
     */
    public function setTrackingRemindersCount(?string $trackingRemindersCount): User
    {
        $this->trackingRemindersCount = $trackingRemindersCount;
        
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isUnsubscribed(): ?bool
    {
        return $this->unsubscribed;
    }

    /**
     * @param bool|null $unsubscribed
     *
     * @return User
     */
    public function setUnsubscribed(?bool $unsubscribed): User
    {
        $this->unsubscribed = $unsubscribed;
        
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
     * @return User
     */
    public function setUpdatedAt(?string $updatedAt): User
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserErrorMessage(): ?string
    {
        return $this->userErrorMessage;
    }

    /**
     * @param string|null $userErrorMessage
     *
     * @return User
     */
    public function setUserErrorMessage(?string $userErrorMessage): User
    {
        $this->userErrorMessage = $userErrorMessage;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }

    /**
     * @param string|null $userLogin
     *
     * @return User
     */
    public function setUserLogin(?string $userLogin): User
    {
        $this->userLogin = $userLogin;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserUrl(): ?string
    {
        return $this->userUrl;
    }

    /**
     * @param string|null $userUrl
     *
     * @return User
     */
    public function setUserUrl(?string $userUrl): User
    {
        $this->userUrl = $userUrl;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVerified(): ?string
    {
        return $this->verified;
    }

    /**
     * @param string|null $verified
     *
     * @return User
     */
    public function setVerified(?string $verified): User
    {
        $this->verified = $verified;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     *
     * @return User
     */
    public function setZipCode(?string $zipCode): User
    {
        $this->zipCode = $zipCode;
        
        return $this;
    }

    /**
     * @return AccessToken|null
     */
    public function getAccessToken(): ?AccessToken
    {
        return $this->accessToken;
    }

    /**
     * @param AccessToken|null $accessToken
     *
     * @return User
     */
    public function setAccessToken(?AccessToken $accessToken): User
    {
        $this->accessToken = $accessToken;
        
        return $this;
    }

    /**
     * @return RefreshToken|null
     */
    public function getRefreshToken(): ?RefreshToken
    {
        return $this->refreshToken;
    }

    /**
     * @param RefreshToken|null $refreshToken
     *
     * @return User
     */
    public function setRefreshToken(?RefreshToken $refreshToken): User
    {
        $this->refreshToken = $refreshToken;
        
        return $this;
    }
}

