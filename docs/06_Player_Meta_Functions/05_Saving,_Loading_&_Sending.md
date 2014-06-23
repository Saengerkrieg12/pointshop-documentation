<p class="lead">These functions are used internally to load, save, and send data.</p>

####<a name="meta-save"></a>Player:PS_Save()

**Realm:** <span class="server">Server</span>  
**Description:** Saves the players points and items.

    ply:PS_Save()

####<a name="meta-loaddata"></a>Player:PS_LoadData()

**Realm:** <span class="server">Server</span>  
**Description:** Loads the players points and items from the database.

    ply:PS_LoadData()

####<a name="meta-sendpoints"></a>Player:PS_SendPoints()

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player their points data.

    ply:PS_SendPoints()

####<a name="meta-senditem"></a>Player:PS_SendItem(item\_id)

**Arguments:** item_id [string - valid item\_id]  
**Realm:** <span class="server">Server</span>  
**Description:** Sends the player an items data.

    ply:PS_SendItem('conehat')

####<a name="meta-senditems"></a>Player:PS_SendItems()

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player their items data.

    ply:PS_SendItems()

####<a name="meta-sendclientsidemodels"></a>Player:PS_SendClientsideModels()

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player clientside model data.

    ply:PS_SendClientsideModels()
