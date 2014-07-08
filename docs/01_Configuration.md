<p class="lead">There are lots of configuration options available in PointShop. The page below describes the options and what they're used for. All configuration options are required.</p>

####<a href="#data-provider" name="data-provider">PS.Config.DataProvider</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the [Data Provider](/configuration/data-providers) to use.

    PS.Config.DataProvider = 'pdata'

####<a href="#branch" name="branch">PS.Config.Branch</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the url to check for updates from.

    PS.Config.Branch = 'https://raw.github.com/adamdburton/pointshop/master/'

####<a href="#check-version" name="check-version">PS.Config.CheckVersion</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether to check for updates.

    PS.Config.CheckVersion = true

####<a href="#shop-key" name="shop-key">PS.Config.ShopKey</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the key to use for opening the PointShop menu.

    PS.Config.ShopKey = 'F3'

####<a href="#shop-command" name="shop-command">PS.Config.ShopCommand</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the console to opening the PointShop menu.

    PS.Config.ShopCommand = 'ps_shop'

####<a href="#shop-chat-command" name="shop-chat-command">PS.Config.ShopChatCommand</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the chat command to open the PointShop menu.

    PS.Config.ShopChatCommand = '!shop'

####<a href="#notify-on-join" name="notify-on-join">PS.Config.NotifyOnJoin</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether to nofify players how to open the PointShop menu when the join.

    PS.Config.NotifyOnJoin = true

####<a href="#points-over-time" name="points-over-time">PS.Config.PointsOverTime</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether to give points to player whilst they are in the server, on a timer.

    PS.Config.PointsOverTime = true

####<a href="#points-over-time-delay" name="points-over-time-delay">PS.Config.PointsOverTimeDelay</a>

**Type:** <span class="type">Number</span>  
**Description:** Sets the delay between giving points to connected players, in minutes.

    PS.Config.PointsOverTimeDelay = 1

####<a href="#points-over-time-amount" name="points-over-time-amount">PS.Config.PointsOverTimeAmount</a>

**Type:** <span class="type">Number</span>  
**Description:** Sets the number of points to give after the PS.Config.PointsOverTimeDelay.

    PS.Config.PointsOverTimeAmount = 1

####<a href="#admin-can-access-admin-tab" name="admin-can-access-admin-tab">PS.Config.AdminCanAccessAdminTab</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether Admins can access the administration tab in the PointShop menu.

    PS.Config.AdminCanAccessAdminTab = true

####<a href="#super-admin-can-access-admin-tab" name="super-admin-can-access-admin-tab">PS.Config.SuperAdminCanAccessAdminTab</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether Super Admins can access the administration tab in the PointShop menu.

    PS.Config.SuperAdminCanAccessAdminTab = true

####<a href="#can-players-give-points" name="can-players-give-points">PS.Config.CanPlayersGivePoints</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether players can give their points to other players.

    PS.Config.CanPlayersGivePoints = true

####<a href="#display-preview-in-menu" name="display-preview-in-menu">PS.Config.DisplayPreviewInMenu</a>

**Type:** <span class="type">Boolean</span>  
**Description:** Sets whether the hovering items in the PointShop menu shows a preview.

    PS.Config.DisplayPreviewInMenu = true

####<a href="#points-name" name="points-name">PS.Config.PointsName</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the name of points. Used in the PointShop menu and all notifications.

    PS.Config.PointsName = 'Points'

####<a href="#sort-items-by" name="sort-items-by">PS.Config.SortItemsBy</a>

**Type:** <span class="type">String</span>  
**Description:** Sets the field to sort items by in the PointShop menu.

    PS.Config.SortItemsBy = 'Name'

####<a href="#calculate-buy-price" name="calculate-buy-price">PS.Config.CalculateBuyPrice</a>

**Arguments:** <span class="type">Player</span> ply, <span class="type">ITEM</span> item  
**Realm:** <span class="server">Server</span>  
**Type:** <span class="type">Function</span>  
**Description:** Calculate the price a player should be charged to buy an item.

    PS.Config.CalculateBuyPrice = function(ply, item)
        return item.Price
    end

####<a href="#calculate-sell-price" name="calculate-sell-price">PS.Config.CalculateSellPrice</a>

**Arguments:** <span class="type">Player</span> ply, <span class="type">ITEM</span> item  
**Realm:** <span class="server">Server</span>  
**Type:** <span class="type">Function</span>  
**Description:** Calculate the price a player can sell an item for.

    PS.Config.CalculateSellPrice = function(ply, item)
        return math.Round(item.Price * 0.75)
    end
