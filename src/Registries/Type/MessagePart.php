<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MessagePart implements RequestInterface
{
    /**
     * @var null | int
     */
    private ?int $partNo = null;

    /**
     * @var null | int
     */
    private ?int $partAmount = null;

    /**
     * @var null | string
     */
    private ?string $msgId = null;

    /**
     * @var null | string
     */
    private ?string $msg = null;

    /**
     * @var null | string
     */
    private ?string $msgName = null;

    /**
     * Constructor
     *
     * @param null | int $partNo
     * @param null | int $partAmount
     * @param null | string $msgId
     * @param null | string $msg
     * @param null | string $msgName
     */
    public function __construct(?int $partNo, ?int $partAmount, ?string $msgId, ?string $msg, ?string $msgName)
    {
        $this->partNo = $partNo;
        $this->partAmount = $partAmount;
        $this->msgId = $msgId;
        $this->msg = $msg;
        $this->msgName = $msgName;
    }

    /**
     * @return null | int
     */
    public function getPartNo() : ?int
    {
        return $this->partNo;
    }

    /**
     * @param null | int $partNo
     * @return $this
     */
    public function setPartNo(?int $partNo) : static
    {
        $this->partNo = $partNo;
        return $this;
    }

    /**
     * @return null | int
     */
    public function getPartAmount() : ?int
    {
        return $this->partAmount;
    }

    /**
     * @param null | int $partAmount
     * @return $this
     */
    public function setPartAmount(?int $partAmount) : static
    {
        $this->partAmount = $partAmount;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getMsgId() : ?string
    {
        return $this->msgId;
    }

    /**
     * @param null | string $msgId
     * @return $this
     */
    public function setMsgId(?string $msgId) : static
    {
        $this->msgId = $msgId;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getMsg() : ?string
    {
        return $this->msg;
    }

    /**
     * @param null | string $msg
     * @return $this
     */
    public function setMsg(?string $msg) : static
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getMsgName() : ?string
    {
        return $this->msgName;
    }

    /**
     * @param null | string $msgName
     * @return $this
     */
    public function setMsgName(?string $msgName) : static
    {
        $this->msgName = $msgName;
        return $this;
    }
}

