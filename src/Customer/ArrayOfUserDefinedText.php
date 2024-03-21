<?php

namespace Y2\Customer;

class ArrayOfUserDefinedText implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $UserDefinedText = null;

    public function __construct()
    {

    }

    public function getUserDefinedText(): ?array
    {
        return $this->UserDefinedText;
    }

    public function setUserDefinedText(array $UserDefinedText = null): static
    {
        $this->UserDefinedText = $UserDefinedText;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists($offset): bool
    {
        return isset($this->UserDefinedText[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->UserDefinedText[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->UserDefinedText[] = $value;
        } else {
            $this->UserDefinedText[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->UserDefinedText[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->UserDefinedText);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->UserDefinedText);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->UserDefinedText);
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
        reset($this->UserDefinedText);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->UserDefinedText);
    }

}
