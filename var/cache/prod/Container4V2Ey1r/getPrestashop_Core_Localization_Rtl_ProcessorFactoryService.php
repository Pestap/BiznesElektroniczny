<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.localization.rtl.processor_factory' shared service.

return $this->services['prestashop.core.localization.rtl.processor_factory'] = new \PrestaShop\PrestaShop\Core\Localization\RTL\StyleSheetProcessorFactory(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));