<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.import.csv_file_reader' shared service.

return $this->services['prestashop.core.import.csv_file_reader'] = new \PrestaShop\PrestaShop\Core\Import\File\CsvFileReader(($this->services['prestashop.adapter.import.file_opener'] ?? $this->load('getPrestashop_Adapter_Import_FileOpenerService.php')), ($this->services['prestashop.core.import.normalizer.csv_value_separator'] ?? ($this->services['prestashop.core.import.normalizer.csv_value_separator'] = new \PrestaShop\PrestaShop\Core\Import\CsvValueSeparatorNormalizer()))->normalize(($this->services['session'] ?? $this->getSessionService())->get("separator")));
