<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.constraint_validator.address_zip_code_validator' shared service.

return $this->services['prestashop.core.constraint_validator.address_zip_code_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\AddressZipCodeValidator(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.country.country_zip_code_requirements_provider'] ?? $this->load('getPrestashop_Adapter_Country_CountryZipCodeRequirementsProviderService.php')));
