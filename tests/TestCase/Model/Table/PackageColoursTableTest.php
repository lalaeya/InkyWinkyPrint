<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageColoursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageColoursTable Test Case
 */
class PackageColoursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageColoursTable
     */
    protected $PackageColours;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.PackageColours',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PackageColours') ? [] : ['className' => PackageColoursTable::class];
        $this->PackageColours = $this->getTableLocator()->get('PackageColours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PackageColours);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PackageColoursTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
