<?php

use COREPOS\pos\lib\FormLib;

class Test extends PHPUnit_Framework_TestCase
{
    public function testPlugin()
    {
        $obj = new PromptForTare();
    }

    public function testPage()
    {
        $page = new TarePromptInputPage();
        $this->assertEquals(false, $page->preprocess());
        ob_start();
        $page->body_content();
        $this->assertInternalType('string', ob_get_clean());
    }
}

