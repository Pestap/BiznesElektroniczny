<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.extension.multistore_configuration' shared service.

return $this->services['form.extension.multistore_configuration'] = new \PrestaShopBundle\Form\Admin\Extension\MultistoreConfigurationTypeExtension(($this->services['prestashop.multistore_checkbox_enabler'] ?? $this->load('getPrestashop_MultistoreCheckboxEnablerService.php')));
