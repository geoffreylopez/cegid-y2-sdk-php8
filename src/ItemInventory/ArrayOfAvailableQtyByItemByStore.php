<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableQtyByItemByStore implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $AvailableQtyByItemByStore = null;

    public function __construct()
    {

    }

    public function getAvailableQtyByItemByStore(): ?array
    {
        return $this->AvailableQtyByItemByStore;
    }

    public function setAvailableQtyByItemByStore(array $AvailableQtyByItemByStore = null): static
    {
        $this->AvailableQtyByItemByStore = $AvailableQtyByItemByStore;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->AvailableQtyByItemByStore[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->AvailableQtyByItemByStore[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->AvailableQtyByItemByStore[] = $value;
        } else {
            $this->AvailableQtyByItemByStore[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->AvailableQtyByItemByStore[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->AvailableQtyByItemByStore);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->AvailableQtyByItemByStore);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->AvailableQtyByItemByStore);
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
        reset($this->AvailableQtyByItemByStore);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->AvailableQtyByItemByStore);
    }

}
