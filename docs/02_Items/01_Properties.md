<p class="lead">Properties define how an item works and who it should be available to. Some are used to show the item in the menu, whilst others are used to restrict items to specific groups.</p>

####<a name="name"></a>ITEM.Name

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The items name in the shop.

    ITEM.Name = 'Test Item'

####<a name="price"></a>ITEM.Price

**Required:** Yes  
**Type:** <span class="type">Number</span>  
**Description:** How much should the item cost to buy?

    ITEM.Price = 200

####<a name="model"></a>ITEM.Model

**Required:** No, unless ITEM.Material is not defined  
**Type:** <span class="type">String</span>  
**Description:** The model shown in the PointShop menu. Either `ITEM.Model` or `ITEM.Material` is required.

    ITEM.Model = 'models/player/kleiner.mdl'

####<a name="material"></a>ITEM.Material

**Required:** No, unless ITEM.Model is not defined  
**Type:** <span class="type">String</span>  
**Description:** The material shown in the PointShop menu. Either `ITEM.Model` or `ITEM.Material` is required.

    ITEM.Material = 'trails/electric.vmt'

####<a name="skin"></a>ITEM.Skin

**Required:** No  
**Type:** <span class="type">Number</span>  
**Description:** Sets the skin of the model shown in the PointShop menu.

    ITEM.Skin = 1

####<a name="allowed-user-groups"></a>ITEM.AllowedUserGroups

**Required:** No  
**Type:** <span class="type">Table</span>  
**Description:** Defines the groups who's members can buy the item.

    ITEM.AllowedUserGroups = { "admin", "vip" }

####<a name="single-use"></a>ITEM.SingleUse

**Required:** No  
**Type:** <span class="type">Boolean</span>  
**Description:** Defines if the item should be given to the player only once and not kept. Useful for purchasing weapons weapons. This will call `ITEM:OnBuy()` but not `ITEM:OnEquip()`.

    ITEM.SingleUse = true

####<a name="attachment"></a>ITEM.Attachment

**Required:** No  
**Type:** <span class="type">String</span>  
**Description:** Defines which model attachment to use for clientside model positioning.

    ITEM.Attachment = 'eyes'

####<a name="bone"></a>ITEM.Bone

**Required:** No  
**Type:** <span class="type">String</span>  
**Description:** Defines which model bone to use for clientside model positioning.

    ITEM.Bone = 'ValveBiped.Bip01_Head1'

####<a name="no-preview"></a>ITEM.NoPreview

**Required:** No  
**Type:** <span class="type">Boolean</span>
**Description:** Enables or disables previews for the item.

    ITEM.NoPreview = true

####<a name="admin-only"></a>ITEM.AdminOnly

**Required:** No  
**Type:** <span class="type">Boolean</span>
**Description:** Sets whether the item should only be purchasable by admins.

    ITEM.AdminOnly = true
