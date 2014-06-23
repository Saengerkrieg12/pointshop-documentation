<p class="lead">Properties define how a category should look and behave.</p>

####<a name="name"></a>CATEGORY.Name

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The categories name used on the tab in the menu.

    CATEGORY.Name = 'Heads, Hats & Masks'

####<a name="icon"></a>CATEGORY.Icon

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The icon used for the tab in the menu.

    CATEGORY.Icon = 'emoticon_smile'

####<a name="allow-equipped"></a>CATEGORY.AllowedEquipped

**Required:** No, defaults to -1  
**Type:** <span class="type">Number</span>  
**Description:** The number of items from this category a player can have equipped at once.

    CATEGORY.AllowedEquipped = 2

####<a name="allowed-user-groups"></a>CATEGORY.AllowedUserGroups

**Required:** No  
**Type:** <span class="type">Table</span>  
**Description:** Defines the member groups who can see and buy items from this category.

    CATEGORY.AllowedUserGroups = { "admin", "vip" }
