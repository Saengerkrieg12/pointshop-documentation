<p class="lead">Helpful clientside model-related functions.</p>

####<a name="add-trail"></a>Player:PS_AddTrail(ITEM, name, color)

**Arguments:** <span class="type">Table</span> ITEM, <span class="type">String</span> name, <span class="type">Color</span> color  
**Realm:** <span class="server">Server</span>  
**Description:** Adds a trail to the player.

    ply:PS_AddTrail(ITEM, 'test', Color(255, 0, 0, 0))

####<a name="remove-trail"></a>Player:PS_RemoveTrail(ITEM, name)

**Arguments:** <span class="type">Table</span> ITEM, <span class="type">String</span> name  
**Realm:** <span class="server">Server</span>  
**Description:** Removes a trail from the player.

    ply:PS_RemoveTrail(ITEM, 'test')
