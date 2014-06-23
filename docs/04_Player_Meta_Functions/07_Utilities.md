<p class="lead">Helpful utility functions that don't fit any other section.</p>

####<a name="meta-canperformaction"></a>Player:PS_CanPerformAction()

**Realm:** <span class="server">Server</span>  
**Description:** Determines if the player should be able to perform PointShop actions.

    local can_buy_item = ply:PS_CanPerformAction()

####<a name="meta-togglemenu"></a>Player:PS_ToggleMenu(open)

**Arguments:** open [<span class="type">Boolean</span>, optional]  
**Realm:** <span class="server">Server</span>  
**Description:** Toggles the PointShop menu for the player, or forces using the argument

    ply:PS_ToggleMenu()

####<a name="meta-notify"></a>Player:PS_Notify(...)

**Arguments:** ... [<span class="type">Any</span>]  
**Realm:** <span class="server">Server</span>  
**Description:** Sends a notification to the player.

    ply:PS_Notify('You have been give', 10, 'points for playing on the server!')

####<a name="meta-getusergroup"></a>Player:PS_GetUsergroup()

**Realm:** <span class="server">Server</span>, <span class="client">Client</span>  
**Description:** Returns the players user group, with support for admin mods.

    local usergroup = ply:PS_GetUsergroup()

####<a name="meta-canmanagepointshop"></a>Player:PS_CanManagePointShop()

**Realm:** <span class="server">Server</span>, <span class="client">Client</span>  
**Description:** Returns whether the player can manage PointShop.

    local can_manage = ply:PS_CanManagePointShop()
