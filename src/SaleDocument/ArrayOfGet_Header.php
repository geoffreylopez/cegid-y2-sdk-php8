<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Header implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Get_Header = null;

    public function __construct()
    {
    
    }

    public function getGet_Header(): ?array
    {
      return $this->Get_Header;
    }

    public function setGet_Header(array $Get_Header = null): static
    {
      $this->Get_Header = $Get_Header;
      return $this;
    }

    public function offsetExists($offset): bool
    {
      return isset($this->Get_Header[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
      return $this->Get_Header[$offset];
    }

    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Get_Header[] = $value;
      } else {
        $this->Get_Header[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Get_Header[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Get_Header);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Get_Header);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Get_Header);
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
      reset($this->Get_Header);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Get_Header);
    }

}
