<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.configuration.upload_size_configuration' shared service.

return $this->services['prestashop.core.configuration.upload_size_configuration'] = new \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfiguration(($this->services['prestashop.core.configuration.ini_configuration'] ?? ($this->services['prestashop.core.configuration.ini_configuration'] = new \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration())));
