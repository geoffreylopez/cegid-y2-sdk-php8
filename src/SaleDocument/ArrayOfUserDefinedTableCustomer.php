<?php

namespace Y2\SaleDocument;

class ArrayOfUserDefinedTableCustomer implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $UserDefinedTableCustomer = null;
    
    public function __construct()
    {
    
    }

    public function getUserDefinedTableCustomer(): ?array
    {
      return $this->UserDefinedTableCustomer;
    }

    public function setUserDefinedTableCustomer(array $UserDefinedTableCustomer = null): static
    {
      $this->UserDefinedTableCustomer = $UserDefinedTableCustomer;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->UserDefinedTableCustomer[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->UserDefinedTableCustomer[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->UserDefinedTableCustomer[] = $value;
      } else {
        $this->UserDefinedTableCustomer[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->UserDefinedTableCustomer[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->UserDefinedTableCustomer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->UserDefinedTableCustomer);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->UserDefinedTableCustomer);
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
      reset($this->UserDefinedTableCustomer);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->UserDefinedTableCustomer);
    }

}
