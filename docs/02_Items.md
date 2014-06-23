<p class="lead">Items in PointShop are very configurable and provide numerous ways of creating something unique. Below are listed the properties and functions available in items. Some are required, whilst others are optional.</p>

<a href="/items/properties" class="button">Properties <i class="fa fa-chevron-right"></i></a>

<a href="/items/functions" class="button">Functions <i class="fa fa-chevron-right"></i></a>

<a href="/items/hooks" class="button">Hooks <i class="fa fa-chevron-right"></i></a>

###<a name="creating-new-items"></a>Creating New Items

Creating new items is as simple as making a new lua file inside one of the category folders inside the `pointshop/items` folder. The new file should then be populated with Item [Properties](/items/properties) and [Functions](/items/functions).

<p class="warning"><i class="fa fa-warning"></i> Filenames for items must be <strong>lowercase</strong> and <strong>contain no spaces or non-alphanumeric characters</strong>. Items with filenames containing uppercase characters or spaces will not work properly.</p>

###<a name="clientside-models"></a>Clientside Models

PointShop has a built in system for showing models attached to players and does this by default if both an `ITEM.Model` and an `ITEM.Attachment` or `ITEM.Bone` are specified.