<p class="lead">Helpful utility functions that don't fit any other section.</p>

####<a name="can-perform-action"></a>Player:PS_CanPerformAction()

**Realm:** <span class="server">Server</span>  
**Description:** Determines if the player should be able to perform PointShop actions.

    local can_buy_item = ply:PS_CanPerformAction()

####<a name="toggle-menu"></a>Player:PS_ToggleMenu()

**Realm:** <span class="server">Server</span>  
**Description:** Toggles the PointShop menu for the player.

    ply:PS_ToggleMenu()

####<a name="notify"></a>Player:PS_Notify(...)

**Arguments:** <span class="type">Any</span> ...  
**Realm:** <span class="server">Server</span>  
**Description:** Sends a notification to the player.

    ply:PS_Notify('You have been give', 10, 'points for playing on the server!')

####<a name="get-user-group"></a>Player:PS_GetUsergroup()

**Realm:** <span class="shared">Shared</span>  
**Description:** Returns the players user group, with support for admin mods.

    local usergroup = ply:PS_GetUsergroup()
