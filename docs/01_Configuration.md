<p class="lead">There are lots of configuration options available in pointshop. The page below describes the options and what they're used for. All configuration options are required.</p>

####<a name="data-provider"></a>PS.Config.DataProvider

**Type:** <span class="type">String</span>  
**Description:** Sets the [Data Provider](/configuration/data-providers) to use.

    PS.Config.DataProvider = 'pdata'

####<a name="branch"></a>PS.Config.Branch

**Type:** <span class="type">String</span>  
**Description:** Sets the url to check for updates from.

    PS.Config.Branch = 'https://raw.github.com/adamdburton/pointshop/master/'

####<a name="check-version"></a>PS.Config.CheckVersion

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether to check for updates.

    PS.Config.CheckVersion = true

####<a name="shop-key"></a>PS.Config.ShopKey

**Type:** <span class="type">String</span>  
**Description:** Sets the key to use for opening the PointShop menu.

    PS.Config.ShopKey = 'F3'

####<a name="shop-command"></a>PS.Config.ShopCommand

**Type:** <span class="type">String</span>  
**Description:** Sets the console to opening the PointShop menu.

    PS.Config.ShopCommand = 'ps_shop'

####<a name="shop-chat-command"></a>PS.Config.ShopChatCommand

**Type:** <span class="type">String</span>  
**Description:** Sets the chat command to open the PointShop menu.

    PS.Config.ShopChatCommand = '!shop'

####<a name="notify-on-join"></a>PS.Config.NotifyOnJoin

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether to nofify players how to open the PointShop menu when the join.

    PS.Config.NotifyOnJoin = true

####<a name="points-over-time"></a>PS.Config.PointsOverTime

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether to give points to player whilst they are in the server, on a timer.

    PS.Config.PointsOverTime = true

####<a name="points-over-time-delay"></a>PS.Config.PointsOverTimeDelay

**Type:** <span class="type">Number</span>  
**Description:** Sets the delay between giving points to connected players, in minutes.

    PS.Config.PointsOverTimeDelay = 1

####<a name="points-over-time-amount"></a>PS.Config.PointsOverTimeAmount

**Type:** <span class="type">Number</span>  
**Description:** Sets the number of points to give after the PS.Config.PointsOverTimeDelay.

    PS.Config.PointsOverTimeAmount = 1

####<a name="admin-can-access-admin-tab"></a>PS.Config.AdminCanAccessAdminTab

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether Admins can access the administration tab in the PointShop menu.

    PS.Config.AdminCanAccessAdminTab = true

####<a name="super-admin-can-access-admin-tab"></a>PS.Config.SuperAdminCanAccessAdminTab

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether Super Admins can access the administration tab in the PointShop menu.

    PS.Config.SuperAdminCanAccessAdminTab = true

####<a name="can-players-give-points"></a>PS.Config.CanPlayersGivePoints

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether players can give their points to other players.

    PS.Config.CanPlayersGivePoints = true

####<a name="display-preview-in-menu"></a>PS.Config.DisplayPreviewInMenu

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether the hovering items in the PointShop menu shows a preview.

    PS.Config.DisplayPreviewInMenu = true

####<a name="points-name"></a>PS.Config.PointsName

**Type:** <span class="type">String</span>  
**Description:** Sets the name of points. Used in the PointShop menu and all notifications.

    PS.Config.PointsName = 'Points'

####<a name="sort-items-by"></a>PS.Config.SortItemsBy

**Type:** <span class="type">String</span>  
**Description:** Sets the field to sort items by in the PointShop menu.

    PS.Config.SortItemsBy = 'Name'

####<a name="calculate-buy-price"></a>PS.Config.CalculateBuyPrice

**Arguments:** <span class="type">Player</span> ply, <span class="type">ITEM</span> item  
**Realm:** <span class="server">Server</span>  
**Type:** <span class="type">Function</span>  
**Description:** Calculate the price a player should be charged to buy an item.

    PS.Config.CalculateBuyPrice = function(ply, item)
        return item.Price
    end

####<a name="calculate-sell-price"></a>PS.Config.CalculateSellPrice

**Arguments:** <span class="type">Player</span> ply, <span class="type">ITEM</span> item  
**Realm:** <span class="server">Server</span>  
**Type:** <span class="type">Function</span>  
**Description:** Calculate the price a player can sell an item for.

    PS.Config.CalculateSellPrice = function(ply, item)
        return math.Round(item.Price * 0.75)
    end
