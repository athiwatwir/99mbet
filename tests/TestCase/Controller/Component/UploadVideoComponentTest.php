<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\UploadVideoComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\UploadVideoComponent Test Case
 */
class UploadVideoComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\UploadVideoComponent
     */
    public $UploadVideo;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->UploadVideo = new UploadVideoComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UploadVideo);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
