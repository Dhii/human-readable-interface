<?php

namespace Dhii\Util\String;

/**
 * Something that is aware of a label.
 *
 * @since [*next-version*]
 */
interface LabelAwareInterface
{
    /**
     * Retrieves the label related to this instance.
     *
     * A label is a relatively short human readable string that can be used to identify or refer to this instance.
     *
     * @since [*next-version*]
     *
     * @return string|StringableInterface
     */
    public function getLabel();
}
