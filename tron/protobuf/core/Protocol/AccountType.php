<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use UnexpectedValueException;

/**
 * Protobuf type <code>protocol.AccountType</code>
 */
class AccountType
{
    /**
     * Generated from protobuf enum <code>Normal = 0;</code>
     */
    const Normal = 0;
    /**
     * Generated from protobuf enum <code>AssetIssue = 1;</code>
     */
    const AssetIssue = 1;
    /**
     * Generated from protobuf enum <code>Contract = 2;</code>
     */
    const Contract = 2;

    private static $valueToName = [
        self::Normal => 'Normal',
        self::AssetIssue => 'AssetIssue',
        self::Contract => 'Contract',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

