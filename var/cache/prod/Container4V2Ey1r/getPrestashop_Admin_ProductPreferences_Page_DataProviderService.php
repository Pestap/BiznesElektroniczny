<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.product_preferences.page.data_provider' shared service.

return $this->services['prestashop.admin.product_preferences.page.data_provider'] = new \PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences\PageFormDataProvider(($this->services['prestashop.adapter.product_page.configuration'] ?? $this->load('getPrestashop_Adapter_ProductPage_ConfigurationService.php')));
