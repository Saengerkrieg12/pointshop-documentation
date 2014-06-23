<p class="lead">Properties define how an item works and who it should be available to. Some are used to show the item in the menu, whilst others are used to restrict items to specific groups.</p>

####<a name="name"></a>ITEM.Name

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The items name in the shop.

    ITEM.Name = 'Test Item'

####<a name="price"></a>ITEM.Price

**Required:** Yes  
**Type:** <span class="type">Number</span>  
**Description:** How much should this item cost to buy?

    ITEM.Price = 200

####<a name="model"></a>ITEM.Model

**Required:** No, unless ITEM.Material is not defined  
**Type:** <span class="type">String</span>  
**Description:** The model shown in the shop gui. Either `ITEM.Model` or `ITEM.Material` is required.

    ITEM.Model = 'models/player/kleiner.mdl'

####<a name="material"></a>ITEM.Material

**Required:** No, unless ITEM.Model is not defined  
**Type:** <span class="type">String</span>  
**Description:** The material shown in the shop gui. Either `ITEM.Model` or `ITEM.Material` is required.

    ITEM.Material = 'trails/electric.vmt'

####<a name="skin"></a>ITEM.Skin

**Required:** No  
**Type:** <span class="type">Number</span>  
**Description:** Sets the skin of the model shown in the shop gui.

    ITEM.Skin = 1

####<a name="allowed-user-groups"></a>ITEM.AllowedUserGroups

**Required:** No  
**Type:** <span class="type">Table</span>  
**Description:** Defines the member groups who's members can buy this item.

    ITEM.AllowedUserGroups = { "admin", "vip" }

####<a name="single-use"></a>ITEM.SingleUse

**Required:** No  
**Type:** <span class="type">Boolean</span>  
**Description:** Defines if the item should be given to the player but not kept. Good for weapons.

    ITEM.SingleUse = true

####<a name="attachment"></a>ITEM.Attachment

**Required:** No  
**Type:** <span class="type">String</span>  
**Description:** Attaches the clientside model to this attachment on the player if this item is added as a hat.

    ITEM.Attachment = 'eyes'

####<a name="bone"></a>ITEM.Bone

**Required:** No  
**Type:** <span class="type">String</span>  
**Description:** Attaches the clientside model to this bone on the player if this item is added as a hat.

    ITEM.Bone = 'ValveBiped.Bip01_Head1'

####<a name="nopreview"></a>ITEM.NoPreview

**Required:** No  
**Type:** <span class="type">Boolean</span>
**Description:** Enables or disables previews for an item.

    ITEM.NoPreview = true
