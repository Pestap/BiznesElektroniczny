<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.geolocation.by_ip_address.form_data_provider' shared service.

return $this->services['prestashop.admin.geolocation.by_ip_address.form_data_provider'] = new \PrestaShopBundle\Form\Admin\Improve\International\Geolocation\GeolocationByIpAddressFormDataProvider(($this->services['prestashop.adapter.geolocation_by_ip_address.configuration'] ?? $this->load('getPrestashop_Adapter_GeolocationByIpAddress_ConfigurationService.php')), ($this->services['prestashop.core.geolocation.geo_lite_city.checker'] ?? $this->load('getPrestashop_Core_Geolocation_GeoLiteCity_CheckerService.php')));
