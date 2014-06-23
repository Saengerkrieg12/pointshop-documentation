<p class="lead">Data providers give PointShop flexibilty on where data for each players Points and Items are stored. By Default, PointShop uses the PData provider by default.</p>

####<a name="pdata"></a>PData

The pdata provider uses the built in [Player.GetPData](http://wiki.garrysmod.com/page/Player/GetPData) and [Player.SetPData](http://wiki.garrysmod.com/page/Player/SetPData) functions. Data from these functions is store in the sv.db file on the server.

<p class="info"><i class="fa fa-info-cirlce"></i> The sv.db file can be transfered between servers. This will keep all Point and Items data for players.</p>

####<a name="data"></a>Data

The data provider uses text files in the `garrysmod/data/pointshop` folder. Each player is given their own file in this folder and their data is stored in [JSON](http://en.wikipedia.org/wiki/JSON) format.

####<a name="mysql"></a>MySQL

The MySQL provider is available as a seperate download from the [pointshop-mysql](https://github.com/adamdburton/pointshop-mysql) github repository.
