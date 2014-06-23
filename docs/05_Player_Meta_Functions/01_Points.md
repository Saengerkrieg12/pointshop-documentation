<p class="lead">These functions can be called at any time and are used for the base functionality in PointShop.</p>

####<a name="give-points"></a>Player:PS_GivePoints(points)

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="server">Server</span>  
**Description:** Gives points to the player.

    ply:PS_GivePoints(10)

####<a name="take-points"></a>Player:PS_TakePoints(points)

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="server">Server</span>  
**Description:** Takes points from the player.

    ply:PS_TakePoints(10)

####<a name="take-points"></a>Player:PS_SetPoints(points)

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="server">Server</span>  
**Description:** Sets the players points.

    ply:PS_SetPoints(10)

####<a name="get-points"></a>Player:PS_GetPoints()

**Realm:** <span class="shared">Shared</span>  
**Description:** Returns the amount of points the player has.

    local points = ply:PS_GetPoints()

####<a name="get-points"></a>Player:PS_HasPoints(points)

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns whether the player has at least the amount of points.

    local can_afford = ply:PS_HasPoints(10)
