<p class="lead">Properties define how an item works and who it should be available to. Some are used to show the item in the menu, whilst others are used to restrict items to specific groups.</p>

####<a name="properties-name"></a>ITEM.Name

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The items name in the shop.

    ITEM.Name = "Test Item"

####<a name="properties-price"></a>ITEM.Price

**Required:** Yes  
**Type:** <span class="type">Number</span>  
**Description:** How much should this item cost to buy?

    ITEM.Price = 200

####<a name="properties-model"></a>ITEM.Model

**Required:** No, unless ITEM.Material is not defined  
**Type:** <span class="type">String</span> valid model path  
**Description:** The model shown in the shop gui. Either Model or Material is required.

    ITEM.Model = "models/player/kleiner.mdl"

####<a name="properties-material"></a>ITEM.Material

**Required:** No, unless ITEM.Model is not defined  
**Type:** <span class="type">String</span> valid material path  
**Description:** The material shown in the shop gui. Either Material or Model is required.

    ITEM.Material = "trails/electric.vmt"

####<a name="properties-skin"></a>ITEM.Skin

**Required:** No  
**Type:** <span class="type">Number</span> valid Skin from ITEM.Model  
**Description:** Sets the skin of the model shown in the shop gui.

    ITEM.Skin = 1

####<a name="properties-allowed-user-groups"></a>ITEM.AllowedUserGroups

**Required:** No  
**Type:** <span class="type">Table</span> containing valid user groups  
**Description:** Defines the member groups who's members can buy this item.

    ITEM.AllowedUserGroups = { "admin", "vip" }

####<a name="properties-singleuse"></a>ITEM.SingleUse

**Required:** No  
**Type:** <span class="type">Boolean</span> true or false  
**Description:** Defines if the item should be given to the player but not kept. Good for weapons.

    ITEM.SingleUse = true

####<a name="properties-attachment"></a>ITEM.Attachment

**Required:** No  
**Type:** <span class="type">String</span> valid attachment from ITEM.Model  
**Description:** Attaches the clientside model to this attachment on the player if this item is added as a hat.

    ITEM.Attachment = "eyes"

####<a name="properties-bone"></a>ITEM.Bone

**Required:** No  
**Type:** <span class="type">String</span> valid bone from ITEM.Model  
**Description:** Attaches the clientside model to this bone on the player if this item is added as a hat.

    ITEM.Bone = "ValveBiped.Bip01_Head1"

####<a name="properties-nopreview"></a>ITEM.NoPreview

**Required:** No  
**Type:** <span class="type">Boolean</span> true or false  
**Description:** Enables or disables previews for an item.

    ITEM.NoPreview = true
