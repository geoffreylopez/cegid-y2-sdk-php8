<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Line implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Get_Line = null;

    public function __construct()
    {
    
    }

    public function getGet_Line(): ?array
    {
      return $this->Get_Line;
    }

    public function setGet_Line(array $Get_Line = null): static
    {
      $this->Get_Line = $Get_Line;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Get_Line[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
      return $this->Get_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Get_Line[] = $value;
      } else {
        $this->Get_Line[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Get_Line[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Get_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Get_Line);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Get_Line);
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
      reset($this->Get_Line);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Get_Line);
    }

}
