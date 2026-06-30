<?php
/**
 * Tests for LedgerHelix
 */

use PHPUnit\Framework\TestCase;
use Ledgerhelix\Ledgerhelix;

class LedgerhelixTest extends TestCase {
    private Ledgerhelix $instance;

    protected function setUp(): void {
        $this->instance = new Ledgerhelix(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ledgerhelix::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
