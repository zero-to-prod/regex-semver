<?php

namespace Zerotoprod\RegexSemver;

/**
 * A regular expression to check a SemVer string.
 *
 * @link https://github.com/zero-to-prod/regex-semver
 */
class RegexSemver
{
    /**
     * A regular expression to check a SemVer string.
     *
     * @link https://semver.org/#is-there-a-suggested-regular-expression-regex-to-check-a-semver-string
     * @link https://github.com/zero-to-prod/regex-semver
     */
    public const pattern = '/^(?P<major>0|[1-9]\d*)\.(?P<minor>0|[1-9]\d*)\.(?P<patch>0|[1-9]\d*)(?:-(?P<prerelease>(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\+(?P<buildmetadata>[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*))?$/';
}