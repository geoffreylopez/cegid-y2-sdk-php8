<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Line implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Create_Line = null;

    public function __construct()
    {
    
    }

    public function getCreate_Line(): ?array
    {
      return $this->Create_Line;
    }

    public function setCreate_Line(array $Create_Line = null): static
    {
      $this->Create_Line = $Create_Line;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Create_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Create_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Create_Line[] = $value;
      } else {
        $this->Create_Line[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Create_Line[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Create_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Create_Line);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Create_Line);
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
      reset($this->Create_Line);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Create_Line);
    }

}
