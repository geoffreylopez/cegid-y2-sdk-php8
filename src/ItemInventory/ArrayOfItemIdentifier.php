<?php

namespace Y2\ItemInventory;

class ArrayOfItemIdentifier implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $ItemIdentifier = null;

    public function __construct()
    {

    }

    public function getItemIdentifier(): ?array
    {
        return $this->ItemIdentifier;
    }

    public function setItemIdentifier(array $ItemIdentifier = null): static
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->ItemIdentifier[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->ItemIdentifier[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->ItemIdentifier[] = $value;
        } else {
            $this->ItemIdentifier[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->ItemIdentifier[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->ItemIdentifier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->ItemIdentifier);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
        return key($this->ItemIdentifier);
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
     */
    public function rewind(): void
    {
        reset($this->ItemIdentifier);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->ItemIdentifier);
    }

}
