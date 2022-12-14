<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\TranslationController' shared service.

$this->services['PrestaShopBundle\\Controller\\Api\\TranslationController'] = $instance = new \PrestaShopBundle\Controller\Api\TranslationController();

$instance->translationService = ($this->services['prestashop.service.translation'] ?? $this->load('getPrestashop_Service_TranslationService.php'));
$instance->queryParams = ($this->services['prestashop.core.api.query_translation_params_collection'] ?? ($this->services['prestashop.core.api.query_translation_params_collection'] = new \PrestaShopBundle\Api\QueryTranslationParamsCollection()));
$instance->setLogger(($this->services['logger'] ?? $this->getLoggerService()));
$instance->setContainer($this);

return $instance;
