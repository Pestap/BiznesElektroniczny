<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.export.file_writer.export_csv_file_writer' shared service.

return $this->services['prestashop.core.export.file_writer.export_csv_file_writer'] = new \PrestaShop\PrestaShop\Core\Export\FileWriter\ExportCsvFileWriter(($this->services['prestashop.core.export.dir'] ?? $this->load('getPrestashop_Core_Export_DirService.php')));
