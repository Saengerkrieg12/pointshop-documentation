<p class="lead">These functions can be called at any time and are used for the base functionality in PointShop.</p>

####<a name="meta-giveitem"></a>Player:PS_GiveItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Gives an item to the player, if they don't already have one.

    ply:PS_GiveItem('conehat')

####<a name="meta-takeitem"></a>Player:PS_TakeItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Takes an item from the player, if they already have one.

    ply:PS_TakeItem('conehat')

####<a name="meta-buyitem"></a>Player:PS_BuyItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Gives the player an item and takes points, if they are allowed to and can afford to do so.

    ply:PS_BuyItem('conehat')

####<a name="meta-sellitem"></a>Player:PS_SellItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Takes an item from the player and gives them points, if they are allowed to and have the item.

    ply:PS_SellItem('conehat')

####<a name="meta-equipitem"></a>Player:PS_EquipItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Equips an item for the player.

    ply:PS_EquipItem('conehat')

####<a name="meta-holsteritem"></a>Player:PS_HolsterItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Holsters an item for the player.

    ply:PS_HolsterItem('conehat')

####<a name="meta-modifyitem"></a>Player:PS_ModifyItem(item\_id, modifications)

**Arguments:** item_id [string - valid item\_id], modifications [table - key value pairs of modifications]  
**Realm:** <span class="server">Server</span>  
**Description:** Saves modifications for an item and calls ITEM:OnModify(ply, modifications)

    ply:PS_ModifyItem('conehat', { color = Color(255, 0, 0, 0) })

####<a name="meta-hasitem"></a>Player:PS_HasItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span> (LocalPlayer only)  
**Description:** Returns whether the player has an item.

    local has_item = ply:PS_HasItem('conehat')

####<a name="meta-hasitemequipped"></a>Player:PS_HasItemEquipped(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span> (LocalPlayer only)  
**Description:** Returns whether the player has an item equipped.

    local has_item = ply:PS_HasItemEquipped('conehat')

####<a name="meta-numitemsequippedfromcategory"></a>Player:PS_NumItemsEquippedFromCategory(category\_id)

**Arguments:** category_id [string - valid category\_id]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span> (LocalPlayer only)  
**Description:** Returns the number of items the player has equipped from a category.

    local has_item = ply:PS_NumItemsEquippedFromCategory('powerups')
