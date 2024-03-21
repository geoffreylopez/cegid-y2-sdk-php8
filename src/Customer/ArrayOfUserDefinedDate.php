<?php

namespace Y2\Customer;

class ArrayOfUserDefinedDate implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $UserDefinedDate = null;
    
    public function __construct()
    {

    }

    public function getUserDefinedDate(): ?array
    {
        return $this->UserDefinedDate;
    }

    public function setUserDefinedDate(array $UserDefinedDate = null): static
    {
        $this->UserDefinedDate = $UserDefinedDate;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists($offset): bool
    {
        return isset($this->UserDefinedDate[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->UserDefinedDate[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedDate[] = $value;
        } else {
            $this->UserDefinedDate[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->UserDefinedDate[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->UserDefinedDate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->UserDefinedDate);
    }

    /**
     * Iterator implementation
     */
    public function key(): mixed
    {
        return key($this->UserDefinedDate);
    }

    /**
     * Iterator implementation
     */
    public function valid(): bool
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     */
    public function rewind(): void
    {
        reset($this->UserDefinedDate);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->UserDefinedDate);
    }

}
