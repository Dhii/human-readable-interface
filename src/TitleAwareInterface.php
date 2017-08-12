<?php

namespace Dhii\Util\String;

/**
 * Something that is aware of a title.
 *
 * @since [*next-version*]
 */
interface TitleAwareInterface
{
    /**
     * Retrieves the title related to this instance.
     *
     * A title is a human-readable string that serves as a heading for some content.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getTitle();
}
