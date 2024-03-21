<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_Tax implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Update_Tax = null;

    public function __construct()
    {
    
    }

    /**
     * @return Update_Tax[]
     */
    public function getUpdate_Tax(): ?array
    {
      return $this->Update_Tax;
    }

    public function setUpdate_Tax(array $Update_Tax = null): static
    {
      $this->Update_Tax = $Update_Tax;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Update_Tax[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Update_Tax[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Update_Tax[] = $value;
      } else {
        $this->Update_Tax[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Update_Tax[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Update_Tax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Update_Tax);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Update_Tax);
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
      reset($this->Update_Tax);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Update_Tax);
    }

}
