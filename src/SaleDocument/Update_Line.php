<?php

namespace Y2\SaleDocument;

class Update_Line
{
    protected ?string $CatalogReference = null;

    protected ?string $Comment = null;

    protected ?string $ComplementaryDescription = null;

    protected ?\DateTime $DeliveryDate = null;

    protected ?string $DiscountTypeId = null;

    protected ?\DateTime $InitialDeliveryDate = null;

    protected ?ItemIdentifier $ItemIdentifier = null;

    protected ?string $Label = null;

    protected ?float $NetUnitPrice = null;

    protected ?OmniChannelLine $OmniChannel = null;

    protected ?string $Origin = null;

    protected ?string $PackageReference = null;

    protected ?float $Quantity = null;

    protected ?string $SalesPersonId = null;

    protected ?string $SerialNumberId = null;

    protected ?ArrayOfUpdate_Tax $Taxes = null;

    protected ?float $UnitPrice = null;
    
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

    public function getItemIdentifier(): ?ItemIdentifier
    {
      return $this->ItemIdentifier;
    }

    public function setItemIdentifier(ItemIdentifier $ItemIdentifier): static
    {
      $this->ItemIdentifier = $ItemIdentifier;
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

    public function getNetUnitPrice(): ?float
    {
      return $this->NetUnitPrice;
    }

    public function setNetUnitPrice(float $NetUnitPrice): static
    {
      $this->NetUnitPrice = $NetUnitPrice;
      return $this;
    }

    public function getOmniChannel(): ?OmniChannelLine
    {
      return $this->OmniChannel;
    }

    public function setOmniChannel(OmniChannelLine $OmniChannel): static
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

    public function getTaxes(): ?ArrayOfUpdate_Tax
    {
      return $this->Taxes;
    }

    public function setTaxes(ArrayOfUpdate_Tax $Taxes): static
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    public function getUnitPrice(): ?float
    {
      return $this->UnitPrice;
    }

    public function setUnitPrice(float $UnitPrice): static
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
