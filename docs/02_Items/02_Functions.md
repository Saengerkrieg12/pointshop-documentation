<p class="lead">Functions are events that are called on items, with (usually) the player who owns the item being the first argument, and then event specific extra arguments.</p>

####<a name="functions-onbuy"></a>ITEM:OnBuy(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player buys the item.

    function ITEM:OnBuy(ply)
        ply:Kill()
    end

####<a name="functions-onsell"></a>ITEM:OnSell(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player sells the item.

    function ITEM:OnSell(ply)
        ply:Kill()
    end

####<a name="functions-onequip"></a>ITEM:OnEquip(ply, modifications)

**Arguments:** <span class="type">Player</span> ply, <span class="type">Table</span> modifications  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player equips the item.

    function ITEM:OnEquip(ply)
        PrintTable(modifications)
    end

####<a name="functions-onholster"></a>ITEM:OnHolster(ply, modifications)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player holsters the item.

    function ITEM:OnEquip(ply)
        ply:Kill()
    end

####<a name="functions-onmodify"></a>ITEM:OnModify(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Receives the modifications table from the client. The data is saved automatically.

    function ITEM:OnModify(ply, modifications)
    	PrintTable(modifications)
    	self:OnEquip(ply, modifications) -- adds the item back again
    end

####<a name="functions-canplayerbuy"></a>ITEM:CanPlayerBuy(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player tries to buy the item. Return true or false.

    function ITEM:CanPlayerBuy(ply)
        return ply:Alive() -- only if alive
    end

####<a name="functions-canplayersell"></a>ITEM:CanPlayerSell(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player tries to sell the item. Return true or false.

    function ITEM:CanPlayerSell(ply)
        return ply:Alive() -- only if alive
    end

####<a name="functions-canplayerequip"></a>ITEM:CanPlayerEquip(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player tries to equip the item. Return true or false.

    function ITEM:CanPlayerEquip(ply)
        return ply:Alive() -- only if alive
    end

####<a name="functions-canplayerholster"></a>ITEM:CanPlayerHolster(ply)

**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Required:** No  
**Description:** Called when the player tries to holster the item. Return true or false.

    function ITEM:CanPlayerHolster(ply)
        return ply:Alive() -- only if alive
    end

####<a name="functions-modify"></a>ITEM:Modify(modifications)

**Arguments:** <span class="type">Table</span> modifications  
**Realm:** <span class="client">Client</span>  
**Required:** No  
**Description:** Called when the 'Modify' option is selected in the menu.

    function ITEM:Modify(modifications)
        PS:ShowColorChooser(self, modifications)
    end
