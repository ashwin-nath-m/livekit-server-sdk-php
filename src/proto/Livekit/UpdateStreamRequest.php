<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_egress.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.UpdateStreamRequest</code>
 */
class UpdateStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string egress_id = 1;</code>
     */
    protected $egress_id = '';
    /**
     * Generated from protobuf field <code>repeated string add_output_urls = 2;</code>
     */
    private $add_output_urls;
    /**
     * Generated from protobuf field <code>repeated string remove_output_urls = 3;</code>
     */
    private $remove_output_urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $egress_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $add_output_urls
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $remove_output_urls
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitEgress::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string egress_id = 1;</code>
     * @return string
     */
    public function getEgressId()
    {
        return $this->egress_id;
    }

    /**
     * Generated from protobuf field <code>string egress_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEgressId($var)
    {
        GPBUtil::checkString($var, True);
        $this->egress_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string add_output_urls = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddOutputUrls()
    {
        return $this->add_output_urls;
    }

    /**
     * Generated from protobuf field <code>repeated string add_output_urls = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddOutputUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->add_output_urls = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string remove_output_urls = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRemoveOutputUrls()
    {
        return $this->remove_output_urls;
    }

    /**
     * Generated from protobuf field <code>repeated string remove_output_urls = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRemoveOutputUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->remove_output_urls = $arr;

        return $this;
    }

}

