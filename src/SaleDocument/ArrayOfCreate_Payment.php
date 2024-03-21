<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_Payment implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Create_Payment = null;

    public function __construct()
    {
    
    }

    public function getCreate_Payment(): ?array
    {
      return $this->Create_Payment;
    }

    public function setCreate_Payment(array $Create_Payment = null): static
    {
      $this->Create_Payment = $Create_Payment;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Create_Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Create_Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Create_Payment[] = $value;
      } else {
        $this->Create_Payment[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Create_Payment[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Create_Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Create_Payment);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Create_Payment);
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
      reset($this->Create_Payment);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Create_Payment);
    }

}
