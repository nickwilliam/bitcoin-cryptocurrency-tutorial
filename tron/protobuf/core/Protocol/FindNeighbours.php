<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Discover.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.FindNeighbours</code>
 */
class FindNeighbours extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.Endpoint from = 1;</code>
     */
    protected $from = null;
    /**
     * Generated from protobuf field <code>bytes targetId = 2;</code>
     */
    protected $targetId = '';
    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     */
    protected $timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Protocol\Endpoint $from
     *     @type string $targetId
     *     @type int|string $timestamp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Discover::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.protocol.Endpoint from = 1;</code>
     * @return \Protocol\Endpoint
     */
    public function getFrom()
    {
        return isset($this->from) ? $this->from : null;
    }

    public function hasFrom()
    {
        return isset($this->from);
    }

    public function clearFrom()
    {
        unset($this->from);
    }

    /**
     * Generated from protobuf field <code>.protocol.Endpoint from = 1;</code>
     * @param \Protocol\Endpoint $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Protocol\Endpoint::class);
        $this->from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes targetId = 2;</code>
     * @return string
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Generated from protobuf field <code>bytes targetId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetId($var)
    {
        GPBUtil::checkString($var, False);
        $this->targetId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

}

