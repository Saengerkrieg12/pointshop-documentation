<p class="lead">These functions can be called at any time and are used for the base functionality in PointShop.</p>

####<a name="meta-givepoints"></a>Player:PS_GivePoints(points)

**Arguments:** points [number]  
**Realm:** <span class="server">Server</span>  
**Description:** Gives points to the player.

    ply:PS_GivePoints(10)

####<a name="meta-takepoints"></a>Player:PS_TakePoints(points)

**Arguments:** points [number]  
**Realm:** <span class="server">Server</span>  
**Description:** Takes points from the player.

    ply:PS_TakePoints(10)

####<a name="meta-takepoints"></a>Player:PS_SetPoints(points)

**Arguments:** points [number]  
**Realm:** <span class="server">Server</span>  
**Description:** Sets the players points.

    ply:PS_SetPoints(10)

####<a name="meta-getpoints"></a>Player:PS_GetPoints()

**Realm:** <span class="server">Server</span>, <span class="client">Client</span> (LocalPlayer only)  
**Description:** Returns the amount of points the player has.

    local points = ply:PS_GetPoints()

####<a name="meta-getpoints"></a>Player:PS_HasPoints(points)

**Arguments:** points [number]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span> (LocalPlayer only)  
**Description:** Returns whether the player has at least the amount of points.

    local can_afford = ply:PS_HasPoints(10)
