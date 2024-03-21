<?php

namespace Y2\Customer;

class ArrayOfUserDefinedBoolean implements \ArrayAccess, \Iterator, \Countable
{

    protected ?array $UserDefinedBoolean = null;

    public function __construct()
    {

    }

    public function getUserDefinedBoolean(): ?array
    {
        return $this->UserDefinedBoolean;
    }

    public function setUserDefinedBoolean(array $UserDefinedBoolean = null): static
    {
        $this->UserDefinedBoolean = $UserDefinedBoolean;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->UserDefinedBoolean[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->UserDefinedBoolean[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedBoolean[] = $value;
        } else {
            $this->UserDefinedBoolean[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->UserDefinedBoolean[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->UserDefinedBoolean);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->UserDefinedBoolean);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->UserDefinedBoolean);
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
        reset($this->UserDefinedBoolean);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->UserDefinedBoolean);
    }

}
