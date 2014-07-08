<p class="lead">Data providers give PointShop flexibility on where data for each players Points and Items are stored. By Default, PointShop uses the PData provider.</p>

####<a href="#pdata" name="pdata">PData</a>

This provider uses the built in [Player.GetPData](http://wiki.garrysmod.com/page/Player/GetPData) and [Player.SetPData](http://wiki.garrysmod.com/page/Player/SetPData) functions. Data from these functions is stored in the sv.db file on the server.

<p class="info"><i class="fa fa-info-circle"></i> The sv.db file can be transferred between servers. This will keep all Point and Item data for players.</p>

    PS.Config.DataProvider = 'pdata'

####<a href="#data" name="data">Data</a>

This provider uses text files in the `garrysmod/data/pointshop` folder. Each player is given their own file in this folder and their data is stored in [JSON](http://en.wikipedia.org/wiki/JSON) format.

<p class="info"><i class="fa fa-info-circle"></i> The garrysmod/data/pointshop folder can be transferred between servers. This will keep all Point and Item data for players.</p>

    PS.Config.DataProvider = 'data'

####<a href="#mysql" name="mysql">MySQL</a>

The MySQL provider is available as a separate download from the [pointshop-mysql](https://github.com/adamdburton/pointshop-mysql) GitHub repository. This provider connects to a MySQL server and supports synchronizing Points and Items between servers.

    PS.Config.DataProvider = 'mysql'
