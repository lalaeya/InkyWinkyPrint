<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackageTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackageTypesTable Test Case
 */
class PackageTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackageTypesTable
     */
    protected $PackageTypes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.PackageTypes',
        'app.Packages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PackageTypes') ? [] : ['className' => PackageTypesTable::class];
        $this->PackageTypes = $this->getTableLocator()->get('PackageTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PackageTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PackageTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
