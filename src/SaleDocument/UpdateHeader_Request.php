<?php

namespace Y2\SaleDocument;

class UpdateHeader_Request
{
    protected ?string $Comment = null;

    protected ?Address $DeliveryAddress = null;

    protected ?string $ExternalReference = null;

    protected ?\DateTime $ExternalReferenceDate = null;

    protected ?string $FollowedReference = null;

    protected ?SaleDocumentIdentifier $Identifier = null;

    protected ?Address $InvoicingAddress = null;

    protected ?bool $LinesUnmodifiable = null;

    protected ?OmniChannel $OmniChannel = null;

    protected ?string $SalesPersonId = null;

    protected ?ArrayOfUserDefinedDate $UserDefinedDates = null;

    protected ?ArrayOfUserDefinedTable $UserDefinedTables = null;

    protected ?ArrayOfUserField $UserFields = null;

    public function __construct()
    {
    
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

    public function getDeliveryAddress(): ?Address
    {
      return $this->DeliveryAddress;
    }

    public function setDeliveryAddress(Address $DeliveryAddress): static
    {
      $this->DeliveryAddress = $DeliveryAddress;
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

    public function getExternalReferenceDate(): \DateTime|bool|null
    {
      if ($this->ExternalReferenceDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExternalReferenceDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setExternalReferenceDate(\DateTime $ExternalReferenceDate = null): static
    {
      if ($ExternalReferenceDate == null) {
       $this->ExternalReferenceDate = null;
      } else {
        $this->ExternalReferenceDate = $ExternalReferenceDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    public function getFollowedReference(): ?string
    {
      return $this->FollowedReference;
    }

    public function setFollowedReference(string $FollowedReference): static
    {
      $this->FollowedReference = $FollowedReference;
      return $this;
    }

    public function getIdentifier(): ?SaleDocumentIdentifier
    {
      return $this->Identifier;
    }

    public function setIdentifier(SaleDocumentIdentifier $Identifier): static
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    public function getInvoicingAddress(): ?Address
    {
      return $this->InvoicingAddress;
    }

    public function setInvoicingAddress(Address $InvoicingAddress): static
    {
      $this->InvoicingAddress = $InvoicingAddress;
      return $this;
    }

    public function getLinesUnmodifiable(): ?bool
    {
      return $this->LinesUnmodifiable;
    }

    public function setLinesUnmodifiable(bool $LinesUnmodifiable): static
    {
      $this->LinesUnmodifiable = $LinesUnmodifiable;
      return $this;
    }

    public function getOmniChannel(): ?OmniChannel
    {
      return $this->OmniChannel;
    }

    public function setOmniChannel(OmniChannel $OmniChannel): static
    {
      $this->OmniChannel = $OmniChannel;
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

    public function getUserDefinedDates(): ?ArrayOfUserDefinedDate
    {
      return $this->UserDefinedDates;
    }

    public function setUserDefinedDates(ArrayOfUserDefinedDate $UserDefinedDates): static
    {
      $this->UserDefinedDates = $UserDefinedDates;
      return $this;
    }

    public function getUserDefinedTables(): ?ArrayOfUserDefinedTable
    {
      return $this->UserDefinedTables;
    }

    public function setUserDefinedTables(ArrayOfUserDefinedTable $UserDefinedTables): static
    {
      $this->UserDefinedTables = $UserDefinedTables;
      return $this;
    }

    public function getUserFields(): ?ArrayOfUserField
    {
      return $this->UserFields;
    }

    public function setUserFields(ArrayOfUserField $UserFields): static
    {
      $this->UserFields = $UserFields;
      return $this;
    }

}
