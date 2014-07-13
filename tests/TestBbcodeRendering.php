<?php

use Mockery as m;

class TestBbcodeRendering extends BbcodeTestCase {

    public function setUp()
    {
        parent::setUp();
        $this->bbcode = app('bbcode');
    }

    public function testBTag()
    {
        $compiled = $this->bbcode->compile('[b]Test[/b]');
        $this->assertEquals('<strong>Test</strong>', $compiled);
    }

    public function testITag()
    {
        $compiled = $this->bbcode->compile('[i]Test[/i]');
        $this->assertEquals('<em>Test</em>', $compiled);
    }

    public function testUTag()
    {
        $compiled = $this->bbcode->compile('[u]Test[/u]');
        $this->assertEquals('<u>Test</u>', $compiled);
    }

    public function testSTag()
    {
        $compiled = $this->bbcode->compile('[s]Test[/s]');
        $this->assertEquals('<strike>Test</strike>', $compiled);
    }

    public function testFontTag()
    {
        $compiled = $this->bbcode->compile('[font size="1" color="#333"]Test[/font]');
        $this->assertEquals('<font size="1" color="#333">Test</font>', $compiled);
    }

    public function testCenterTag()
    {
        $compiled = $this->bbcode->compile('[center]Test[/center]');
        $this->assertEquals('<div style="text-align:center;">Test</div>', $compiled);
    }

    public function testQuoteTag()
    {
        $compiled = $this->bbcode->compile('[quote]Test[/quote]');
        $this->assertEquals('<blockquote>Test</blockquote>', $compiled);
    }

    public function testUrlTag()
    {
        $compiled = $this->bbcode->compile('[url href="#" title="test"]Test[/url]');
        $this->assertEquals('<a href="#" title="test">Test</a>', $compiled);
    }

    public function testImgTag()
    {
        $compiled = $this->bbcode->compile('[img alt="test"]test.jpg[/img]');
        $this->assertEquals('<img src="test.jpg" alt="test" />', $compiled);
    }

    public function testCodeTag()
    {
        $compiled = $this->bbcode->compile('[code]Test[/code]');
        $this->assertEquals('<code>Test</code>', $compiled);
    }

    public function testYoutubeTag()
    {
        $compiled = $this->bbcode->compile('[youtube width="560" heght="315" frameborder="0" allowfullscreen="true"]900101012[/youtube]');
        $this->assertEquals('<iframe width="560" height="315" src="//www.youtube.com/embed/900101012" frameborder="0" allowfullscreen></iframe>', $compiled);
    }

}