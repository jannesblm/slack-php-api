<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class TeamPrefsPrefs extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $allUsersCanPurchase;
    /**
     * @var bool
     */
    protected $allowCalls;
    /**
     * @var bool
     */
    protected $allowCallsInteractiveScreenSharing;
    /**
     * @var bool
     */
    protected $allowMessageDeletion;
    /**
     * @var bool
     */
    protected $allowRetentionOverride;
    /**
     * @var bool
     */
    protected $allowSharedChannelPermsOverride;
    /**
     * @var bool
     */
    protected $appWhitelistEnabled;
    /**
     * @var string
     */
    protected $authMode;
    /**
     * @var string
     */
    protected $callingAppName;
    /**
     * @var bool
     */
    protected $canReceiveSharedChannelsInvites;
    /**
     * @var int
     */
    protected $complianceExportStart;
    /**
     * @var string
     */
    protected $customStatusDefaultEmoji;
    /**
     * @var string[][]
     */
    protected $customStatusPresets;
    /**
     * @var bool
     */
    protected $customTos;
    /**
     * @var string[]
     */
    protected $defaultChannels;
    /**
     * @var string[]
     */
    protected $defaultRxns;
    /**
     * @var bool
     */
    protected $disableEmailIngestion;
    /**
     * @var bool
     */
    protected $disableFileDeleting;
    /**
     * @var bool
     */
    protected $disableFileEditing;
    /**
     * @var string
     */
    protected $disableFileUploads;
    /**
     * @var bool
     */
    protected $disallowPublicFileUrls;
    /**
     * @var string
     */
    protected $discoverable;
    /**
     * @var bool
     */
    protected $displayEmailAddresses;
    /**
     * @var bool
     */
    protected $displayRealNames;
    /**
     * @var int
     */
    protected $dmRetentionDuration;
    /**
     * @var int
     */
    protected $dmRetentionType;
    /**
     * @var bool
     */
    protected $dndEnabled;
    /**
     * @var string
     */
    protected $dndEndHour;
    /**
     * @var string
     */
    protected $dndStartHour;
    /**
     * @var int
     */
    protected $enableSharedChannels;
    /**
     * @var mixed[]
     */
    protected $enterpriseDefaultChannels;
    /**
     * @var mixed[]
     */
    protected $enterpriseMandatoryChannels;
    /**
     * @var int
     */
    protected $enterpriseMdmDateEnabled;
    /**
     * @var int
     */
    protected $enterpriseMdmLevel;
    /**
     * @var TeamPrefsPrefsEnterpriseTeamCreationRequest
     */
    protected $enterpriseTeamCreationRequest;
    /**
     * @var bool
     */
    protected $fileLimitWhitelisted;
    /**
     * @var int
     */
    protected $fileRetentionDuration;
    /**
     * @var int
     */
    protected $fileRetentionType;
    /**
     * @var bool
     */
    protected $gdriveEnabledTeam;
    /**
     * @var int
     */
    protected $groupRetentionDuration;
    /**
     * @var int
     */
    protected $groupRetentionType;
    /**
     * @var bool
     */
    protected $hideReferers;
    /**
     * @var bool
     */
    protected $invitesLimit;
    /**
     * @var bool
     */
    protected $invitesOnlyAdmins;
    /**
     * @var string
     */
    protected $locale;
    /**
     * @var int
     */
    protected $loudChannelMentionsLimit;
    /**
     * @var int
     */
    protected $msgEditWindowMins;
    /**
     * @var int
     */
    protected $retentionDuration;
    /**
     * @var int
     */
    protected $retentionType;
    /**
     * @var bool
     */
    protected $showJoinLeave;
    /**
     * @var bool
     */
    protected $usesCustomizedCustomStatusPresets;
    /**
     * @var string
     */
    protected $warnBeforeAtChannel;
    /**
     * @var string
     */
    protected $whoCanArchiveChannels;
    /**
     * @var string
     */
    protected $whoCanAtChannel;
    /**
     * @var string
     */
    protected $whoCanAtEveryone;
    /**
     * @var string
     */
    protected $whoCanChangeTeamProfile;
    /**
     * @var string
     */
    protected $whoCanCreateChannels;
    /**
     * @var string
     */
    protected $whoCanCreateDeleteUserGroups;
    /**
     * @var string
     */
    protected $whoCanCreateGroups;
    /**
     * @var string
     */
    protected $whoCanCreateSharedChannels;
    /**
     * @var string
     */
    protected $whoCanEditUserGroups;
    /**
     * @var string
     */
    protected $whoCanKickChannels;
    /**
     * @var string
     */
    protected $whoCanKickGroups;
    /**
     * @var TeamPrefsPrefsWhoCanManageGuests
     */
    protected $whoCanManageGuests;
    /**
     * @var TeamPrefsPrefsWhoCanManageIntegrations
     */
    protected $whoCanManageIntegrations;
    /**
     * @var TeamPrefsPrefsWhoCanManageSharedChannels
     */
    protected $whoCanManageSharedChannels;
    /**
     * @var string
     */
    protected $whoCanPostGeneral;
    /**
     * @var TeamPrefsPrefsWhoCanPostInSharedChannels
     */
    protected $whoCanPostInSharedChannels;
    /**
     * @var string
     */
    protected $whoHasTeamVisibility;

    /**
     * @return bool
     */
    public function getAllUsersCanPurchase(): ?bool
    {
        return $this->allUsersCanPurchase;
    }

    /**
     * @param bool $allUsersCanPurchase
     *
     * @return self
     */
    public function setAllUsersCanPurchase(?bool $allUsersCanPurchase): self
    {
        $this->allUsersCanPurchase = $allUsersCanPurchase;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowCalls(): ?bool
    {
        return $this->allowCalls;
    }

    /**
     * @param bool $allowCalls
     *
     * @return self
     */
    public function setAllowCalls(?bool $allowCalls): self
    {
        $this->allowCalls = $allowCalls;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowCallsInteractiveScreenSharing(): ?bool
    {
        return $this->allowCallsInteractiveScreenSharing;
    }

    /**
     * @param bool $allowCallsInteractiveScreenSharing
     *
     * @return self
     */
    public function setAllowCallsInteractiveScreenSharing(?bool $allowCallsInteractiveScreenSharing): self
    {
        $this->allowCallsInteractiveScreenSharing = $allowCallsInteractiveScreenSharing;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowMessageDeletion(): ?bool
    {
        return $this->allowMessageDeletion;
    }

    /**
     * @param bool $allowMessageDeletion
     *
     * @return self
     */
    public function setAllowMessageDeletion(?bool $allowMessageDeletion): self
    {
        $this->allowMessageDeletion = $allowMessageDeletion;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowRetentionOverride(): ?bool
    {
        return $this->allowRetentionOverride;
    }

    /**
     * @param bool $allowRetentionOverride
     *
     * @return self
     */
    public function setAllowRetentionOverride(?bool $allowRetentionOverride): self
    {
        $this->allowRetentionOverride = $allowRetentionOverride;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowSharedChannelPermsOverride(): ?bool
    {
        return $this->allowSharedChannelPermsOverride;
    }

    /**
     * @param bool $allowSharedChannelPermsOverride
     *
     * @return self
     */
    public function setAllowSharedChannelPermsOverride(?bool $allowSharedChannelPermsOverride): self
    {
        $this->allowSharedChannelPermsOverride = $allowSharedChannelPermsOverride;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAppWhitelistEnabled(): ?bool
    {
        return $this->appWhitelistEnabled;
    }

    /**
     * @param bool $appWhitelistEnabled
     *
     * @return self
     */
    public function setAppWhitelistEnabled(?bool $appWhitelistEnabled): self
    {
        $this->appWhitelistEnabled = $appWhitelistEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthMode(): ?string
    {
        return $this->authMode;
    }

    /**
     * @param string $authMode
     *
     * @return self
     */
    public function setAuthMode(?string $authMode): self
    {
        $this->authMode = $authMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallingAppName(): ?string
    {
        return $this->callingAppName;
    }

    /**
     * @param string $callingAppName
     *
     * @return self
     */
    public function setCallingAppName(?string $callingAppName): self
    {
        $this->callingAppName = $callingAppName;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCanReceiveSharedChannelsInvites(): ?bool
    {
        return $this->canReceiveSharedChannelsInvites;
    }

    /**
     * @param bool $canReceiveSharedChannelsInvites
     *
     * @return self
     */
    public function setCanReceiveSharedChannelsInvites(?bool $canReceiveSharedChannelsInvites): self
    {
        $this->canReceiveSharedChannelsInvites = $canReceiveSharedChannelsInvites;

        return $this;
    }

    /**
     * @return int
     */
    public function getComplianceExportStart(): ?int
    {
        return $this->complianceExportStart;
    }

    /**
     * @param int $complianceExportStart
     *
     * @return self
     */
    public function setComplianceExportStart(?int $complianceExportStart): self
    {
        $this->complianceExportStart = $complianceExportStart;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomStatusDefaultEmoji(): ?string
    {
        return $this->customStatusDefaultEmoji;
    }

    /**
     * @param string $customStatusDefaultEmoji
     *
     * @return self
     */
    public function setCustomStatusDefaultEmoji(?string $customStatusDefaultEmoji): self
    {
        $this->customStatusDefaultEmoji = $customStatusDefaultEmoji;

        return $this;
    }

    /**
     * @return string[][]
     */
    public function getCustomStatusPresets(): ?array
    {
        return $this->customStatusPresets;
    }

    /**
     * @param string[][] $customStatusPresets
     *
     * @return self
     */
    public function setCustomStatusPresets(?array $customStatusPresets): self
    {
        $this->customStatusPresets = $customStatusPresets;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCustomTos(): ?bool
    {
        return $this->customTos;
    }

    /**
     * @param bool $customTos
     *
     * @return self
     */
    public function setCustomTos(?bool $customTos): self
    {
        $this->customTos = $customTos;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDefaultChannels(): ?array
    {
        return $this->defaultChannels;
    }

    /**
     * @param string[] $defaultChannels
     *
     * @return self
     */
    public function setDefaultChannels(?array $defaultChannels): self
    {
        $this->defaultChannels = $defaultChannels;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDefaultRxns(): ?array
    {
        return $this->defaultRxns;
    }

    /**
     * @param string[] $defaultRxns
     *
     * @return self
     */
    public function setDefaultRxns(?array $defaultRxns): self
    {
        $this->defaultRxns = $defaultRxns;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableEmailIngestion(): ?bool
    {
        return $this->disableEmailIngestion;
    }

    /**
     * @param bool $disableEmailIngestion
     *
     * @return self
     */
    public function setDisableEmailIngestion(?bool $disableEmailIngestion): self
    {
        $this->disableEmailIngestion = $disableEmailIngestion;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableFileDeleting(): ?bool
    {
        return $this->disableFileDeleting;
    }

    /**
     * @param bool $disableFileDeleting
     *
     * @return self
     */
    public function setDisableFileDeleting(?bool $disableFileDeleting): self
    {
        $this->disableFileDeleting = $disableFileDeleting;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableFileEditing(): ?bool
    {
        return $this->disableFileEditing;
    }

    /**
     * @param bool $disableFileEditing
     *
     * @return self
     */
    public function setDisableFileEditing(?bool $disableFileEditing): self
    {
        $this->disableFileEditing = $disableFileEditing;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisableFileUploads(): ?string
    {
        return $this->disableFileUploads;
    }

    /**
     * @param string $disableFileUploads
     *
     * @return self
     */
    public function setDisableFileUploads(?string $disableFileUploads): self
    {
        $this->disableFileUploads = $disableFileUploads;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisallowPublicFileUrls(): ?bool
    {
        return $this->disallowPublicFileUrls;
    }

    /**
     * @param bool $disallowPublicFileUrls
     *
     * @return self
     */
    public function setDisallowPublicFileUrls(?bool $disallowPublicFileUrls): self
    {
        $this->disallowPublicFileUrls = $disallowPublicFileUrls;

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscoverable(): ?string
    {
        return $this->discoverable;
    }

    /**
     * @param string $discoverable
     *
     * @return self
     */
    public function setDiscoverable(?string $discoverable): self
    {
        $this->discoverable = $discoverable;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayEmailAddresses(): ?bool
    {
        return $this->displayEmailAddresses;
    }

    /**
     * @param bool $displayEmailAddresses
     *
     * @return self
     */
    public function setDisplayEmailAddresses(?bool $displayEmailAddresses): self
    {
        $this->displayEmailAddresses = $displayEmailAddresses;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayRealNames(): ?bool
    {
        return $this->displayRealNames;
    }

    /**
     * @param bool $displayRealNames
     *
     * @return self
     */
    public function setDisplayRealNames(?bool $displayRealNames): self
    {
        $this->displayRealNames = $displayRealNames;

        return $this;
    }

    /**
     * @return int
     */
    public function getDmRetentionDuration(): ?int
    {
        return $this->dmRetentionDuration;
    }

    /**
     * @param int $dmRetentionDuration
     *
     * @return self
     */
    public function setDmRetentionDuration(?int $dmRetentionDuration): self
    {
        $this->dmRetentionDuration = $dmRetentionDuration;

        return $this;
    }

    /**
     * @return int
     */
    public function getDmRetentionType(): ?int
    {
        return $this->dmRetentionType;
    }

    /**
     * @param int $dmRetentionType
     *
     * @return self
     */
    public function setDmRetentionType(?int $dmRetentionType): self
    {
        $this->dmRetentionType = $dmRetentionType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDndEnabled(): ?bool
    {
        return $this->dndEnabled;
    }

    /**
     * @param bool $dndEnabled
     *
     * @return self
     */
    public function setDndEnabled(?bool $dndEnabled): self
    {
        $this->dndEnabled = $dndEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getDndEndHour(): ?string
    {
        return $this->dndEndHour;
    }

    /**
     * @param string $dndEndHour
     *
     * @return self
     */
    public function setDndEndHour(?string $dndEndHour): self
    {
        $this->dndEndHour = $dndEndHour;

        return $this;
    }

    /**
     * @return string
     */
    public function getDndStartHour(): ?string
    {
        return $this->dndStartHour;
    }

    /**
     * @param string $dndStartHour
     *
     * @return self
     */
    public function setDndStartHour(?string $dndStartHour): self
    {
        $this->dndStartHour = $dndStartHour;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnableSharedChannels(): ?int
    {
        return $this->enableSharedChannels;
    }

    /**
     * @param int $enableSharedChannels
     *
     * @return self
     */
    public function setEnableSharedChannels(?int $enableSharedChannels): self
    {
        $this->enableSharedChannels = $enableSharedChannels;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getEnterpriseDefaultChannels(): ?array
    {
        return $this->enterpriseDefaultChannels;
    }

    /**
     * @param mixed[] $enterpriseDefaultChannels
     *
     * @return self
     */
    public function setEnterpriseDefaultChannels(?array $enterpriseDefaultChannels): self
    {
        $this->enterpriseDefaultChannels = $enterpriseDefaultChannels;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getEnterpriseMandatoryChannels(): ?array
    {
        return $this->enterpriseMandatoryChannels;
    }

    /**
     * @param mixed[] $enterpriseMandatoryChannels
     *
     * @return self
     */
    public function setEnterpriseMandatoryChannels(?array $enterpriseMandatoryChannels): self
    {
        $this->enterpriseMandatoryChannels = $enterpriseMandatoryChannels;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnterpriseMdmDateEnabled(): ?int
    {
        return $this->enterpriseMdmDateEnabled;
    }

    /**
     * @param int $enterpriseMdmDateEnabled
     *
     * @return self
     */
    public function setEnterpriseMdmDateEnabled(?int $enterpriseMdmDateEnabled): self
    {
        $this->enterpriseMdmDateEnabled = $enterpriseMdmDateEnabled;

        return $this;
    }

    /**
     * @return int
     */
    public function getEnterpriseMdmLevel(): ?int
    {
        return $this->enterpriseMdmLevel;
    }

    /**
     * @param int $enterpriseMdmLevel
     *
     * @return self
     */
    public function setEnterpriseMdmLevel(?int $enterpriseMdmLevel): self
    {
        $this->enterpriseMdmLevel = $enterpriseMdmLevel;

        return $this;
    }

    /**
     * @return TeamPrefsPrefsEnterpriseTeamCreationRequest
     */
    public function getEnterpriseTeamCreationRequest(): ?TeamPrefsPrefsEnterpriseTeamCreationRequest
    {
        return $this->enterpriseTeamCreationRequest;
    }

    /**
     * @param TeamPrefsPrefsEnterpriseTeamCreationRequest $enterpriseTeamCreationRequest
     *
     * @return self
     */
    public function setEnterpriseTeamCreationRequest(?TeamPrefsPrefsEnterpriseTeamCreationRequest $enterpriseTeamCreationRequest): self
    {
        $this->enterpriseTeamCreationRequest = $enterpriseTeamCreationRequest;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFileLimitWhitelisted(): ?bool
    {
        return $this->fileLimitWhitelisted;
    }

    /**
     * @param bool $fileLimitWhitelisted
     *
     * @return self
     */
    public function setFileLimitWhitelisted(?bool $fileLimitWhitelisted): self
    {
        $this->fileLimitWhitelisted = $fileLimitWhitelisted;

        return $this;
    }

    /**
     * @return int
     */
    public function getFileRetentionDuration(): ?int
    {
        return $this->fileRetentionDuration;
    }

    /**
     * @param int $fileRetentionDuration
     *
     * @return self
     */
    public function setFileRetentionDuration(?int $fileRetentionDuration): self
    {
        $this->fileRetentionDuration = $fileRetentionDuration;

        return $this;
    }

    /**
     * @return int
     */
    public function getFileRetentionType(): ?int
    {
        return $this->fileRetentionType;
    }

    /**
     * @param int $fileRetentionType
     *
     * @return self
     */
    public function setFileRetentionType(?int $fileRetentionType): self
    {
        $this->fileRetentionType = $fileRetentionType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getGdriveEnabledTeam(): ?bool
    {
        return $this->gdriveEnabledTeam;
    }

    /**
     * @param bool $gdriveEnabledTeam
     *
     * @return self
     */
    public function setGdriveEnabledTeam(?bool $gdriveEnabledTeam): self
    {
        $this->gdriveEnabledTeam = $gdriveEnabledTeam;

        return $this;
    }

    /**
     * @return int
     */
    public function getGroupRetentionDuration(): ?int
    {
        return $this->groupRetentionDuration;
    }

    /**
     * @param int $groupRetentionDuration
     *
     * @return self
     */
    public function setGroupRetentionDuration(?int $groupRetentionDuration): self
    {
        $this->groupRetentionDuration = $groupRetentionDuration;

        return $this;
    }

    /**
     * @return int
     */
    public function getGroupRetentionType(): ?int
    {
        return $this->groupRetentionType;
    }

    /**
     * @param int $groupRetentionType
     *
     * @return self
     */
    public function setGroupRetentionType(?int $groupRetentionType): self
    {
        $this->groupRetentionType = $groupRetentionType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHideReferers(): ?bool
    {
        return $this->hideReferers;
    }

    /**
     * @param bool $hideReferers
     *
     * @return self
     */
    public function setHideReferers(?bool $hideReferers): self
    {
        $this->hideReferers = $hideReferers;

        return $this;
    }

    /**
     * @return bool
     */
    public function getInvitesLimit(): ?bool
    {
        return $this->invitesLimit;
    }

    /**
     * @param bool $invitesLimit
     *
     * @return self
     */
    public function setInvitesLimit(?bool $invitesLimit): self
    {
        $this->invitesLimit = $invitesLimit;

        return $this;
    }

    /**
     * @return bool
     */
    public function getInvitesOnlyAdmins(): ?bool
    {
        return $this->invitesOnlyAdmins;
    }

    /**
     * @param bool $invitesOnlyAdmins
     *
     * @return self
     */
    public function setInvitesOnlyAdmins(?bool $invitesOnlyAdmins): self
    {
        $this->invitesOnlyAdmins = $invitesOnlyAdmins;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return int
     */
    public function getLoudChannelMentionsLimit(): ?int
    {
        return $this->loudChannelMentionsLimit;
    }

    /**
     * @param int $loudChannelMentionsLimit
     *
     * @return self
     */
    public function setLoudChannelMentionsLimit(?int $loudChannelMentionsLimit): self
    {
        $this->loudChannelMentionsLimit = $loudChannelMentionsLimit;

        return $this;
    }

    /**
     * @return int
     */
    public function getMsgEditWindowMins(): ?int
    {
        return $this->msgEditWindowMins;
    }

    /**
     * @param int $msgEditWindowMins
     *
     * @return self
     */
    public function setMsgEditWindowMins(?int $msgEditWindowMins): self
    {
        $this->msgEditWindowMins = $msgEditWindowMins;

        return $this;
    }

    /**
     * @return int
     */
    public function getRetentionDuration(): ?int
    {
        return $this->retentionDuration;
    }

    /**
     * @param int $retentionDuration
     *
     * @return self
     */
    public function setRetentionDuration(?int $retentionDuration): self
    {
        $this->retentionDuration = $retentionDuration;

        return $this;
    }

    /**
     * @return int
     */
    public function getRetentionType(): ?int
    {
        return $this->retentionType;
    }

    /**
     * @param int $retentionType
     *
     * @return self
     */
    public function setRetentionType(?int $retentionType): self
    {
        $this->retentionType = $retentionType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShowJoinLeave(): ?bool
    {
        return $this->showJoinLeave;
    }

    /**
     * @param bool $showJoinLeave
     *
     * @return self
     */
    public function setShowJoinLeave(?bool $showJoinLeave): self
    {
        $this->showJoinLeave = $showJoinLeave;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUsesCustomizedCustomStatusPresets(): ?bool
    {
        return $this->usesCustomizedCustomStatusPresets;
    }

    /**
     * @param bool $usesCustomizedCustomStatusPresets
     *
     * @return self
     */
    public function setUsesCustomizedCustomStatusPresets(?bool $usesCustomizedCustomStatusPresets): self
    {
        $this->usesCustomizedCustomStatusPresets = $usesCustomizedCustomStatusPresets;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarnBeforeAtChannel(): ?string
    {
        return $this->warnBeforeAtChannel;
    }

    /**
     * @param string $warnBeforeAtChannel
     *
     * @return self
     */
    public function setWarnBeforeAtChannel(?string $warnBeforeAtChannel): self
    {
        $this->warnBeforeAtChannel = $warnBeforeAtChannel;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanArchiveChannels(): ?string
    {
        return $this->whoCanArchiveChannels;
    }

    /**
     * @param string $whoCanArchiveChannels
     *
     * @return self
     */
    public function setWhoCanArchiveChannels(?string $whoCanArchiveChannels): self
    {
        $this->whoCanArchiveChannels = $whoCanArchiveChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanAtChannel(): ?string
    {
        return $this->whoCanAtChannel;
    }

    /**
     * @param string $whoCanAtChannel
     *
     * @return self
     */
    public function setWhoCanAtChannel(?string $whoCanAtChannel): self
    {
        $this->whoCanAtChannel = $whoCanAtChannel;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanAtEveryone(): ?string
    {
        return $this->whoCanAtEveryone;
    }

    /**
     * @param string $whoCanAtEveryone
     *
     * @return self
     */
    public function setWhoCanAtEveryone(?string $whoCanAtEveryone): self
    {
        $this->whoCanAtEveryone = $whoCanAtEveryone;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanChangeTeamProfile(): ?string
    {
        return $this->whoCanChangeTeamProfile;
    }

    /**
     * @param string $whoCanChangeTeamProfile
     *
     * @return self
     */
    public function setWhoCanChangeTeamProfile(?string $whoCanChangeTeamProfile): self
    {
        $this->whoCanChangeTeamProfile = $whoCanChangeTeamProfile;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanCreateChannels(): ?string
    {
        return $this->whoCanCreateChannels;
    }

    /**
     * @param string $whoCanCreateChannels
     *
     * @return self
     */
    public function setWhoCanCreateChannels(?string $whoCanCreateChannels): self
    {
        $this->whoCanCreateChannels = $whoCanCreateChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanCreateDeleteUserGroups(): ?string
    {
        return $this->whoCanCreateDeleteUserGroups;
    }

    /**
     * @param string $whoCanCreateDeleteUserGroups
     *
     * @return self
     */
    public function setWhoCanCreateDeleteUserGroups(?string $whoCanCreateDeleteUserGroups): self
    {
        $this->whoCanCreateDeleteUserGroups = $whoCanCreateDeleteUserGroups;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanCreateGroups(): ?string
    {
        return $this->whoCanCreateGroups;
    }

    /**
     * @param string $whoCanCreateGroups
     *
     * @return self
     */
    public function setWhoCanCreateGroups(?string $whoCanCreateGroups): self
    {
        $this->whoCanCreateGroups = $whoCanCreateGroups;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanCreateSharedChannels(): ?string
    {
        return $this->whoCanCreateSharedChannels;
    }

    /**
     * @param string $whoCanCreateSharedChannels
     *
     * @return self
     */
    public function setWhoCanCreateSharedChannels(?string $whoCanCreateSharedChannels): self
    {
        $this->whoCanCreateSharedChannels = $whoCanCreateSharedChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanEditUserGroups(): ?string
    {
        return $this->whoCanEditUserGroups;
    }

    /**
     * @param string $whoCanEditUserGroups
     *
     * @return self
     */
    public function setWhoCanEditUserGroups(?string $whoCanEditUserGroups): self
    {
        $this->whoCanEditUserGroups = $whoCanEditUserGroups;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanKickChannels(): ?string
    {
        return $this->whoCanKickChannels;
    }

    /**
     * @param string $whoCanKickChannels
     *
     * @return self
     */
    public function setWhoCanKickChannels(?string $whoCanKickChannels): self
    {
        $this->whoCanKickChannels = $whoCanKickChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanKickGroups(): ?string
    {
        return $this->whoCanKickGroups;
    }

    /**
     * @param string $whoCanKickGroups
     *
     * @return self
     */
    public function setWhoCanKickGroups(?string $whoCanKickGroups): self
    {
        $this->whoCanKickGroups = $whoCanKickGroups;

        return $this;
    }

    /**
     * @return TeamPrefsPrefsWhoCanManageGuests
     */
    public function getWhoCanManageGuests(): ?TeamPrefsPrefsWhoCanManageGuests
    {
        return $this->whoCanManageGuests;
    }

    /**
     * @param TeamPrefsPrefsWhoCanManageGuests $whoCanManageGuests
     *
     * @return self
     */
    public function setWhoCanManageGuests(?TeamPrefsPrefsWhoCanManageGuests $whoCanManageGuests): self
    {
        $this->whoCanManageGuests = $whoCanManageGuests;

        return $this;
    }

    /**
     * @return TeamPrefsPrefsWhoCanManageIntegrations
     */
    public function getWhoCanManageIntegrations(): ?TeamPrefsPrefsWhoCanManageIntegrations
    {
        return $this->whoCanManageIntegrations;
    }

    /**
     * @param TeamPrefsPrefsWhoCanManageIntegrations $whoCanManageIntegrations
     *
     * @return self
     */
    public function setWhoCanManageIntegrations(?TeamPrefsPrefsWhoCanManageIntegrations $whoCanManageIntegrations): self
    {
        $this->whoCanManageIntegrations = $whoCanManageIntegrations;

        return $this;
    }

    /**
     * @return TeamPrefsPrefsWhoCanManageSharedChannels
     */
    public function getWhoCanManageSharedChannels(): ?TeamPrefsPrefsWhoCanManageSharedChannels
    {
        return $this->whoCanManageSharedChannels;
    }

    /**
     * @param TeamPrefsPrefsWhoCanManageSharedChannels $whoCanManageSharedChannels
     *
     * @return self
     */
    public function setWhoCanManageSharedChannels(?TeamPrefsPrefsWhoCanManageSharedChannels $whoCanManageSharedChannels): self
    {
        $this->whoCanManageSharedChannels = $whoCanManageSharedChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoCanPostGeneral(): ?string
    {
        return $this->whoCanPostGeneral;
    }

    /**
     * @param string $whoCanPostGeneral
     *
     * @return self
     */
    public function setWhoCanPostGeneral(?string $whoCanPostGeneral): self
    {
        $this->whoCanPostGeneral = $whoCanPostGeneral;

        return $this;
    }

    /**
     * @return TeamPrefsPrefsWhoCanPostInSharedChannels
     */
    public function getWhoCanPostInSharedChannels(): ?TeamPrefsPrefsWhoCanPostInSharedChannels
    {
        return $this->whoCanPostInSharedChannels;
    }

    /**
     * @param TeamPrefsPrefsWhoCanPostInSharedChannels $whoCanPostInSharedChannels
     *
     * @return self
     */
    public function setWhoCanPostInSharedChannels(?TeamPrefsPrefsWhoCanPostInSharedChannels $whoCanPostInSharedChannels): self
    {
        $this->whoCanPostInSharedChannels = $whoCanPostInSharedChannels;

        return $this;
    }

    /**
     * @return string
     */
    public function getWhoHasTeamVisibility(): ?string
    {
        return $this->whoHasTeamVisibility;
    }

    /**
     * @param string $whoHasTeamVisibility
     *
     * @return self
     */
    public function setWhoHasTeamVisibility(?string $whoHasTeamVisibility): self
    {
        $this->whoHasTeamVisibility = $whoHasTeamVisibility;

        return $this;
    }
}
