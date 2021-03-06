<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/contract/common.proto

namespace Protocol;

use UnexpectedValueException;

/**
 * Protobuf type <code>protocol.ResourceCode</code>
 */
class ResourceCode
{
    /**
     * Generated from protobuf enum <code>BANDWIDTH = 0;</code>
     */
    const BANDWIDTH = 0;
    /**
     * Generated from protobuf enum <code>ENERGY = 1;</code>
     */
    const ENERGY = 1;

    private static $valueToName = [
        self::BANDWIDTH => 'BANDWIDTH',
        self::ENERGY => 'ENERGY',
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

