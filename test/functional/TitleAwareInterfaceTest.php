<?php

namespace Dhii\Util\String\FuncTest;

use Dhii\Util\String\TitleAwareInterface;
use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Util\String\TitleAwareInterface}.
 *
 * @since [*next-version*]
 */
class TitleAwareInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Util\String\TitleAwareInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TitleAwareInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
                     ->getTitle();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject,
            'Subject is not a valid instance'
        );
    }
}
