<?php

use Orchestra\Testbench\TestCase as TestBenchTestCase;

class BbcodeTestCase extends TestBenchTestCase
{

    public function testBbcodeClass()
    {
        $bbcode = app('bbcode');
        $this->assertInstanceOf('Brouwers\Bbcodes\Bbcode', $bbcode);
    }

    protected function getPackageProviders()
    {
        return array('Brouwers\Bbcodes\BbcodesServiceProvider');
    }

    protected function getPackagePath()
    {
        return realpath(implode(DIRECTORY_SEPARATOR, array(
            __DIR__,
            '..',
            'src',
            'Brouwers',
            'Bbcodes'
        )));
    }
}