<?php

namespace Y2\SaleDocument;

class ExceptionDetail
{
    protected ?string $HelpLink = null;

    protected ?ExceptionDetail $InnerException = null;

    protected ?string $Message = null;

    protected ?string $StackTrace = null;

    protected ?guid $TrackingId = null;

    protected ?string $Type = null;

    
    public function __construct()
    {
    
    }

    public function getHelpLink(): ?string
    {
      return $this->HelpLink;
    }

    public function setHelpLink(string $HelpLink): static
    {
      $this->HelpLink = $HelpLink;
      return $this;
    }

    public function getInnerException(): ?ExceptionDetail
    {
      return $this->InnerException;
    }

    public function setInnerException(ExceptionDetail $InnerException): static
    {
      $this->InnerException = $InnerException;
      return $this;
    }

    public function getMessage(): ?string
    {
      return $this->Message;
    }

    public function setMessage(string $Message): static
    {
      $this->Message = $Message;
      return $this;
    }

    public function getStackTrace(): ?string
    {
      return $this->StackTrace;
    }

    public function setStackTrace(string $StackTrace): static
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

    public function getTrackingId(): ?guid
    {
      return $this->TrackingId;
    }

    public function setTrackingId(guid $TrackingId): static
    {
      $this->TrackingId = $TrackingId;
      return $this;
    }

    public function getType(): ?string
    {
      return $this->Type;
    }

    public function setType(string $Type): static
    {
      $this->Type = $Type;
      return $this;
    }

}
