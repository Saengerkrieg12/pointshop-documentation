<p class="lead">These functions are part of the global PS table and provide utility functions.</p>

####<a name="validate-items"></a>PS:ValidateItems(items)

**Arguments:** <span class="type">Any</span> items  
**Returns:** <span class="type">Table</span>  
**Realm:** <span class="shared">Shared</span>  
**Description:** Takes a value and validates by ensuring it is a table and removing an non-existant items.

    local items = PS:ValidateItems(items)

####<a name="validate-points"></a>PS:ValidatePoints(points)

**Arguments:** <span class="type">Any</span> points  
**Returns:** <span class="type">Number</span>  
**Realm:** <span class="shared">Shared</span>  
**Description:** Takes a value and validates by ensuring it is a number and more than -1.

    local points = PS:ValidatePoints(points)

####<a name="find-category-by-name"></a>PS:FindCategoryByName(cat\_name)

**Arguments:** <span class="type">String</span> cat\_name  
**Returns:** <span class="type">CATEGORY</span>  
**Realm:** <span class="shared">Shared</span>  
**Description:** Finds a category with the passed name.

    local CATEGORY = PS:FindCategoryByName('test')

####<a name="toggle-menu"></a>PS:ToggleMenu()

**Realm:** <span class="client">Client</span>  
**Description:** Toggles the PointShop menu open or closed.

    PS:ToggleMenu()

####<a name="set-hover-item"></a>PS:SetHoverItem(item\_id)

**Arguments:** <span class="type">String</span> item\_id  
**Realm:** <span class="client">Client</span>  
**Description:** Sets the currently hovered item in the PointShop menu.

    PS:SetHoverItem('conehat')

####<a name="remove-hover-item"></a>PS:RemoveHoverItem()

**Realm:** <span class="client">Client</span>  
**Description:** Unsets the hovered item in the PointShop menu.

    PS:RemoveHoverItem()

####<a name="show-color-chooser"></a>PS:ShowColorChooser(item, modifications)

**Arguments:** <span class="type">ITEM</span> item, <span class="type">Table</span> modifications   
**Realm:** <span class="client">Client</span>  
**Description:** Opens the color chooser window for an item.

    function ITEM:Modify(modifications)
        PS:ShowColorChooser(self, modifications)
    end

####<a name="send-modifications"></a>PS:SendModifications(item\_id, modifications)

**Arguments:** <span class="type">String</span> item\_id <span class="type">Table</span> modifications   
**Realm:** <span class="client">Client</span>  
**Description:** Sends modifications for an item to the server.

    chooser.OnChoose = function(color)
        modifications.color = color
        self:SendModifications(item.ID, modifications)
    end
