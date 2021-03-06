<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol\TXInput;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.TXInput.raw</code>
 */
class raw extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes txID = 1;</code>
     */
    protected $txID = '';
    /**
     * Generated from protobuf field <code>int64 vout = 2;</code>
     */
    protected $vout = 0;
    /**
     * Generated from protobuf field <code>bytes pubKey = 3;</code>
     */
    protected $pubKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $txID
     *     @type int|string $vout
     *     @type string $pubKey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes txID = 1;</code>
     * @return string
     */
    public function getTxID()
    {
        return $this->txID;
    }

    /**
     * Generated from protobuf field <code>bytes txID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTxID($var)
    {
        GPBUtil::checkString($var, False);
        $this->txID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 vout = 2;</code>
     * @return int|string
     */
    public function getVout()
    {
        return $this->vout;
    }

    /**
     * Generated from protobuf field <code>int64 vout = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVout($var)
    {
        GPBUtil::checkInt64($var);
        $this->vout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes pubKey = 3;</code>
     * @return string
     */
    public function getPubKey()
    {
        return $this->pubKey;
    }

    /**
     * Generated from protobuf field <code>bytes pubKey = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPubKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->pubKey = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(raw::class, \Protocol\TXInput_raw::class);

