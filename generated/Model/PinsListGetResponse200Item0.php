<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class PinsListGetResponse200Item0 extends \ArrayObject
{
    /**
     * @var PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|PinsListGetResponse200Item0ItemsItem2[]
     */
    protected $items;
    /**
     * @var bool
     */
    protected $ok;

    /**
     * @return PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|PinsListGetResponse200Item0ItemsItem2[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param PinsListGetResponse200Item0ItemsItem0[]|PinsListGetResponse200Item0ItemsItem1[]|PinsListGetResponse200Item0ItemsItem2[] $items
     *
     * @return self
     */
    public function setItems($items): self
    {
        $this->items = $items;

        return $this;
    }

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
}
