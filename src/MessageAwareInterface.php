<?php

namespace Dhii\Util\String;

/**
 * Something that is aware of a message.
 *
 * @since [*next-version*]
 */
interface MessageAwareInterface
{
    /**
     * Retrieves the message related to this instance.
     *
     * A message is a human-readable string that provides information. It differs from a description in that it is more
     * intrinsic to the instance. Example: exceptions, notifications, etc.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getMessage();
}
