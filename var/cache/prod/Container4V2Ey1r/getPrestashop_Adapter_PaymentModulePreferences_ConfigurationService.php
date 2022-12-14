<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.payment_module_preferences.configuration' shared service.

return $this->services['prestashop.adapter.payment_module_preferences.configuration'] = new \PrestaShop\PrestaShop\Core\Payment\PaymentModulePreferencesConfiguration(($this->services['prestashop.adapter.module.payment_module_provider'] ?? $this->load('getPrestashop_Adapter_Module_PaymentModuleProviderService.php')), ($this->services['prestashop.core.module.configuration.payment_restrictions_configurator'] ?? $this->load('getPrestashop_Core_Module_Configuration_PaymentRestrictionsConfiguratorService.php')));
