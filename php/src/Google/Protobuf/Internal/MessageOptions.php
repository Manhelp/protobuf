<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>google.protobuf.MessageOptions</code>
 */
class MessageOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Set true to use the old proto1 MessageSet wire format for extensions.
     * This is provided for backwards-compatibility with the MessageSet wire
     * format.  You should not use this for any other reason:  It's less
     * efficient, has fewer features, and is more complicated.
     * The message must be defined exactly as follows:
     *   message Foo {
     *     option message_set_wire_format = true;
     *     extensions 4 to max;
     *   }
     * Note that the message cannot have any defined fields; MessageSets only
     * have extensions.
     * All extensions of your type must be singular messages; e.g. they cannot
     * be int32s, enums, or repeated messages.
     * Because this is an option, the above two restrictions are not enforced by
     * the protocol compiler.
     *
     * Generated from protobuf field <code>optional bool message_set_wire_format = 1 [default = false];</code>
     */
    private $message_set_wire_format = false;
    private $has_message_set_wire_format = false;
    /**
     * Disables the generation of the standard "descriptor()" accessor, which can
     * conflict with a field of the same name.  This is meant to make migration
     * from proto1 easier; new code should avoid fields named "descriptor".
     *
     * Generated from protobuf field <code>optional bool no_standard_descriptor_accessor = 2 [default = false];</code>
     */
    private $no_standard_descriptor_accessor = false;
    private $has_no_standard_descriptor_accessor = false;
    /**
     * Is this message deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the message, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating messages.
     *
     * Generated from protobuf field <code>optional bool deprecated = 3 [default = false];</code>
     */
    private $deprecated = false;
    private $has_deprecated = false;
    /**
     * Whether the message is an automatically generated map entry type for the
     * maps field.
     * For maps fields:
     *     map<KeyType, ValueType> map_field = 1;
     * The parsed descriptor looks like:
     *     message MapFieldEntry {
     *         option map_entry = true;
     *         optional KeyType key = 1;
     *         optional ValueType value = 2;
     *     }
     *     repeated MapFieldEntry map_field = 1;
     * Implementations may choose not to generate the map_entry=true message, but
     * use a native map in the target language to hold the keys and values.
     * The reflection APIs in such implementations still need to work as
     * if the field is a repeated message field.
     * NOTE: Do not set the option in .proto files. Always use the maps syntax
     * instead. The option should only be implicitly set by the proto compiler
     * parser.
     *
     * Generated from protobuf field <code>optional bool map_entry = 7;</code>
     */
    private $map_entry = false;
    private $has_map_entry = false;
    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    private $uninterpreted_option;
    private $has_uninterpreted_option = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $message_set_wire_format
     *           Set true to use the old proto1 MessageSet wire format for extensions.
     *           This is provided for backwards-compatibility with the MessageSet wire
     *           format.  You should not use this for any other reason:  It's less
     *           efficient, has fewer features, and is more complicated.
     *           The message must be defined exactly as follows:
     *             message Foo {
     *               option message_set_wire_format = true;
     *               extensions 4 to max;
     *             }
     *           Note that the message cannot have any defined fields; MessageSets only
     *           have extensions.
     *           All extensions of your type must be singular messages; e.g. they cannot
     *           be int32s, enums, or repeated messages.
     *           Because this is an option, the above two restrictions are not enforced by
     *           the protocol compiler.
     *     @type bool $no_standard_descriptor_accessor
     *           Disables the generation of the standard "descriptor()" accessor, which can
     *           conflict with a field of the same name.  This is meant to make migration
     *           from proto1 easier; new code should avoid fields named "descriptor".
     *     @type bool $deprecated
     *           Is this message deprecated?
     *           Depending on the target platform, this can emit Deprecated annotations
     *           for the message, or it will be completely ignored; in the very least,
     *           this is a formalization for deprecating messages.
     *     @type bool $map_entry
     *           Whether the message is an automatically generated map entry type for the
     *           maps field.
     *           For maps fields:
     *               map<KeyType, ValueType> map_field = 1;
     *           The parsed descriptor looks like:
     *               message MapFieldEntry {
     *                   option map_entry = true;
     *                   optional KeyType key = 1;
     *                   optional ValueType value = 2;
     *               }
     *               repeated MapFieldEntry map_field = 1;
     *           Implementations may choose not to generate the map_entry=true message, but
     *           use a native map in the target language to hold the keys and values.
     *           The reflection APIs in such implementations still need to work as
     *           if the field is a repeated message field.
     *           NOTE: Do not set the option in .proto files. Always use the maps syntax
     *           instead. The option should only be implicitly set by the proto compiler
     *           parser.
     *     @type \Google\Protobuf\Internal\UninterpretedOption[]|\Google\Protobuf\Internal\RepeatedField $uninterpreted_option
     *           The parser stores options it doesn't recognize here. See above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }

    /**
     * Set true to use the old proto1 MessageSet wire format for extensions.
     * This is provided for backwards-compatibility with the MessageSet wire
     * format.  You should not use this for any other reason:  It's less
     * efficient, has fewer features, and is more complicated.
     * The message must be defined exactly as follows:
     *   message Foo {
     *     option message_set_wire_format = true;
     *     extensions 4 to max;
     *   }
     * Note that the message cannot have any defined fields; MessageSets only
     * have extensions.
     * All extensions of your type must be singular messages; e.g. they cannot
     * be int32s, enums, or repeated messages.
     * Because this is an option, the above two restrictions are not enforced by
     * the protocol compiler.
     *
     * Generated from protobuf field <code>optional bool message_set_wire_format = 1 [default = false];</code>
     * @return bool
     */
    public function getMessageSetWireFormat()
    {
        return $this->message_set_wire_format;
    }

    /**
     * Set true to use the old proto1 MessageSet wire format for extensions.
     * This is provided for backwards-compatibility with the MessageSet wire
     * format.  You should not use this for any other reason:  It's less
     * efficient, has fewer features, and is more complicated.
     * The message must be defined exactly as follows:
     *   message Foo {
     *     option message_set_wire_format = true;
     *     extensions 4 to max;
     *   }
     * Note that the message cannot have any defined fields; MessageSets only
     * have extensions.
     * All extensions of your type must be singular messages; e.g. they cannot
     * be int32s, enums, or repeated messages.
     * Because this is an option, the above two restrictions are not enforced by
     * the protocol compiler.
     *
     * Generated from protobuf field <code>optional bool message_set_wire_format = 1 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setMessageSetWireFormat($var)
    {
        GPBUtil::checkBool($var);
        $this->message_set_wire_format = $var;
        $this->has_message_set_wire_format = true;

        return $this;
    }

    public function hasMessageSetWireFormat()
    {
        return $this->has_message_set_wire_format;
    }

    /**
     * Disables the generation of the standard "descriptor()" accessor, which can
     * conflict with a field of the same name.  This is meant to make migration
     * from proto1 easier; new code should avoid fields named "descriptor".
     *
     * Generated from protobuf field <code>optional bool no_standard_descriptor_accessor = 2 [default = false];</code>
     * @return bool
     */
    public function getNoStandardDescriptorAccessor()
    {
        return $this->no_standard_descriptor_accessor;
    }

    /**
     * Disables the generation of the standard "descriptor()" accessor, which can
     * conflict with a field of the same name.  This is meant to make migration
     * from proto1 easier; new code should avoid fields named "descriptor".
     *
     * Generated from protobuf field <code>optional bool no_standard_descriptor_accessor = 2 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setNoStandardDescriptorAccessor($var)
    {
        GPBUtil::checkBool($var);
        $this->no_standard_descriptor_accessor = $var;
        $this->has_no_standard_descriptor_accessor = true;

        return $this;
    }

    public function hasNoStandardDescriptorAccessor()
    {
        return $this->has_no_standard_descriptor_accessor;
    }

    /**
     * Is this message deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the message, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating messages.
     *
     * Generated from protobuf field <code>optional bool deprecated = 3 [default = false];</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    /**
     * Is this message deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the message, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating messages.
     *
     * Generated from protobuf field <code>optional bool deprecated = 3 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;
        $this->has_deprecated = true;

        return $this;
    }

    public function hasDeprecated()
    {
        return $this->has_deprecated;
    }

    /**
     * Whether the message is an automatically generated map entry type for the
     * maps field.
     * For maps fields:
     *     map<KeyType, ValueType> map_field = 1;
     * The parsed descriptor looks like:
     *     message MapFieldEntry {
     *         option map_entry = true;
     *         optional KeyType key = 1;
     *         optional ValueType value = 2;
     *     }
     *     repeated MapFieldEntry map_field = 1;
     * Implementations may choose not to generate the map_entry=true message, but
     * use a native map in the target language to hold the keys and values.
     * The reflection APIs in such implementations still need to work as
     * if the field is a repeated message field.
     * NOTE: Do not set the option in .proto files. Always use the maps syntax
     * instead. The option should only be implicitly set by the proto compiler
     * parser.
     *
     * Generated from protobuf field <code>optional bool map_entry = 7;</code>
     * @return bool
     */
    public function getMapEntry()
    {
        return $this->map_entry;
    }

    /**
     * Whether the message is an automatically generated map entry type for the
     * maps field.
     * For maps fields:
     *     map<KeyType, ValueType> map_field = 1;
     * The parsed descriptor looks like:
     *     message MapFieldEntry {
     *         option map_entry = true;
     *         optional KeyType key = 1;
     *         optional ValueType value = 2;
     *     }
     *     repeated MapFieldEntry map_field = 1;
     * Implementations may choose not to generate the map_entry=true message, but
     * use a native map in the target language to hold the keys and values.
     * The reflection APIs in such implementations still need to work as
     * if the field is a repeated message field.
     * NOTE: Do not set the option in .proto files. Always use the maps syntax
     * instead. The option should only be implicitly set by the proto compiler
     * parser.
     *
     * Generated from protobuf field <code>optional bool map_entry = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setMapEntry($var)
    {
        GPBUtil::checkBool($var);
        $this->map_entry = $var;
        $this->has_map_entry = true;

        return $this;
    }

    public function hasMapEntry()
    {
        return $this->has_map_entry;
    }

    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUninterpretedOption()
    {
        return $this->uninterpreted_option;
    }

    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @param \Google\Protobuf\Internal\UninterpretedOption[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUninterpretedOption($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\UninterpretedOption::class);
        $this->uninterpreted_option = $arr;
        $this->has_uninterpreted_option = true;

        return $this;
    }

    public function hasUninterpretedOption()
    {
        return $this->has_uninterpreted_option;
    }

}

