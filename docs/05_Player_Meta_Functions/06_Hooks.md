<p class="lead">These functions are called internally and shouldn't be called otherwise unless required.</p>

####<a name="player-initial-spawn"></a>Player:PS_PlayerInitialSpawn()

**Realm:** <span class="server">Server</span>  
**Description:** Called when the player first joins the server to send their points and items.

    ply:PS_PlayerInitialSpawn()

####<a name="player-spawn"></a>Player:PS_PlayerSpawn()

**Realm:** <span class="server">Server</span>  
**Description:** Called each time the player spawns to re-equip any items.

    ply:PS_PlayerSpawn()

####<a name="player-death"></a>Player:PS_PlayerDeath()

**Realm:** <span class="server">Server</span>  
**Description:** Called each time the player dies to holster any equipped items.

    ply:PS_PlayerDeath()

####<a name="player-disconnected"></a>Player:PS_PlayerDisconnected()

**Realm:** <span class="server">Server</span>  
**Description:** Called when the player leaves the server to save their points and items.

    ply:PS_PlayerDisconnected()