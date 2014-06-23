<p class="lead">These functions are used internally to load, save, and send data.</p>

####<a name="save"></a>Player:PS_Save()

**Realm:** <span class="server">Server</span>  
**Description:** Saves the players points and items.

    ply:PS_Save()

####<a name="load-data"></a>Player:PS_LoadData()

**Realm:** <span class="server">Server</span>  
**Description:** Loads the players points and items from the database.

    ply:PS_LoadData()

####<a name="send-points"></a>Player:PS_SendPoints()

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player their points data.

    ply:PS_SendPoints()

####<a name="send-item"></a>Player:PS_SendItem(item\_id)

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Sends the player an items data.

    ply:PS_SendItem('conehat')

####<a name="send-items"></a>Player:PS_SendItems()

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player their items data.

    ply:PS_SendItems()

####<a name="send-clientside-models"></a>Player:PS_SendClientsideModels()

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player clientside model data.

    ply:PS_SendClientsideModels()
