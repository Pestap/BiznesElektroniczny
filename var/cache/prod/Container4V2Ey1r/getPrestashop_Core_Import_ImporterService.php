<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.importer' shared service.

return $this->services['prestashop.core.import.importer'] = new \PrestaShop\PrestaShop\Core\Import\Importer(($this->services['prestashop.core.import.access_checker'] ?? $this->load('getPrestashop_Core_Import_AccessCheckerService.php')), ($this->services['prestashop.adapter.import.entity_deleter'] ?? $this->load('getPrestashop_Adapter_Import_EntityDeleterService.php')), ($this->services['prestashop.core.import.csv_file_reader'] ?? $this->load('getPrestashop_Core_Import_CsvFileReaderService.php')), ($this->services['prestashop.core.import.dir'] ?? $this->load('getPrestashop_Core_Import_DirService.php')), ($this->services['prestashop.core.configuration.ini_configuration'] ?? ($this->services['prestashop.core.configuration.ini_configuration'] = new \PrestaShop\PrestaShop\Core\Configuration\IniConfiguration())));
