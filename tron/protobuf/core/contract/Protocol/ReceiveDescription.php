<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/shield_contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.ReceiveDescription</code>
 */
class ReceiveDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes value_commitment = 1;</code>
     */
    protected $value_commitment = '';
    /**
     * Generated from protobuf field <code>bytes note_commitment = 2;</code>
     */
    protected $note_commitment = '';
    /**
     * for Encryption
     *
     * Generated from protobuf field <code>bytes epk = 3;</code>
     */
    protected $epk = '';
    /**
     * Encryption for incoming, decrypt it with ivk
     *
     * Generated from protobuf field <code>bytes c_enc = 4;</code>
     */
    protected $c_enc = '';
    /**
     * Encryption for audit, decrypt it with ovk
     *
     * Generated from protobuf field <code>bytes c_out = 5;</code>
     */
    protected $c_out = '';
    /**
     * Generated from protobuf field <code>bytes zkproof = 6;</code>
     */
    protected $zkproof = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value_commitment
     *     @type string $note_commitment
     *     @type string $epk
     *           for Encryption
     *     @type string $c_enc
     *           Encryption for incoming, decrypt it with ivk
     *     @type string $c_out
     *           Encryption for audit, decrypt it with ovk
     *     @type string $zkproof
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\Contract\ShieldContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes value_commitment = 1;</code>
     * @return string
     */
    public function getValueCommitment()
    {
        return $this->value_commitment;
    }

    /**
     * Generated from protobuf field <code>bytes value_commitment = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValueCommitment($var)
    {
        GPBUtil::checkString($var, False);
        $this->value_commitment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes note_commitment = 2;</code>
     * @return string
     */
    public function getNoteCommitment()
    {
        return $this->note_commitment;
    }

    /**
     * Generated from protobuf field <code>bytes note_commitment = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNoteCommitment($var)
    {
        GPBUtil::checkString($var, False);
        $this->note_commitment = $var;

        return $this;
    }

    /**
     * for Encryption
     *
     * Generated from protobuf field <code>bytes epk = 3;</code>
     * @return string
     */
    public function getEpk()
    {
        return $this->epk;
    }

    /**
     * for Encryption
     *
     * Generated from protobuf field <code>bytes epk = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEpk($var)
    {
        GPBUtil::checkString($var, False);
        $this->epk = $var;

        return $this;
    }

    /**
     * Encryption for incoming, decrypt it with ivk
     *
     * Generated from protobuf field <code>bytes c_enc = 4;</code>
     * @return string
     */
    public function getCEnc()
    {
        return $this->c_enc;
    }

    /**
     * Encryption for incoming, decrypt it with ivk
     *
     * Generated from protobuf field <code>bytes c_enc = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCEnc($var)
    {
        GPBUtil::checkString($var, False);
        $this->c_enc = $var;

        return $this;
    }

    /**
     * Encryption for audit, decrypt it with ovk
     *
     * Generated from protobuf field <code>bytes c_out = 5;</code>
     * @return string
     */
    public function getCOut()
    {
        return $this->c_out;
    }

    /**
     * Encryption for audit, decrypt it with ovk
     *
     * Generated from protobuf field <code>bytes c_out = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCOut($var)
    {
        GPBUtil::checkString($var, False);
        $this->c_out = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes zkproof = 6;</code>
     * @return string
     */
    public function getZkproof()
    {
        return $this->zkproof;
    }

    /**
     * Generated from protobuf field <code>bytes zkproof = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setZkproof($var)
    {
        GPBUtil::checkString($var, False);
        $this->zkproof = $var;

        return $this;
    }

}

