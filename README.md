# Module LimeSoda AllowAdminBackorder

    limesoda/magento2-allowadminbackorder

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)


## Main Functionalities

This module allows a differentiation between frontend and backend backorders.

So if you for example disable backorders in frontend, you can still enable backorders for orders created in adminhtml.

## Configuration

 - Stores -> Configuration -> Catalog -> Inventory -> Product Stock Options -> Admin Backorders 


## Specifications

 - Plugin
	- afterExecute - Magento\InventorySales\Model\IsProductSalableCondition\BackOrderCondition > LimeSoda\AllowAdminBackorder\Plugin\Backend\Magento\InventorySales\Model\IsProductSalableCondition\BackOrderCondition
    
