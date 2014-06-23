<p class="lead">Properties define how a category should look and behave.</p>

####<a name="properties-name"></a>CATEGORY.Name

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The categories name used on the tab in the menu.

    CATEGORY.Name = "Heads, Hats & Masks"

####<a name="properties-icon"></a>CATEGORY.Icon

**Required:** Yes  
**Type:** <span class="type">String</span> - valid material part  
**Description:** The icon used for the tab in the menu.

    CATEGORY.Icon = "emoticon_smile"

####<a name="properties-allowequipped"></a>CATEGORY.AllowedEquipped

**Required:** No, defaults to -1  
**Type:** <span class="type">Number</span> - greater or equal to -1  
**Description:** The number of items from this category a player can have equipped at once.

    CATEGORY.AllowedEquipped = 2

####<a name="properties-allowedusergroups"></a>CATEGORY.AllowedUserGroups

**Required:** No  
**Type:** <span class="type">Table</span> - containing valid user groups  
**Description:** Defines the member groups who can see and buy items from this category.

    CATEGORY.AllowedUserGroups = { "admin", "vip" }
