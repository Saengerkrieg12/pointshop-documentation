<p class="lead">These functions are called internally and shouldn't be called otherwise unless required.</p>

####<a href="#player-initial-spawn" name="player-initial-spawn">Player:PS_PlayerInitialSpawn()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Called when the player first joins the server to send their points and items.

    ply:PS_PlayerInitialSpawn()

####<a href="#player-spawn" name="player-spawn">Player:PS_PlayerSpawn()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Called each time the player spawns to re-equip any items.

    ply:PS_PlayerSpawn()

####<a href="#player-death" name="player-death">Player:PS_PlayerDeath()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Called each time the player dies to holster any equipped items.

    ply:PS_PlayerDeath()

####<a href="#player-disconnected" name="player-disconnected">Player:PS_PlayerDisconnected()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Called when the player leaves the server to save their points and items.

    ply:PS_PlayerDisconnected()
