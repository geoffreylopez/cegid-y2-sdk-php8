<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_Line implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Update_Line = null;

    public function __construct()
    {
    
    }

    public function getUpdate_Line(): ?array
    {
      return $this->Update_Line;
    }

    public function setUpdate_Line(array $Update_Line = null): static
    {
      $this->Update_Line = $Update_Line;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Update_Line[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
      return $this->Update_Line[$offset];
    }

    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Update_Line[] = $value;
      } else {
        $this->Update_Line[$offset] = $value;
      }
    }

    public function offsetUnset(mixed $offset): void
    {
      unset($this->Update_Line[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Update_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Update_Line);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Update_Line);
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
      reset($this->Update_Line);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Update_Line);
    }

}
