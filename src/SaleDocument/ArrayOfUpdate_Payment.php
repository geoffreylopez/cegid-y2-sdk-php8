<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_Payment implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Update_Payment = null;

    public function __construct()
    {
    
    }

    public function getUpdate_Payment(): ?array
    {
      return $this->Update_Payment;
    }

    public function setUpdate_Payment(array $Update_Payment = null): static
    {
      $this->Update_Payment = $Update_Payment;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Update_Payment[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Update_Payment[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Update_Payment[] = $value;
      } else {
        $this->Update_Payment[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Update_Payment[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Update_Payment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Update_Payment);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Update_Payment);
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
      reset($this->Update_Payment);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Update_Payment);
    }

}
