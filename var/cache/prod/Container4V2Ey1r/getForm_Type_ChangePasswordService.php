<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.change_password' shared service.

$this->services['form.type.change_password'] = $instance = new \PrestaShopBundle\Form\Admin\Type\ChangePasswordType(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
