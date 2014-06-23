<p class="lead">Functions are events that are called on items, with (usually) the player who owns the item being the first argument, and then event specific extra arguments.</p>

####<a name="onbuy"></a>ITEM:OnBuy(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player buys the item.

    function ITEM:OnBuy(ply)
        ply:Kill()
    end

####<a name="onsell"></a>ITEM:OnSell(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player sells the item.

    function ITEM:OnSell(ply)
        ply:Kill()
    end

####<a name="on-equip"></a>ITEM:OnEquip(ply, modifications)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply, <span class="type">Table</span> modifications  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player equips the item.

    function ITEM:OnEquip(ply)
        PrintTable(modifications)
    end

####<a name="on-holster"></a>ITEM:OnHolster(ply, modifications)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player holsters the item.

    function ITEM:OnEquip(ply)
        ply:Kill()
    end

####<a name="on-modify"></a>ITEM:OnModify(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Receives the modifications table from the client. The data is saved automatically.

    function ITEM:OnModify(ply, modifications)
    	PrintTable(modifications)
    	self:OnEquip(ply, modifications) -- adds the item back again
    end

####<a name="can-player-buy"></a>ITEM:CanPlayerBuy(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to buy the item. Return true or false.

    function ITEM:CanPlayerBuy(ply)
        return ply:Alive() -- only if alive
    end

####<a name="can-player-sell"></a>ITEM:CanPlayerSell(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to sell the item. Return true or false.

    function ITEM:CanPlayerSell(ply)
        return ply:Alive() -- only if alive
    end

####<a name="can-player-equip"></a>ITEM:CanPlayerEquip(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to equip the item. Return true or false.

    function ITEM:CanPlayerEquip(ply)
        return ply:Alive() -- only if alive
    end

####<a name="can-player-holster"></a>ITEM:CanPlayerHolster(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to holster the item. Return true or false.

    function ITEM:CanPlayerHolster(ply)
        return ply:Alive() -- only if alive
    end

####<a name="modify"></a>ITEM:Modify(modifications)

**Required:** No  
**Arguments:** <span class="type">Table</span> modifications  
**Realm:** <span class="client">Client</span>  
**Description:** Called when the 'Modify' option is selected in the menu.

    function ITEM:Modify(modifications)
        PS:ShowColorChooser(self, modifications)
    end

####<a name="modify-clientside-model"></a>ITEM:ModifyClientsideModel(ply, model, pos, ang)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply, <span class="type">CSModel</span> model, <span class="type">Vector</span> pos, <span class="type">Angle</span> ang   
**Realm:** <span class="client">Client</span>  
**Description:** Called every frame to position hats and other attachments. Requires either `ITEM.Attachment` or `ITEM.Bone`, and `ITEM.Model`.

    function ITEM:ModifyClientsideModel(ply, model, pos, ang)
        pos = pos + (ang:Forward() * -2.2)
        ang:RotateAroundAxis(ang:Up(), -90)
        
        return model, pos, ang
    end
