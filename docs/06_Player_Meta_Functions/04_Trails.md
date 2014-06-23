<p class="lead">Helpful clientside model-related functions.</p>

####<a name="meta-addtrail"></a>Player:PS_AddTrail(ITEM, name, color)

**Arguments:** ITEM [table - valid ITEM], name [string - key from ClientsideModels table in ITEM], color [Color]  
**Realm:** <span class="server">Server</span>  
**Description:** Adds a trail to the player.

    ply:PS_AddTrail(ITEM, 'test', Color(255, 0, 0, 0))

####<a name="meta-removetrail"></a>Player:PS_RemoveTrail(ITEM, name)

**Arguments:** ITEM [table - valid ITEM], name [string - key from ClientsideModels table in ITEM]  
**Realm:** <span class="server">Server</span>  
**Description:** Removes a trail from the player.

    ply:PS_RemoveTrail(ITEM, 'test')
