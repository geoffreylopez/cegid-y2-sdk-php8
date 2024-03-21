<?php

namespace Y2\ItemInventory;

class ArrayOfStoreAvailableQty implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $StoreAvailableQty = null;

    public function __construct()
    {

    }

    public function getStoreAvailableQty(): ?array
    {
        return $this->StoreAvailableQty;
    }

    public function setStoreAvailableQty(array $StoreAvailableQty = null): static
    {
        $this->StoreAvailableQty = $StoreAvailableQty;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->StoreAvailableQty[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->StoreAvailableQty[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->StoreAvailableQty[] = $value;
        } else {
            $this->StoreAvailableQty[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->StoreAvailableQty[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->StoreAvailableQty);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->StoreAvailableQty);
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
        reset($this->StoreAvailableQty);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->StoreAvailableQty);
    }

}
