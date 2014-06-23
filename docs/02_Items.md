<p class="lead">Items in PointShop are very configurable and provide numerous ways of creating something unique. Below are listed the properties and functions available in items. Some are required, whilst others are optional.</p>

<a href="/items/properties" class="button">Properties <i class="fa fa-chevron-right"></i></a> <a href="/items/functions" class="button">Functions <i class="fa fa-chevron-right"></i></a> <a href="/items/hooks" class="button">Hooks <i class="fa fa-chevron-right"></i></a>

###<a name="creating-items"></a>Creating Items

Creating new items is as simple as making a new lua file inside one of the category folders inside the `pointshop/items` folder. The new file should then be populated with Item [Properties](/items/properties) and [Functions](/items/functions).

<p class="warning"><i class="fa fa-warning"></i> Filenames of new item files must be <strong>lowercase</strong> and contain <strong>no spaces</strong>. Items with filenames containing uppercase characters or spaces will not work properly. See the default items for examples of proper item names.</p>

See [the default Hats, Heads and Masks category](https://github.com/adamdburton/pointshop/blob/master/lua/items/headshatsmasks/__category.lua) for an example.