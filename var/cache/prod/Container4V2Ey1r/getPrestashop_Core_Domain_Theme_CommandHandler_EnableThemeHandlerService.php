<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.domain.theme.command_handler.enable_theme_handler' shared service.

return $this->services['prestashop.core.domain.theme.command_handler.enable_theme_handler'] = new \PrestaShop\PrestaShop\Core\Domain\Theme\CommandHandler\EnableThemeHandler(($this->services['prestashop.core.addon.theme.theme_manager'] ?? $this->load('getPrestashop_Core_Addon_Theme_ThemeManagerService.php')), ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] ?? ($this->services['prestashop.adapter.cache.clearer.smarty_cache_clearer'] = new \PrestaShop\PrestaShop\Adapter\Cache\Clearer\SmartyCacheClearer())), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->isSingleShopContext());
