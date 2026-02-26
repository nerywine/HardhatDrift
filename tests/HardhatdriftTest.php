<?php
/**
 * Tests for HardhatDrift
 */

use PHPUnit\Framework\TestCase;
use Hardhatdrift\Hardhatdrift;

class HardhatdriftTest extends TestCase {
    private Hardhatdrift $instance;

    protected function setUp(): void {
        $this->instance = new Hardhatdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hardhatdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
