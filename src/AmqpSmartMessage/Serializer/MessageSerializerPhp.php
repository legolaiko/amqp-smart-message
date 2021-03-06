<?php
namespace AmqpSmartMessage\Serializer;

use AmqpSmartMessage\MessageSerializerInterface;

class MessageSerializerPhp implements MessageSerializerInterface
{
    /**
     * Serializes message to string
     *
     * @param string $messageName message name
     * @param mixed $arguments message arguments
     * @param array $meta message metadata if required
     *
     * @return string
     */
    public function serialize($messageName, $arguments, array $meta = array())
    {
        return serialize([ $messageName, $arguments, $meta ]);
    }

    /**
     * Unserializes message string to array, which contains message name and its arguments
     *
     * @param string $messageSerialized Serialized message
     *
     * @return array [ name : string, args : mixed, meta: array]
     */
    public function unserialize($messageSerialized)
    {
        return unserialize($messageSerialized);
    }
}
