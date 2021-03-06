<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsDnd extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $dndEnabled;
    /**
     * @var int
     */
    protected $nextDndEndTs;
    /**
     * @var int
     */
    protected $nextDndStartTs;
    /**
     * @var bool
     */
    protected $snoozeEnabled;

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
     * @return int
     */
    public function getNextDndEndTs(): ?int
    {
        return $this->nextDndEndTs;
    }

    /**
     * @param int $nextDndEndTs
     *
     * @return self
     */
    public function setNextDndEndTs(?int $nextDndEndTs): self
    {
        $this->nextDndEndTs = $nextDndEndTs;

        return $this;
    }

    /**
     * @return int
     */
    public function getNextDndStartTs(): ?int
    {
        return $this->nextDndStartTs;
    }

    /**
     * @param int $nextDndStartTs
     *
     * @return self
     */
    public function setNextDndStartTs(?int $nextDndStartTs): self
    {
        $this->nextDndStartTs = $nextDndStartTs;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSnoozeEnabled(): ?bool
    {
        return $this->snoozeEnabled;
    }

    /**
     * @param bool $snoozeEnabled
     *
     * @return self
     */
    public function setSnoozeEnabled(?bool $snoozeEnabled): self
    {
        $this->snoozeEnabled = $snoozeEnabled;

        return $this;
    }
}
