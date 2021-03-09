<?php
/**
 * Copyright © LimeSoda Interactive Marketing GmbH All rights reserved.
 */
declare(strict_types=1);

namespace LimeSoda\AllowAdminBackorder\Plugin\Backend\Magento\InventorySales\Model\IsProductSalableCondition;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\InventorySales\Model\IsProductSalableCondition\BackOrderCondition;

class BackOrderConditionForAdminhtml
{
    private $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function afterExecute(
        BackOrderCondition $subject,
        $result
    )
    {
        if ($result == false) {
            $allowAdminBackorders = $this->scopeConfig->isSetFlag('cataloginventory/item_options/admin_backorders');
            if ($allowAdminBackorders) {
                return true;
            }
        }

        return $result;
    }
}

