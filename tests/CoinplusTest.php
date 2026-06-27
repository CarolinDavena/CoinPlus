<?php
/**
 * Tests for CoinPlus
 */

use PHPUnit\Framework\TestCase;
use Coinplus\Coinplus;

class CoinplusTest extends TestCase {
    private Coinplus $instance;

    protected function setUp(): void {
        $this->instance = new Coinplus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinplus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
