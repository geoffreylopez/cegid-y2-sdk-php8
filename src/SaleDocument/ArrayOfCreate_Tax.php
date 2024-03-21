<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Tax implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Create_Tax = null;

    public function __construct()
    {
    
    }

    public function getCreate_Tax(): ?array
    {
      return $this->Create_Tax;
    }

    public function setCreate_Tax(array $Create_Tax = null): static
    {
      $this->Create_Tax = $Create_Tax;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Create_Tax[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Create_Tax[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Create_Tax[] = $value;
      } else {
        $this->Create_Tax[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Create_Tax[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Create_Tax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Create_Tax);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Create_Tax);
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
      reset($this->Create_Tax);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Create_Tax);
    }

}
