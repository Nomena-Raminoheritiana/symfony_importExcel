<?php

namespace App\Services;

class SpreadSheetService
{
    public function readXls($file): ?array
    {
        $formatTest = [
            \PhpOffice\PhpSpreadsheet\IOFactory::READER_XLS,
            \PhpOffice\PhpSpreadsheet\IOFactory::READER_XLSX,
            \PhpOffice\PhpSpreadsheet\IOFactory::READER_HTML,
        ];
        // charger le fichier
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file,0,$formatTest);
        try {
            /**  Verifier si $inputFileName est vraiment un fichier excel valide  **/
            \PhpOffice\PhpSpreadsheet\IOFactory::identify($file, $formatTest);
        } catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
           return null;
        }

        $data = $spreadsheet->getActiveSheet()->toArray();
        array_shift($data);
        return $data;
    }

}