<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStore_Request
{
    protected ?bool $AllAvailableWarehouse = null;

    protected ?bool $DetailSku = null;

    protected ?ArrayOfItemIdentifier $ItemIdentifiers = null;

    protected ?bool $OnlyAvailableStock = null;

    protected ?Pager $Pager = null;

    protected ?ArrayOfstring $StoreIds = null;

    protected ?bool $WithStoreName = null;

    public function __construct()
    {

    }

    public function getAllAvailableWarehouse(): ?bool
    {
        return $this->AllAvailableWarehouse;
    }

    public function setAllAvailableWarehouse(bool $AllAvailableWarehouse): static
    {
        $this->AllAvailableWarehouse = $AllAvailableWarehouse;
        return $this;
    }

    public function getDetailSku(): ?bool
    {
        return $this->DetailSku;
    }

    public function setDetailSku(bool $DetailSku): static
    {
        $this->DetailSku = $DetailSku;
        return $this;
    }

    public function getItemIdentifiers(): ?ArrayOfItemIdentifier
    {
        return $this->ItemIdentifiers;
    }

    public function setItemIdentifiers(ArrayOfItemIdentifier $ItemIdentifiers): static
    {
        $this->ItemIdentifiers = $ItemIdentifiers;
        return $this;
    }

    public function getOnlyAvailableStock(): ?bool
    {
        return $this->OnlyAvailableStock;
    }

    public function setOnlyAvailableStock(bool $OnlyAvailableStock): static
    {
        $this->OnlyAvailableStock = $OnlyAvailableStock;
        return $this;
    }

    public function getPager(): ?Pager
    {
        return $this->Pager;
    }

    public function setPager(Pager $Pager): static
    {
        $this->Pager = $Pager;
        return $this;
    }

    public function getStoreIds(): ?ArrayOfstring
    {
        return $this->StoreIds;
    }

    public function setStoreIds(ArrayOfstring $StoreIds): static
    {
        $this->StoreIds = $StoreIds;
        return $this;
    }

    public function getWithStoreName(): ?bool
    {
        return $this->WithStoreName;
    }

    public function setWithStoreName(bool $WithStoreName): static
    {
        $this->WithStoreName = $WithStoreName;
        return $this;
    }

}
