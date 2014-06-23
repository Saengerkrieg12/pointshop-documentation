<p class="lead">Functions are events that are called on items, with (usually) the player who owns the item being the first argument, and then event specific extra arguments.</p>

####<a name="can-player-see"></a>CATEGORY:CanPlayerSee(ply)

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="shared">Shared</span>  
**Description:** Called when adding tabs to the menu and when buying an item.

    function CATEGORY:CanPlayerSee(ply)
        return ply:IsAdmin() -- Only admins
    end

####<a name="modify-tab"></a>CATEGORY:ModifyTab(tab)

**Required:** No  
**Arguments:** <span class="type">DPanel</span> tab  
**Realm:** <span class="client">Client</span>  
**Description:** Called when the tab is added to the PointShop menu.

    function CATEGORY:ModifyTab(tab)
        local button = vgui.Create('DButton', tab)
        
        button:SetText('Click me!')
        button:Dock(BOTTOM)
        
        button.DoClick = function()
            Derma_Message('You clicked the button!', 'CLICKED', 'OK')
        end
    end
