<p class="lead">Properties define how an item works and who it should be available to. Some are used to show the item in the menu, whilst others are used to restrict items to specific groups.</p>

####<a href="#name" name="name">ITEM.Name</a>

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The items name in the shop.

    ITEM.Name = 'Test Item'

####<a href="#price" name="price">ITEM.Price</a>

**Required:** Yes  
**Type:** <span class="type">Number</span>  
**Description:** How much should the item cost to buy?

    ITEM.Price = 200

####<a href="#model" name="model">ITEM.Model</a>

**Required:** No, unless ITEM.Material is not defined  
**Type:** <span class="type">String</span>  
**Description:** The model shown in the PointShop menu. Either `ITEM.Model` or `ITEM.Material` is required.

    ITEM.Model = 'models/player/kleiner.mdl'

####<a href="#material" name="material">ITEM.Material</a>

**Required:** No, unless ITEM.Model is not defined  
**Type:** <span class="type">String</span>  
**Description:** The material shown in the PointShop menu. Either `ITEM.Model` or `ITEM.Material` is required.

    ITEM.Material = 'trails/electric.vmt'

####<a href="#skin" name="skin">ITEM.Skin</a>

**Required:** No  
**Type:** <span class="type">Number</span>  
**Description:** Sets the skin of the model shown in the PointShop menu.

    ITEM.Skin = 1

####<a href="#allowed-user-groups" name="allowed-user-groups">ITEM.AllowedUserGroups</a>

**Required:** No  
**Type:** <span class="type">Table</span>  
**Description:** Defines the groups who's members can buy the item.

    ITEM.AllowedUserGroups = { "admin", "vip" }

####<a href="#single-use" name="single-use">ITEM.SingleUse</a>

**Required:** No  
**Type:** <span class="type">Boolean</span>  
**Description:** Defines if the item should be given to the player only once and not kept. Useful for purchasing weapons weapons. This will call `ITEM:OnBuy()` but not `ITEM:OnEquip()`.

    ITEM.SingleUse = true

####<a href="#attachment" name="attachment">ITEM.Attachment</a>

**Required:** No  
**Type:** <span class="type">String</span>  
**Description:** Defines which model attachment to use for clientside model positioning.

    ITEM.Attachment = 'eyes'

####<a href="#bone" name="bone">ITEM.Bone</a>

**Required:** No  
**Type:** <span class="type">String</span>  
**Description:** Defines which model bone to use for clientside model positioning.

    ITEM.Bone = 'ValveBiped.Bip01_Head1'

####<a href="#no-preview" name="no-preview">ITEM.NoPreview</a>

**Required:** No  
**Type:** <span class="type">Boolean</span>  
**Description:** Enables or disables previews for the item.

    ITEM.NoPreview = true

####<a href="#admin-only" name="admin-only">ITEM.AdminOnly</a>

**Required:** No  
**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether the item should only be purchasable by admins.

    ITEM.AdminOnly = true

####<a href="#except" name="except">ITEM.Except</a>

**Required:** No  
**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether the item can be purchased when the player is dead/in spectator mode.

    ITEM.Except = true
