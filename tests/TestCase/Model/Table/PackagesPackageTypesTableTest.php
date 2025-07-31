<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackagesPackageTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackagesPackageTypesTable Test Case
 */
class PackagesPackageTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackagesPackageTypesTable
     */
    protected $PackagesPackageTypes;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.PackagesPackageTypes',
        'app.Packages',
        'app.PackageTypes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PackagesPackageTypes') ? [] : ['className' => PackagesPackageTypesTable::class];
        $this->PackagesPackageTypes = $this->getTableLocator()->get('PackagesPackageTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PackagesPackageTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PackagesPackageTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\PackagesPackageTypesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
