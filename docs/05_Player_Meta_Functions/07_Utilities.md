<p class="lead">Helpful utility functions that don't fit any other section.</p>

####<a href="#can-perform-action" name="can-perform-action">Player:PS_CanPerformAction()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Determines if the player should be able to perform PointShop actions.

    local can_buy_item = ply:PS_CanPerformAction()

####<a href="#toggle-menu" name="toggle-menu">Player:PS_ToggleMenu()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Toggles the PointShop menu for the player.

    ply:PS_ToggleMenu()

####<a href="#notify" name="notify">Player:PS_Notify(...)</a>

**Arguments:** <span class="type">Any</span> ...  
**Realm:** <span class="server">Server</span>  
**Description:** Sends a notification to the player.

    ply:PS_Notify('You have been give', 10, 'points for playing on the server!')

####<a href="#get-user-group" name="get-user-group">Player:PS_GetUsergroup()</a>

**Realm:** <span class="shared">Shared</span>  
**Description:** Returns the players user group, with support for admin mods.

    local usergroup = ply:PS_GetUsergroup()
