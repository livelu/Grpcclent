<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: example.proto

namespace Example;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>example.GrpcResponse</code>
 */
class GrpcResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string msg = 1;</code>
     */
    private $msg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $msg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Example::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string msg = 1;</code>
     * @return string
     */
    public function getMsg()
    {
        return $this->msg;
    }
    
    /**
     * Generated from protobuf field <code>string msg = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->msg = $var;

        return $this;
    }

}

