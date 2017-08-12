<?php

namespace Dhii\Util\String;

/**
 * Something that is aware of a description.
 *
 * @since [*next-version*]
 */
interface DescriptionAwareInterface
{
    /**
     * Retrieves the description related to this instance.
     *
     * A description is a human readable string that provides verbose explanation, additional information,
     * instructions, and/or context.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getDescription();
}
