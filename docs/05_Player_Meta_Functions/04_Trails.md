<p class="lead">Helpful clientside model-related functions.</p>

<p class="error"><i class="fa fa-exclamation-circle"></i> These functions do not exist in the current version of PointShop and will be added in a future release.</p>

####<a href="#add-trail" name="add-trail">Player:PS_AddTrail(ITEM, name, color)</a>

**Arguments:** <span class="type">Table</span> ITEM, <span class="type">String</span> name, <span class="type">Color</span> color  
**Realm:** <span class="server">Server</span>  
**Description:** Adds a trail to the player.

    ply:PS_AddTrail(ITEM, 'test', Color(255, 0, 0, 0))

####<a href="#remove-trail" name="remove-trail">Player:PS_RemoveTrail(ITEM, name)</a>

**Arguments:** <span class="type">Table</span> ITEM, <span class="type">String</span> name  
**Realm:** <span class="server">Server</span>  
**Description:** Removes a trail from the player.

    ply:PS_RemoveTrail(ITEM, 'test')
