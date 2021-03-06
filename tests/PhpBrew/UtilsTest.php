<?php

namespace PhpBrew\Tests;

use PhpBrew\Utils;
use PHPUnit\Framework\TestCase;

/**
 * @small
 */
class UtilsTest extends TestCase
{
    public function test()
    {
        $this->assertInternalType('boolean', Utils::support64bit());
    }

    public function testLookupPrefix()
    {
        $this->assertNotEmpty(Utils::getLookupPrefixes());
    }

    public function testFindIcuPkgData()
    {
        $this->markTestSkipped('icu/pkgdata.inc is not found on Ubuntu Linux');
        $this->assertNotNull(Utils::findLibPrefix('icu/pkgdata.inc', 'icu/Makefile.inc'));
    }

    public function testPrefix()
    {
        $this->assertNotNull(Utils::findIncludePrefix('openssl/opensslv.h'));
    }

    public function testFindbin()
    {
        $this->assertNotNull(Utils::findBin('ls'));
    }
}
