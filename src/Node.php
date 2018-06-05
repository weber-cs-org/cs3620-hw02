<?php

/**
 * Node.php
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
 * Node data type
 *
 * @category Source
 * @package  App
 * @author   Don Stringham <donstringham@weber.edu>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://weber.edu
 */
class Node
{
    /**
     * Data
     *
     * @var mixed
     */
    private $_data;

    /**
     * Previous node
     *
     * @var \App\Node
     */
    private $_prev;

    /**
     * Next node
     *
     * @var \App\Node
     */
    private $_next;

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
         return '/App/Node';
    }

    /**
     * SetItem set data to the current node
     *
     * @param mixed $newData data to set to the node
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return void
     */
    public function setItem($newData)
    {
        $this->_data = $newData;
    }

    /**
     * SetPrev set the previous node
     *
     * @param \App\Node $prevNode sets the previous node
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return void
     */
    public function setPrev($prevNode)
    {
        $this->_prev = $prevNode;
    }

    /**
     * SetNext set the next node
     *
     * @param \App\Node $nextNode sets the next node
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return void
     */
    public function setNext($nextNode)
    {
        $this->_next = $nextNode;
    }

    /**
     * GetItem gets data to the current node
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return mixed
     */
    public function getItem(): mixed
    {
        return $this->_data;
    }

    /**
     * GetPrev gets the previous node
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return \App\Node
     */
    public function getPrev(): \App\Node
    {
        return $this->_prev;
    }

    /**
     * GetNext gets the next node
     *
     * @category Source
     * @package  App
     * @author   Don Stringham <donstringham@weber.edu>
     * @license  MIT https://opensource.org/licenses/MIT
     * @link     https://weber.edu
     *
     * @return \App\Node
     */
    public function getNext()
    {
        return $this->_next;
    }
}
