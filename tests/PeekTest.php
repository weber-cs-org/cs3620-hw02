<?php
/**
 * Unit-test
 *
 * PHP Version 7
 *
 * @category UnitTests
 * @package  Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App\Tests;

use App\DLinkedStack;
use App\Node;
use PHPUnit\Framework\MockObject\BadMethodCallException;
use PHPUnit\Framework\TestCase;

/**
 * Peek Test
 *
 * @category UnitTests
 * @package  App\Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class PeekTest extends TestCase
{
    /**
     * Harness is the object under test
     *
     * @var mixed $harness
     */
    protected $harness;

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function setUp()
    {
        $this->harness = new DLinkedStack();
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testPeekSuccess()
    {
        //arrange
        $n = new Node();
        $n->setItem(100);
        $this->harness->push($n);
        //act
        $actual = $this->harness->peek();
        //assert
        $this->assertEquals(100, $actual->getItem());
    }

    /**
     * Test
     *
     * @category UnitTests
     * @package  App\Tests
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     * @return   null
     */
    public function testPeekFail()
    {
        //arrange & act
        $actual = $this->harness->peek();
        //assert
        $this->assertEquals(null, $actual->getItem());
    }
}
