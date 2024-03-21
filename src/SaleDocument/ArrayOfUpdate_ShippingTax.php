<?php

namespace Y2\SaleDocument;

class ArrayOfUpdate_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Update_ShippingTax = null;

    public function __construct()
    {
    
    }

    public function getUpdate_ShippingTax(): ?array
    {
      return $this->Update_ShippingTax;
    }

    public function setUpdate_ShippingTax(array $Update_ShippingTax = null): static
    {
      $this->Update_ShippingTax = $Update_ShippingTax;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Update_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Update_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Update_ShippingTax[] = $value;
      } else {
        $this->Update_ShippingTax[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Update_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Update_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Update_ShippingTax);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Update_ShippingTax);
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
      reset($this->Update_ShippingTax);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Update_ShippingTax);
    }

}
