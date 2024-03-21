<?php

namespace Y2\Customer;

class ArrayOfUserField implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $UserField = null;

    public function __construct()
    {

    }

    public function getUserField(): ?array
    {
        return $this->UserField;
    }

    public function setUserField(array $UserField = null): static
    {
        $this->UserField = $UserField;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->UserField[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->UserField[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->UserField[] = $value;
        } else {
            $this->UserField[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->UserField[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->UserField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->UserField);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->UserField);
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
        reset($this->UserField);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->UserField);
    }

}
