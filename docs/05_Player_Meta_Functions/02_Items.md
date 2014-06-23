<p class="lead">These functions can be called at any time and are used for the base functionality in PointShop.</p>

####<a name="giveitem"></a>Player:PS_GiveItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Gives an item to the player, if they don't already have one.

    ply:PS_GiveItem('conehat')

####<a name="takeitem"></a>Player:PS_TakeItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Takes an item from the player, if they already have one.

    ply:PS_TakeItem('conehat')

####<a name="buyitem"></a>Player:PS_BuyItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Gives the player an item and takes points, if they are allowed to and can afford to do so.

    ply:PS_BuyItem('conehat')

####<a name="sell-item"></a>Player:PS_SellItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Takes an item from the player and gives them points, if they are allowed to and have the item.

    ply:PS_SellItem('conehat')

####<a name="equip-item"></a>Player:PS_EquipItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Equips an item for the player.

    ply:PS_EquipItem('conehat')

####<a name="holster-item"></a>Player:PS_HolsterItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Holsters an item for the player.

    ply:PS_HolsterItem('conehat')

####<a name="modify-item"></a>Player:PS_ModifyItem(item\_id, modifications)

**Arguments:** <span class="type">String</span> item_id, <span class="type">Table</span> modifications  
**Realm:** <span class="server">Server</span>  
**Description:** Saves modifications for an item and calls ITEM:OnModify(ply, modifications)

    ply:PS_ModifyItem('conehat', { color = Color(255, 0, 0, 0) })

####<a name="has-item"></a>Player:PS_HasItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns whether the player has an item.

    local has_item = ply:PS_HasItem('conehat')

####<a name="has-item-equipped"></a>Player:PS_HasItemEquipped(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns whether the player has an item equipped.

    local has_item = ply:PS_HasItemEquipped('conehat')

####<a name="num-items-equipped-from-category"></a>Player:PS_NumItemsEquippedFromCategory(category\_id)

**Arguments:** <span class="type">String</span> category_id  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns the number of items the player has equipped from a category.

    local has_item = ply:PS_NumItemsEquippedFromCategory('powerups')
