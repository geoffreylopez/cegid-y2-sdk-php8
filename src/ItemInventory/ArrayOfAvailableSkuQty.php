<?php

namespace Y2\ItemInventory;

class ArrayOfAvailableSkuQty implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $AvailableSkuQty = null;

    public function __construct()
    {

    }

    public function getAvailableSkuQty(): ?array
    {
        return $this->AvailableSkuQty;
    }

    public function setAvailableSkuQty(array $AvailableSkuQty = null): static
    {
        $this->AvailableSkuQty = $AvailableSkuQty;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->AvailableSkuQty[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->AvailableSkuQty[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->AvailableSkuQty[] = $value;
        } else {
            $this->AvailableSkuQty[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->AvailableSkuQty[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->AvailableSkuQty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->AvailableSkuQty);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->AvailableSkuQty);
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
        reset($this->AvailableSkuQty);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->AvailableSkuQty);
    }

}
