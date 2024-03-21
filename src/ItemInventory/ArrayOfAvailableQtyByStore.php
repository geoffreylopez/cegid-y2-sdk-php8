<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableQtyByStore implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $AvailableQtyByStore = null;

    public function __construct()
    {

    }

    public function getAvailableQtyByStore(): ?array
    {
        return $this->AvailableQtyByStore;
    }

    public function setAvailableQtyByStore(array $AvailableQtyByStore = null): static
    {
        $this->AvailableQtyByStore = $AvailableQtyByStore;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->AvailableQtyByStore[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->AvailableQtyByStore[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->AvailableQtyByStore[] = $value;
        } else {
            $this->AvailableQtyByStore[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->AvailableQtyByStore[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->AvailableQtyByStore);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->AvailableQtyByStore);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->AvailableQtyByStore);
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
        reset($this->AvailableQtyByStore);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->AvailableQtyByStore);
    }

}
