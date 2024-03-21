<?php

namespace Y2\SaleDocument;

class Get_Line
{
    protected ?string $CatalogReference = null;

    protected ?string $Comment = null;

    protected ?string $ComplementaryDescription = null;

    protected ?\DateTime $DeliveryDate = null;

    protected ?string $DiscountTypeId = null;

    protected ?string $ExternalReference = null;

    protected ?\DateTime $InitialDeliveryDate = null;

    protected ?string $ItemCode = null;

    protected ?string $ItemId = null;

    protected ?string $ItemReference = null;

    protected ?string $Label = null;

    protected ?string $MovementReasonId = null;

    protected ?GetOmniChannelLine $OmniChannel = null;

    protected ?string $Origin = null;

    protected ?string $PackageReference = null;

    protected ?float $Quantity = null;

    protected ?int $Rank = null;

    protected ?string $SalesPersonId = null;

    protected ?string $SerialNumberId = null;

    protected ?float $TaxExcludedNetUnitPrice = null;

    protected ?float $TaxExcludedUnitPrice = null;

    protected ?float $TaxIncludedNetUnitPrice = null;

    protected ?float $TaxIncludedUnitPrice = null;

    protected ?string $WarehouseId = null;

    public function __construct()
    {
    
    }

    public function getCatalogReference(): ?string
    {
      return $this->CatalogReference;
    }

    public function setCatalogReference(string $CatalogReference): static
    {
      $this->CatalogReference = $CatalogReference;
      return $this;
    }

    public function getComment(): ?string
    {
      return $this->Comment;
    }

    public function setComment(string $Comment): static
    {
      $this->Comment = $Comment;
      return $this;
    }

    public function getComplementaryDescription(): ?string
    {
      return $this->ComplementaryDescription;
    }

    public function setComplementaryDescription(string $ComplementaryDescription): static
    {
      $this->ComplementaryDescription = $ComplementaryDescription;
      return $this;
    }

    public function getDeliveryDate(): \DateTime|bool|null
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setDeliveryDate(\DateTime $DeliveryDate = null): static
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getDiscountTypeId(): ?string
    {
      return $this->DiscountTypeId;
    }

    public function setDiscountTypeId(string $DiscountTypeId): static
    {
      $this->DiscountTypeId = $DiscountTypeId;
      return $this;
    }

    public function getExternalReference(): ?string
    {
      return $this->ExternalReference;
    }

    public function setExternalReference(string $ExternalReference): static
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    public function getInitialDeliveryDate(): \DateTime|bool|null
    {
      if ($this->InitialDeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InitialDeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setInitialDeliveryDate(\DateTime $InitialDeliveryDate = null): static
    {
      if ($InitialDeliveryDate == null) {
       $this->InitialDeliveryDate = null;
      } else {
        $this->InitialDeliveryDate = $InitialDeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getItemCode(): ?string
    {
      return $this->ItemCode;
    }

    public function setItemCode(string $ItemCode): static
    {
      $this->ItemCode = $ItemCode;
      return $this;
    }

    public function getItemId(): ?string
    {
      return $this->ItemId;
    }

    public function setItemId(string $ItemId): static
    {
      $this->ItemId = $ItemId;
      return $this;
    }

    public function getItemReference(): ?string
    {
      return $this->ItemReference;
    }

    public function setItemReference(string $ItemReference): static
    {
      $this->ItemReference = $ItemReference;
      return $this;
    }

    public function getLabel(): ?string
    {
      return $this->Label;
    }

    public function setLabel(string $Label): static
    {
      $this->Label = $Label;
      return $this;
    }

    public function getMovementReasonId(): ?string
    {
      return $this->MovementReasonId;
    }

    public function setMovementReasonId(string $MovementReasonId): static
    {
      $this->MovementReasonId = $MovementReasonId;
      return $this;
    }

    public function getOmniChannel(): ?GetOmniChannelLine
    {
      return $this->OmniChannel;
    }

    public function setOmniChannel(GetOmniChannelLine $OmniChannel): static
    {
      $this->OmniChannel = $OmniChannel;
      return $this;
    }

    public function getOrigin(): ?string
    {
      return $this->Origin;
    }

    public function setOrigin(string $Origin): static
    {
      $this->Origin = $Origin;
      return $this;
    }

    public function getPackageReference(): ?string
    {
      return $this->PackageReference;
    }

    public function setPackageReference(string $PackageReference): static
    {
      $this->PackageReference = $PackageReference;
      return $this;
    }

    public function getQuantity(): ?float
    {
      return $this->Quantity;
    }

    public function setQuantity(float $Quantity): static
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    public function getRank(): ?int
    {
      return $this->Rank;
    }

    public function setRank($Rank): static
    {
      $this->Rank = $Rank;
      return $this;
    }

    public function getSalesPersonId(): ?string
    {
      return $this->SalesPersonId;
    }

    public function setSalesPersonId(string $SalesPersonId): static
    {
      $this->SalesPersonId = $SalesPersonId;
      return $this;
    }

    public function getSerialNumberId(): ?string
    {
      return $this->SerialNumberId;
    }

    public function setSerialNumberId(string $SerialNumberId): static
    {
      $this->SerialNumberId = $SerialNumberId;
      return $this;
    }

    public function getTaxExcludedNetUnitPrice(): ?float
    {
      return $this->TaxExcludedNetUnitPrice;
    }

    public function setTaxExcludedNetUnitPrice(float $TaxExcludedNetUnitPrice): static
    {
      $this->TaxExcludedNetUnitPrice = $TaxExcludedNetUnitPrice;
      return $this;
    }

    public function getTaxExcludedUnitPrice(): ?float
    {
      return $this->TaxExcludedUnitPrice;
    }

    public function setTaxExcludedUnitPrice(float $TaxExcludedUnitPrice): static
    {
      $this->TaxExcludedUnitPrice = $TaxExcludedUnitPrice;
      return $this;
    }

    public function getTaxIncludedNetUnitPrice(): ?float
    {
      return $this->TaxIncludedNetUnitPrice;
    }

    public function setTaxIncludedNetUnitPrice(float $TaxIncludedNetUnitPrice): static
    {
      $this->TaxIncludedNetUnitPrice = $TaxIncludedNetUnitPrice;
      return $this;
    }

    public function getTaxIncludedUnitPrice(): ?float
    {
      return $this->TaxIncludedUnitPrice;
    }

    public function setTaxIncludedUnitPrice(float $TaxIncludedUnitPrice): static
    {
      $this->TaxIncludedUnitPrice = $TaxIncludedUnitPrice;
      return $this;
    }

    public function getWarehouseId(): ?string
    {
      return $this->WarehouseId;
    }

    public function setWarehouseId(string $WarehouseId): static
    {
      $this->WarehouseId = $WarehouseId;
      return $this;
    }

}
