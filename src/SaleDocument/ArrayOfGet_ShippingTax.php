<?php

namespace Y2\SaleDocument;

class ArrayOfGet_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Get_ShippingTax = null;

    public function __construct()
    {
    
    }

    public function getGet_ShippingTax(): ?array
    {
      return $this->Get_ShippingTax;
    }

    public function setGet_ShippingTax(array $Get_ShippingTax = null): static
    {
      $this->Get_ShippingTax = $Get_ShippingTax;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Get_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Get_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Get_ShippingTax[] = $value;
      } else {
        $this->Get_ShippingTax[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Get_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Get_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Get_ShippingTax);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Get_ShippingTax);
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
      reset($this->Get_ShippingTax);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Get_ShippingTax);
    }

}
