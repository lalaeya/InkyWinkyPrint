<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageCoversTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageCoversTable Test Case
 */
class PackageCoversTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageCoversTable
     */
    protected $PackageCovers;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.PackageCovers',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PackageCovers') ? [] : ['className' => PackageCoversTable::class];
        $this->PackageCovers = $this->getTableLocator()->get('PackageCovers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PackageCovers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PackageCoversTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
