<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.customer_service.command_handler.forward_customer_thread_handler' shared service.

return $this->services['prestashop.adapter.customer_service.command_handler.forward_customer_thread_handler'] = new \PrestaShop\PrestaShop\Adapter\CustomerService\CommandHandler\ForwardCustomerThreadHandler(($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getContext(), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())));
