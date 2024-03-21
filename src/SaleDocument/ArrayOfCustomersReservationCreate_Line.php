<?php

namespace Y2\SaleDocument;

class ArrayOfCustomersReservationCreate_Line implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $CustomersReservationCreate_Line = null;

    public function __construct()
    {
    
    }

    public function getCustomersReservationCreate_Line(): ?array
    {
      return $this->CustomersReservationCreate_Line;
    }

    public function setCustomersReservationCreate_Line(array $CustomersReservationCreate_Line = null): static
    {
      $this->CustomersReservationCreate_Line = $CustomersReservationCreate_Line;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->CustomersReservationCreate_Line[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->CustomersReservationCreate_Line[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->CustomersReservationCreate_Line[] = $value;
      } else {
        $this->CustomersReservationCreate_Line[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->CustomersReservationCreate_Line[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->CustomersReservationCreate_Line);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->CustomersReservationCreate_Line);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->CustomersReservationCreate_Line);
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
      reset($this->CustomersReservationCreate_Line);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->CustomersReservationCreate_Line);
    }

}
