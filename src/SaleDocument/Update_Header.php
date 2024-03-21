<?php

namespace Y2\SaleDocument;

class Update_Header
{
    protected ?bool $Active = null;

    protected ?string $Comment = null;

    protected ?\DateTime $Date = null;

    protected ?string $ExternalReference = null;

    protected ?\DateTime $ExternalReferenceDate = null;

    protected ?string $FollowedReference = null;

    protected ?bool $LinesUnmodifiable = null;

    protected ?OmniChannel $OmniChannel = null;

    protected ?DocumentOrigin $Origin = null;

    protected ?string $SalesPersonId = null;

    protected ?bool $TaxExcluded = null;

    protected ?ArrayOfUserDefinedDate $UserDefinedDates = null;

    protected ?ArrayOfUserDefinedTable $UserDefinedTables = null;

    protected ?ArrayOfUserField $UserFields = null;

    public function __construct()
    {
    
    }

    public function getActive(): ?bool
    {
      return $this->Active;
    }

    public function setActive(bool $Active): static
    {
      $this->Active = $Active;
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

    public function getDate(): \DateTime|bool|null
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    public function setDate(\DateTime $Date = null): static
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
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

    public function getOrigin(): ?DocumentOrigin
    {
      return $this->Origin;
    }

    public function setOrigin(DocumentOrigin $Origin): static
    {
      $this->Origin = $Origin;
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

    public function getTaxExcluded(): ?bool
    {
      return $this->TaxExcluded;
    }

    public function setTaxExcluded(bool $TaxExcluded): static
    {
      $this->TaxExcluded = $TaxExcluded;
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
