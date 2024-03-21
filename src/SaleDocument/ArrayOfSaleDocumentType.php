<?php

namespace Y2\SaleDocument;

class ArrayOfSaleDocumentType implements \ArrayAccess, \Iterator, \Countable
{
    protected ?array $SaleDocumentType = null;
    
    public function __construct()
    {
    
    }

    public function getSaleDocumentType(): ?array
    {
      return $this->SaleDocumentType;
    }

    public function setSaleDocumentType(array $SaleDocumentType = null): static
    {
      $this->SaleDocumentType = $SaleDocumentType;
      return $this;
    }

    public function offsetExists(mixed $offset): bool
    {
      return isset($this->SaleDocumentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetGet(mixed $offset): mixed
    {
      return $this->SaleDocumentType[$offset];
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetSet(mixed $offset, $value): void
    {
      if (!isset($offset)) {
        $this->SaleDocumentType[] = $value;
      } else {
        $this->SaleDocumentType[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     */
    public function offsetUnset(mixed $offset): void
    {
      unset($this->SaleDocumentType[$offset]);
    }

    /**
     * Iterator implementation
     */
    public function current(): mixed
    {
      return current($this->SaleDocumentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     */
    public function next(): void
    {
      next($this->SaleDocumentType);
    }

    /**
     * Iterator implementation
     */
    public function key(): string|int|null
    {
      return key($this->SaleDocumentType);
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
      reset($this->SaleDocumentType);
    }

    /**
     * Countable implementation
     */
    public function count(): int
    {
      return count($this->SaleDocumentType);
    }

}
