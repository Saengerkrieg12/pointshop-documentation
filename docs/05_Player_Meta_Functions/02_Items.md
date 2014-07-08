<p class="lead">These functions can be called at any time and are used for the base functionality in PointShop.</p>

####<a href="#give-item" name="give-item">Player:PS_GiveItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Gives an item to the player, if they don't already have one.

    ply:PS_GiveItem('conehat')

####<a href="#take-item" name="take-item">Player:PS_TakeItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Takes an item from the player, if they already have one.

    ply:PS_TakeItem('conehat')

####<a href="#buy-item" name="buy-item">Player:PS_BuyItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Gives the player an item and takes points, if they are allowed to and can afford to do so.

    ply:PS_BuyItem('conehat')

####<a href="#sell-item" name="sell-item">Player:PS_SellItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Takes an item from the player and gives them points, if they are allowed to and have the item.

    ply:PS_SellItem('conehat')

####<a href="#equip-item" name="equip-item">Player:PS_EquipItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Equips an item for the player.

    ply:PS_EquipItem('conehat')

####<a href="#holster-item" name="holster-item">Player:PS_HolsterItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Holsters an item for the player.

    ply:PS_HolsterItem('conehat')

####<a href="#modify-item" name="modify-item">Player:PS_ModifyItem(item\_id, modifications)</a>

**Arguments:** <span class="type">String</span> item_id, <span class="type">Table</span> modifications  
**Realm:** <span class="server">Server</span>  
**Description:** Saves modifications for an item and calls ITEM:OnModify(ply, modifications)

    ply:PS_ModifyItem('conehat', { color = Color(255, 0, 0, 0) })

####<a href="#has-item" name="has-item">Player:PS_HasItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns whether the player has an item.

    local has_item = ply:PS_HasItem('conehat')

####<a href="#has-item-equipped" name="has-item-equipped">Player:PS_HasItemEquipped(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns whether the player has an item equipped.

    local has_item = ply:PS_HasItemEquipped('conehat')

####<a href="#num-items-equipped-from-category" name="num-items-equipped-from-category">Player:PS_NumItemsEquippedFromCategory(category\_id)</a>

**Arguments:** <span class="type">String</span> category_id  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns the number of items the player has equipped from a category.

    local has_item = ply:PS_NumItemsEquippedFromCategory('powerups')
