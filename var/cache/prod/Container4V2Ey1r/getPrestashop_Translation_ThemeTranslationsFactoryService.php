<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.theme_translations_factory' shared service.

$a = ($this->services['prestashop.translation.theme_provider'] ?? $this->load('getPrestashop_Translation_ThemeProviderService.php'));

$this->services['prestashop.translation.theme_translations_factory'] = $instance = new \PrestaShopBundle\Translation\Factory\ThemeTranslationsFactory($a);

$instance->addProvider($a);

return $instance;
