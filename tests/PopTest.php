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
use PHPUnit\Framework\TestCase;

/**
 * Pop Test
 *
 * @category UnitTests
 * @package  App\Tests
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class PopTest extends TestCase
{
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
    public function testPopSuccess()
    {
        // arrange
        $n = new Node();
        $n->setItem(100);
        $this->harness->push($n);
        // act
        $actual = $this->harness->pop();
        // assert
        $this->assertTrue($actual);
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
    public function testPopFail()
    {
        // arrange
        $n = null;
        // act
        $actual = $this->harness->pop();
        // assert
        $this->assertFalse($actual);
    }
}
