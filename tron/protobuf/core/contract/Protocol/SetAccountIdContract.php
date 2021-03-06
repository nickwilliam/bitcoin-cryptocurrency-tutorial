<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/account_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set account id if the account has no id. Account id is unique and case insensitive.
 *
 * Generated from protobuf message <code>protocol.SetAccountIdContract</code>
 */
class SetAccountIdContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     */
    protected $owner_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *     @type string $owner_address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Contract\AccountContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Generated from protobuf field <code>bytes account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, False);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

}

