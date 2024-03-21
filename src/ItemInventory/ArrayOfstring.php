<?php

namespace Y2\ItemInventory;

class ArrayOfstring implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $string = null;

    public function __construct()
    {

    }

    public function getString(): ?array
    {
        return $this->string;
    }

    public function setString(array $string = null): static
    {
        $this->string = $string;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->string[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->string[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->string[] = $value;
        } else {
            $this->string[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->string[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->string);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->string);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->string);
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
        reset($this->string);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->string);
    }

}
