<p class="lead">Functions are events that are called on items, with (usually) the player who owns the item being the first argument, and then event specific extra arguments.</p>

####<a href="#can-player-see" name="can-player-see">CATEGORY:CanPlayerSee(ply)</a>

**Required:** No  
**Arguments:** <span class="type">Player</span> ply  
**Realm:** <span class="shared">Shared</span>  
**Description:** Called when adding tabs to the menu and when buying an item.

    function CATEGORY:CanPlayerSee(ply)
        return ply:IsAdmin() -- Only admins
    end

####<a href="#modify-tab" name="modify-tab">CATEGORY:ModifyTab(tab)</a>

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
