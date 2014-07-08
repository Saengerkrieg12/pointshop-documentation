<p class="lead">You can develop your own Data Provider if the default ones do not match your requirements. You could create a provider that interacts with a web service, for example.</p>

####<a href="#fallback" name="fallback">PROVIDER.Fallback</a>

**Required:** Yes  
**Type:** <span class="type">String</span>  
**Description:** Sets the Data Provider to fall back to should this provider fail.

    PROVIDER.Fallback = 'pdata'

####<a href="#get-data" name="get-data">PROVIDER:GetData(ply, callback)</a>

**Required:** Yes  
**Arguments:** <span class="type">Player</span> ply, <span class="type">Function</span> callback  
**Realm:** <span class="server">Server</span>  
**Description:** Called when PointShop requests data for a player that has joined.

    function PROVIDER:GetData(ply, callback)
        callback(10, {}) -- returns 10 points and no items
    end

####<a href="#set-data" name="set-data">PROVIDER:SetData(ply, points, items)</a>

**Required:** Yes  
**Arguments:** <span class="type">Player</span> ply, <span class="type">Number</span> points, <span class="type">Table</span> items  
**Realm:** <span class="server">Server</span>  
**Description:** Called when PointShop requests that data is saved.

    function PROVIDER:SetData(ply, points, items)
        MsgN('Saving data for player', ply:Nick(), points, util.TableToJSON(items)) -- Outputs the data to the console.
    end
