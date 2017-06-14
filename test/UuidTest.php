<?php
namespace Zend\Uuid\Test;

use PHPUnit\Framework\TestCase;
use Zend\Uuid\Uuid;

/**
 * Uuid test case.
 */
class UuidTest extends TestCase
{

    /**
     *
     * @var Uuid
     */
    private $uuid;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        // TODO Auto-generated UuidTest::setUp()

        $this->uuid = new Uuid(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated UuidTest::tearDown()
        $this->uuid = null;

        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }
}
