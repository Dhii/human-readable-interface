<?php

namespace Dhii\Util\String;

/**
 * Something that is aware of a caption.
 *
 * @since [*next-version*]
 */
interface CaptionAwareInterface
{
    /**
     * Retrieves the caption related to this instance.
     *
     * A caption is a human-readable string that provides a brief description for some element.
     * It typically accompanies some illustration or screen fragment.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getCaption();
}
