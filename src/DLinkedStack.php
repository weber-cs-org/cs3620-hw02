<?php

/**
 * DLinkedStack.php
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
 * Dynamic Linked Stack Implementation
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class DLinkedStack implements StackInterface
{
    /**
     * Pointer to the first node in the chain.
     *
     * @var mixed
     */
    protected $headPtr;

    /**
     * Pointer to the last node in the chain, stack's top.
     *
     * @var mixed
     */
    protected $topPtr;

    /**
     * __construct initializes the class.
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     */
    public function __construct()
    {
        $this->headPtr = null;
        $this->topPtr = null;
    }

    /**
     * ToString returns a string representation of the class
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return string
     */
    public function __toString(): string
    {
        return '/App/DLinkedStack';
    }

    /**
     * GetHeadPtr() returns the node at the top of the stack.
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return mixed
     */
    public function getHeadPtr()
    {
        return $this->headPtr;
    }

    /**
     * GetTopPtr() returns the node at the top of the stack.
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return mixed
     */
    public function getTopPtr()
    {
        return $this->topPtr;
    }

    /**
     * IsEmpty determines if stack is empty
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        // TODO return True if the list is empty
    }

    /**
     * Push adds a node to the stack
     *
     * @param \App\Node $newNode node to add to the stack
     *
     * @return bool
     */
    public function push($newNode): bool
    {
        // TODO push a node on the Doubly Linked Stack
    }

    /**
     * Removes a node from the stack
     *
     * @return bool
     */
    public function pop(): bool
    {
        // TODO pop an item from the stack - Return TRUE if successful
    }

    /**
     * Returns the top of the stack
     *
     * @return \App\Node
     */
    public function peek(): \App\Node
    {
        // TODO return the node stored at the top of the stack (topPtr)
    }
}
