<p class="lead">Functions are events that are called on items, with (usually) the player who owns the item being the first argument, and then event specific extra arguments.</p>

####<a name="functions-onbuy"></a>CATEGORY:CanPlayerSee(ply)

**Arguments:** ply [player]  
**Realm:** <span class="server">Server</span>, <span class="client">Client</span> (LocalPlayer only)  
**Required:** No  
**Description:** Called when adding tabs to the menu and when buying an item.

    function CATEGORY:CanPlayerSee(ply)
        return ply:IsAdmin() -- Only admins
    end
