<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.specification.feature_value_type' shared service.

return $this->services['form.type.sell.product.specification.feature_value_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Specification\FeatureValueType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.adapter.form.choice_provider.features_choice_provider'] ?? $this->load('getPrestashop_Adapter_Form_ChoiceProvider_FeaturesChoiceProviderService.php')), ($this->services['form.type.sell.product.event_listener.feature_value_listener'] ?? $this->load('getForm_Type_Sell_Product_EventListener_FeatureValueListenerService.php')));
