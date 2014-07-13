<?php

use Brouwers\Bbcodes\BbcodesServiceProvider;
use Mockery as m;

class TestServiceProvider extends BbcodeTestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
        m::close();
    }

    public function testProviders()
    {
        $app = m::mock('Illuminate\Foundation\Application');
        $provider = new BbcodesServiceProvider($app);

        $this->assertCount(1, $provider->provides());
        $this->assertContains('bbcode', $provider->provides());
    }
}