<p class="lead">Helpful clientside model-related functions.</p>

####<a name="meta-addclientsidemodel"></a>Player:PS_AddClientsideModel(ITEM, name)

**Arguments:** ITEM [<span class="type">Table</span> valid ITEM], name [<span class="type">String</span> key from ClientsideModels table in ITEM]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span>  
**Description:** Adds a Clientside Model to the player.

    ply:PS_AddClientsideModel(ITEM, 'test')

####<a name="meta-removeclientsidemodel"></a>Player:PS_RemoveClientsideModel(ITEM, name)

**Arguments:** ITEM [<span class="type">Table</span> valid ITEM], name [<span class="type">String</span> key from ClientsideModels table in ITEM]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span>  
**Description:** Removes a Clientside Model from the player.

    ply:PS_RemoveClientsideModel(ITEM, 'test')
