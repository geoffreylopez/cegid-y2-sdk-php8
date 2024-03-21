<?php

namespace Y2\SaleDocument;

class ArrayOfGet_Payment implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Get_Payment = null;
    
    public function __construct()
    {
    
    }

    public function getGet_Payment(): ?array
    {
      return $this->Get_Payment;
    }

    public function setGet_Payment(array $Get_Payment = null): static
    {
      $this->Get_Payment = $Get_Payment;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Get_Payment[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
      return $this->Get_Payment[$offset];
    }

    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Get_Payment[] = $value;
      } else {
        $this->Get_Payment[$offset] = $value;
      }
    }

    public function offsetUnset(mixed $offset): void
    {
      unset($this->Get_Payment[$offset]);
    }

    public function current(): mixed
    {
      return current($this->Get_Payment);
    }

    public function next(): void
    {
      next($this->Get_Payment);
    }

    public function key(): string|int|null
    {
      return key($this->Get_Payment);
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
      reset($this->Get_Payment);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Get_Payment);
    }

}
