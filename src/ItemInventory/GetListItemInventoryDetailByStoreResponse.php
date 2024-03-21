<?php

namespace Y2\ItemInventory;

class GetListItemInventoryDetailByStoreResponse
{
    protected ?GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult = null;

    public function __construct(GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult)
    {
        $this->GetListItemInventoryDetailByStoreResult = $GetListItemInventoryDetailByStoreResult;
    }

    public function getGetListItemInventoryDetailByStoreResult(): ?GetListItemInventoryDetailByStore_Reply
    {
        return $this->GetListItemInventoryDetailByStoreResult;
    }

    public function setGetListItemInventoryDetailByStoreResult(GetListItemInventoryDetailByStore_Reply $GetListItemInventoryDetailByStoreResult): static
    {
        $this->GetListItemInventoryDetailByStoreResult = $GetListItemInventoryDetailByStoreResult;
        return $this;
    }

}
