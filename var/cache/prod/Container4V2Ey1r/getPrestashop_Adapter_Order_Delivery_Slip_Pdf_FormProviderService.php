<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.delivery.slip.pdf.form_provider' shared service.

return $this->services['prestashop.adapter.order.delivery.slip.pdf.form_provider'] = new \PrestaShopBundle\Form\Admin\Sell\Order\Delivery\SlipPdfFormDataProvider(($this->services['prestashop.adapter.order.delivery.slip.pdf.configuration'] ?? ($this->services['prestashop.adapter.order.delivery.slip.pdf.configuration'] = new \PrestaShop\PrestaShop\Adapter\Order\Delivery\SlipPdfConfiguration())));
