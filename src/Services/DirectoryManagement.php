<?php

namespace App\Services;
use Symfony\Component\HttpKernel\KernelInterface;

class DirectoryManagement
{
    private string $project_dir;
    private string $import_directory = DIRECTORY_SEPARATOR.'import';
    private string $excel_import_directory = DIRECTORY_SEPARATOR.'excel';

    public function __construct(KernelInterface $kernel)
    {
        $this->project_dir = $kernel->getProjectDir();
    }

    public function getProjectDir(): string
    {
        return $this->project_dir;
    }

    public function getImportDirectory(): string
    {
        return $this->getProjectDir().DIRECTORY_SEPARATOR.$this->import_directory;
    }

    public function getExcelImportDirectory(): string
    {
        return $this->getImportDirectory().DIRECTORY_SEPARATOR.$this->excel_import_directory;
    }

}
