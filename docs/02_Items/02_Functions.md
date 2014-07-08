<p class="lead">Functions are events that are called on items, with (usually) the player who owns the item being the first argument, and then event specific extra arguments.</p>

####<a href="#onbuy" name="onbuy">ITEM:OnBuy(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player buys the item.

    function ITEM:OnBuy(ply)
        ply:Kill()
    end

####<a href="#onsell" name="onsell">ITEM:OnSell(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player sells the item.

    function ITEM:OnSell(ply)
        ply:Kill()
    end

####<a href="#on-equip" name="on-equip">ITEM:OnEquip(ply, modifications)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply, <span class="type">Table</span> modifications  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player equips the item.

    function ITEM:OnEquip(ply)
        PrintTable(modifications)
    end

####<a href="#on-holster" name="on-holster">ITEM:OnHolster(ply, modifications)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player holsters the item.

    function ITEM:OnEquip(ply)
        ply:Kill()
    end

####<a href="#on-modify" name="on-modify">ITEM:OnModify(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="server">Server</span>  
**Description:** Receives the modifications table from the client. The data is saved automatically.

    function ITEM:OnModify(ply, modifications)
    	PrintTable(modifications)
    	self:OnEquip(ply, modifications) -- adds the item back again
    end

####<a href="#can-player-buy" name="can-player-buy">ITEM:CanPlayerBuy(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Returns:** <span class="type">Boolean</span>  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to buy the item. Return true or false.

    function ITEM:CanPlayerBuy(ply)
        return ply:Alive() -- only if alive
    end

####<a href="#can-player-sell" name="can-player-sell">ITEM:CanPlayerSell(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Returns:** <span class="type">Boolean</span>  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to sell the item. Return true or false.

    function ITEM:CanPlayerSell(ply)
        return ply:Alive() -- only if alive
    end

####<a href="#can-player-equip" name="can-player-equip">ITEM:CanPlayerEquip(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Returns:** <span class="type">Boolean</span>  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to equip the item. Return true or false.

    function ITEM:CanPlayerEquip(ply)
        return ply:Alive() -- only if alive
    end

####<a href="#can-player-holster" name="can-player-holster">ITEM:CanPlayerHolster(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Returns:** <span class="type">Boolean</span>  
**Realm:** <span class="server">Server</span>  
**Description:** Called when the player tries to holster the item. Return true or false.

    function ITEM:CanPlayerHolster(ply)
        return ply:Alive() -- only if alive
    end

####<a href="#modify" name="modify">ITEM:Modify(modifications)</a>

**Required:** No  
**Arguments:** <span class="type">Table</span> modifications  
**Realm:** <span class="client">Client</span>  
**Description:** Called when the 'Modify' option is selected in the menu.

    function ITEM:Modify(modifications)
        PS:ShowColorChooser(self, modifications)
    end

####<a href="#modify-clientside-model" name="modify-clientside-model">ITEM:ModifyClientsideModel(ply, model, pos, ang)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply, <span class="type">CSModel</span> model, <span class="type">Vector</span> pos, <span class="type">Angle</span> ang   
**Returns:** <span class="type">CSModel</span>, <span class="type">Vector</span>, <span class="type">Angle</span>   
**Realm:** <span class="client">Client</span>  
**Description:** Called every frame to position hats and other attachments. Requires either `ITEM.Attachment` or `ITEM.Bone`, and `ITEM.Model`.

    function ITEM:ModifyClientsideModel(ply, model, pos, ang)
        pos = pos + (ang:Forward() * -2.2)
        ang:RotateAroundAxis(ang:Up(), -90)
        
        return model, pos, ang
    end
