<p class="lead">Hooks can be any hook available in the base gamemode, along with any for the gamemode you're running, for example sandbox.</p>

Hooks are always called in items with the player who has the item as the first argument, the modifiers for that item as the second argument, and then the rest of the default arguments for that hook.

<p class="info"><i class="fa fa-info-circle"></i> Hooks should <strong>not</strong> be defined with hook.Add, but instead as part of the item itself.</p>

For example:

    function ITEM:PlayerSpawn(ply, modifications)
        ply:PS_Notify('You have respawned!')
    end

Another example with two ply arguments (ply and ply2) because the hook passes in the player object too.

    function ITEM:CalcView(ply, modifications, ply2, origin, angles, fov, nearZ, farZ)
        local view = {}

        view.origin = pos - (angles:Forward()*100)
        view.angles = angles
        view.fov = fov

        return view
    end

And another. This hook does not have any of it's own arguments, so only the two added by PointShop are available.

    function ITEM:ShouldDrawLocalPlayer(ply, modifications)
        return true
    end
