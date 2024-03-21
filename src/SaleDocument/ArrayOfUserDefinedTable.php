<?php

namespace Y2\SaleDocument;

class ArrayOfUserDefinedTable implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $UserDefinedTable = null;

    public function __construct()
    {
    
    }

    public function getUserDefinedTable(): ?array
    {
      return $this->UserDefinedTable;
    }

    public function setUserDefinedTable(array $UserDefinedTable = null): static
    {
      $this->UserDefinedTable = $UserDefinedTable;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->UserDefinedTable[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->UserDefinedTable[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->UserDefinedTable[] = $value;
      } else {
        $this->UserDefinedTable[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->UserDefinedTable[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->UserDefinedTable);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->UserDefinedTable);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->UserDefinedTable);
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
      reset($this->UserDefinedTable);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->UserDefinedTable);
    }

}
