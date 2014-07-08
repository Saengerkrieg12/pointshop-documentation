<p class="lead">These functions are used internally to load, save, and send data.</p>

####<a href="#save" name="save">Player:PS_Save()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Saves the players points and items.

    ply:PS_Save()

####<a href="#load-data" name="load-data">Player:PS_LoadData()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Loads the players points and items from the database.

    ply:PS_LoadData()

####<a href="#send-points" name="send-points">Player:PS_SendPoints()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player their points data.

    ply:PS_SendPoints()

####<a href="#send-item" name="send-item">Player:PS_SendItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item_id  
**Realm:** <span class="server">Server</span>  
**Description:** Sends the player an items data.

    ply:PS_SendItem('conehat')

####<a href="#send-items" name="send-items">Player:PS_SendItems()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player their items data.

    ply:PS_SendItems()

####<a href="#send-clientside-models" name="send-clientside-models">Player:PS_SendClientsideModels()</a>

**Realm:** <span class="server">Server</span>  
**Description:** Sends the player clientside model data.

    ply:PS_SendClientsideModels()
