<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\RegexSemver\RegexSemver;

class PatternTest extends TestCase
{
    /**
     * @test
     *
     * @see RegexSemver::pattern
     */
    public function pattern(): void
    {
        self::assertEquals(
            '/^(?P<major>0|[1-9]\d*)\.(?P<minor>0|[1-9]\d*)\.(?P<patch>0|[1-9]\d*)(?:-(?P<prerelease>(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\+(?P<buildmetadata>[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*))?$/',
            RegexSemver::pattern
        );
    }
}