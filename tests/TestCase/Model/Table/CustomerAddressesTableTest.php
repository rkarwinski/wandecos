<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerAddressesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerAddressesTable Test Case
 */
class CustomerAddressesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerAddressesTable
     */
    protected $CustomerAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CustomerAddresses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CustomerAddresses') ? [] : ['className' => CustomerAddressesTable::class];
        $this->CustomerAddresses = $this->getTableLocator()->get('CustomerAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CustomerAddresses);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
