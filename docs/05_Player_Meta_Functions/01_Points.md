<p class="lead">These functions can be called at any time and are used for the base functionality in PointShop.</p>

####<a href="#give-points" name="give-points">Player:PS_GivePoints(points)</a>

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="server">Server</span>  
**Description:** Gives points to the player.

    ply:PS_GivePoints(10)

####<a href="#take-points" name="take-points">Player:PS_TakePoints(points)</a>

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="server">Server</span>  
**Description:** Takes points from the player.

    ply:PS_TakePoints(10)

####<a href="#take-points" name="take-points">Player:PS_SetPoints(points)</a>

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="server">Server</span>  
**Description:** Sets the players points.

    ply:PS_SetPoints(10)

####<a href="#get-points" name="get-points">Player:PS_GetPoints()</a>

**Realm:** <span class="shared">Shared</span>  
**Description:** Returns the amount of points the player has.

    local points = ply:PS_GetPoints()

####<a href="#get-points" name="get-points">Player:PS_HasPoints(points)</a>

**Arguments:** <span class="type">Number</span> points  
**Realm:** <span class="shared">Shared</span>  
**Description:** Returns whether the player has at least the amount of points.

    local can_afford = ply:PS_HasPoints(10)
