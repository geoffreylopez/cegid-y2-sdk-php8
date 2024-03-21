<?php

namespace Y2\Customer;

class ArrayOfUserDefinedValue implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $UserDefinedValue = null;

    public function __construct()
    {

    }

    public function getUserDefinedValue(): ?array
    {
        return $this->UserDefinedValue;
    }

    public function setUserDefinedValue(array $UserDefinedValue = null): static
    {
        $this->UserDefinedValue = $UserDefinedValue;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->UserDefinedValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->UserDefinedValue[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedValue[] = $value;
        } else {
            $this->UserDefinedValue[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->UserDefinedValue[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->UserDefinedValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->UserDefinedValue);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->UserDefinedValue);
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
        reset($this->UserDefinedValue);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->UserDefinedValue);
    }

}
