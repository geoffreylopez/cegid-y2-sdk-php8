<?php

namespace Y2\SaleDocument;

class ArrayOfCreate_ShippingTax implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $Create_ShippingTax = null;

    public function __construct()
    {
    
    }

    public function getCreate_ShippingTax(): ?array
    {
      return $this->Create_ShippingTax;
    }

    public function setCreate_ShippingTax(array $Create_ShippingTax = null): static
    {
      $this->Create_ShippingTax = $Create_ShippingTax;
      return $this;
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetExists(mixed $offset): bool
    {
      return isset($this->Create_ShippingTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->Create_ShippingTax[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->Create_ShippingTax[] = $value;
      } else {
        $this->Create_ShippingTax[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->Create_ShippingTax[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->Create_ShippingTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->Create_ShippingTax);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->Create_ShippingTax);
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
      reset($this->Create_ShippingTax);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->Create_ShippingTax);
    }

}
