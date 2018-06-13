<?php
/**
 * StackInterface.php
 *
 * PHP Version 7
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
declare(strict_types=1);
namespace App;

/**
 * StackeInterface abstract data type
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
interface StackInterface
{
    /**
     * IsEmpty determines if stack is empty
     *
     * @return bool
     */
    public function isEmpty(): bool;

    /**
     * Push adds a node to the stack
     *
     * @param \App\Node $newNode node to add to the stack
     *
     * @return bool
     */
    public function push($newNode): bool;

    /**
     * Removes a node from the stack
     *
     * @return bool
     */
    public function pop(): bool;

    /**
     * Returns the top of the stack
     *
     * @return \App\Node
     */
    public function peek(): \App\Node;
}
