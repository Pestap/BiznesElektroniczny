<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.update.product_seo_properties_filler' shared service.

return $this->services['prestashop.adapter.product.update.product_seo_properties_filler'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSeoPropertiesFiller(($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')), ($this->services['prestashop.adapter.category.repository.category_repository'] ?? $this->load('getPrestashop_Adapter_Category_Repository_CategoryRepositoryService.php')));
