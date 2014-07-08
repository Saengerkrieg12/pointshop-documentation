<p class="lead">Properties define how a category should look and behave.</p>

####<a href="#name" name="name">CATEGORY.Name</a>

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The categories name used on the tab in the menu.

    CATEGORY.Name = 'Heads, Hats & Masks'

####<a href="#icon" name="icon">CATEGORY.Icon</a>

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** The icon used for the tab in the menu.

    CATEGORY.Icon = 'emoticon_smile'

####<a href="#allow-equipped" name="allow-equipped">CATEGORY.AllowedEquipped</a>

**Required:** No, defaults to -1  
**Type:** <span class="type">Number</span>  
**Description:** The number of items from this category a player can have equipped at once.

    CATEGORY.AllowedEquipped = 2

####<a href="#allowed-user-groups" name="allowed-user-groups">CATEGORY.AllowedUserGroups</a>

**Required:** No  
**Type:** <span class="type">Table</span>  
**Description:** Defines the member groups who can see and buy items from this category.

    CATEGORY.AllowedUserGroups = { "admin", "vip" }

####<a href="#order" name="order">CATEGORY.Order</a>

**Required:** No  
**Type:** <span class="type">Number</span>  
**Description:** Sets the display order for category tabs in the PointShop menu.

    CATEGORY.Order = 6
