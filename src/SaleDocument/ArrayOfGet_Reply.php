<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Reply implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Get_Reply = null;

    public function __construct()
    {
    
    }

    public function getGet_Reply(): ?array
    {
      return $this->Get_Reply;
    }

    public function setGet_Reply(array $Get_Reply = null): static
    {
      $this->Get_Reply = $Get_Reply;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Get_Reply[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Get_Reply[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Get_Reply[] = $value;
      } else {
        $this->Get_Reply[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Get_Reply[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Get_Reply);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Get_Reply);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Get_Reply);
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
      reset($this->Get_Reply);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Get_Reply);
    }

}
