<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.product.information' shared service.

return $this->services['form.type.product.information'] = new \PrestaShopBundle\Form\Admin\Product\ProductInformation(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService()), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['prestashop.adapter.data_provider.category'] ?? $this->load('getPrestashop_Adapter_DataProvider_CategoryService.php')), ($this->services['prestashop.adapter.data_provider.product'] ?? ($this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider())), ($this->services['prestashop.adapter.data_provider.feature'] ?? ($this->services['prestashop.adapter.data_provider.feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider())), ($this->services['prestashop.adapter.data_provider.manufacturer'] ?? ($this->services['prestashop.adapter.data_provider.manufacturer'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\ManufacturerDataProvider())));
