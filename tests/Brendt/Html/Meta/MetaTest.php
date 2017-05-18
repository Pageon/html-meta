<?php

namespace Brendt\Html\Meta;

use PHPUnit\Framework\TestCase;

class MetaTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_be_constructed() {
        $meta = Meta::create();

        $this->assertNotNull($meta);
    }

    public function test_social_prefixes_title() {
        $meta = Meta::create();
        $meta->title('test');
        $html = $meta->render();

        $this->assertContains('<meta property="og:title', $html);
        $this->assertContains('<meta property="twitter:title', $html);
        $this->assertContains('<meta name="title', $html);
    }

    public function test_social_prefixes_description() {
        $meta = Meta::create();
        $meta->description('test');
        $html = $meta->render();

        $this->assertContains('<meta property="og:description', $html);
        $this->assertContains('<meta property="twitter:description', $html);
        $this->assertContains('<meta name="description', $html);
    }

    public function test_social_prefixes_image() {
        $meta = Meta::create();
        $meta->image('test');
        $html = $meta->render();

        $this->assertContains('<meta property="og:image', $html);
        $this->assertContains('<meta property="twitter:image', $html);
        $this->assertContains('<meta name="image', $html);
    }
}
