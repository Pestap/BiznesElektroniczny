<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.command.update_combination_details_handler' shared service.

return $this->services['prestashop.adapter.product.command.update_combination_details_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\UpdateCombinationDetailsHandler(($this->services['prestashop.adapter.product.combination.repository.combination_repository'] ?? $this->load('getPrestashop_Adapter_Product_Combination_Repository_CombinationRepositoryService.php')));
