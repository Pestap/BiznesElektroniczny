<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.command_handler.duplicate_product_handler' shared service.

return $this->services['prestashop.adapter.product.command_handler.duplicate_product_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\DuplicateProductHandler(($this->services['prestashop.adapter.product.product_duplicator'] ?? $this->load('getPrestashop_Adapter_Product_ProductDuplicatorService.php')));
