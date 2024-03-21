<?php

namespace Y2\Customer;

class ArrayOfCustomerQueryData implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $CustomerQueryData = null;

    public function __construct()
    {

    }

    public function getCustomerQueryData(): ?array
    {
        return $this->CustomerQueryData;
    }

    public function setCustomerQueryData(array $CustomerQueryData = null): static
    {
        $this->CustomerQueryData = $CustomerQueryData;
        return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->CustomerQueryData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return CustomerQueryData
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->CustomerQueryData[$offset];
    }

    public function offsetSet(mixed $offset, $value): void
    {
        if (!isset($offset)) {
            $this->CustomerQueryData[] = $value;
        } else {
            $this->CustomerQueryData[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->CustomerQueryData[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
        return current($this->CustomerQueryData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
        next($this->CustomerQueryData);
    }

    /**
     * Iterator implementation
     */
    public function key(): mixed
    {
        return key($this->CustomerQueryData);
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
        reset($this->CustomerQueryData);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
        return count($this->CustomerQueryData);
    }

}
