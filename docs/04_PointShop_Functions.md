<p class="lead">These functions are part of the global PS table and provide utility functions.</p>

####<a href="#validate-items" name="validate-items">PS:ValidateItems(items)</a>

**Arguments:** <span class="type">Any</span> items  
**Returns:** <span class="type">Table</span>  
**Realm:** <span class="shared">Shared</span>  
**Description:** Takes a value and validates by ensuring it is a table and removing an non-existent items.

    local items = PS:ValidateItems(items)

####<a href="#validate-points" name="validate-points">PS:ValidatePoints(points)</a>

**Arguments:** <span class="type">Any</span> points  
**Returns:** <span class="type">Number</span>  
**Realm:** <span class="shared">Shared</span>  
**Description:** Takes a value and validates by ensuring it is a number and more than -1.

    local points = PS:ValidatePoints(points)

####<a href="#find-category-by-name" name="find-category-by-name">PS:FindCategoryByName(cat\_name)</a>

**Arguments:** <span class="type">String</span> cat\_name  
**Returns:** <span class="type">CATEGORY</span>  
**Realm:** <span class="shared">Shared</span>  
**Description:** Finds a category with the passed name.

    local CATEGORY = PS:FindCategoryByName('test')

####<a href="#toggle-menu" name="toggle-menu">PS:ToggleMenu()</a>

**Realm:** <span class="client">Client</span>  
**Description:** Toggles the PointShop menu open or closed.

    PS:ToggleMenu()

####<a href="#set-hover-item" name="set-hover-item">PS:SetHoverItem(item\_id)</a>

**Arguments:** <span class="type">String</span> item\_id  
**Realm:** <span class="client">Client</span>  
**Description:** Sets the currently hovered item in the PointShop menu.

    PS:SetHoverItem('conehat')

####<a href="#remove-hover-item" name="remove-hover-item">PS:RemoveHoverItem()</a>

**Realm:** <span class="client">Client</span>  
**Description:** Unsets the hovered item in the PointShop menu.

    PS:RemoveHoverItem()

####<a href="#show-color-chooser" name="show-color-chooser">PS:ShowColorChooser(item, modifications)</a>

**Arguments:** <span class="type">ITEM</span> item, <span class="type">Table</span> modifications   
**Realm:** <span class="client">Client</span>  
**Description:** Opens the color chooser window for an item.

    function ITEM:Modify(modifications)
        PS:ShowColorChooser(self, modifications)
    end

####<a href="#send-modifications" name="send-modifications">PS:SendModifications(item\_id, modifications)</a>

**Arguments:** <span class="type">String</span> item\_id <span class="type">Table</span> modifications   
**Realm:** <span class="client">Client</span>  
**Description:** Sends modifications for an item to the server.

    chooser.OnChoose = function(color)
        modifications.color = color
        self:SendModifications(item.ID, modifications)
    end
