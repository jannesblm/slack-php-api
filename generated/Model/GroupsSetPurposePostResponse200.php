<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class GroupsSetPurposePostResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var string
     */
    protected $purpose;

    /**
     * @return bool
     */
    public function getOk(): ?bool
    {
        return $this->ok;
    }

    /**
     * @param bool $ok
     *
     * @return self
     */
    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    /**
     * @param string $purpose
     *
     * @return self
     */
    public function setPurpose(?string $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }
}
