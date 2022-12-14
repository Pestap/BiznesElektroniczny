<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.command_handler.set_associated_product_categories_handler' shared service.

return $this->services['prestashop.adapter.product.command_handler.set_associated_product_categories_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\SetAssociatedProductCategoriesHandler(($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')), ($this->services['prestashop.adapter.product.update.product_category_updater'] ?? $this->load('getPrestashop_Adapter_Product_Update_ProductCategoryUpdaterService.php')));
