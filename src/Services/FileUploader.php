<?php

namespace App\Services;

use Cocur\Slugify\Slugify;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $slugger;

    public function __construct()
    {
        $this->slugger = new Slugify();
    }

    public function upload(UploadedFile $file, string $targetFolder): ?string
    {
        if($file != null) {
            // upload fichier
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slugify($originalFilename);
            try{
                $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
            }catch(\LogicException $e) {
                // pour gérer certain type de fichier, cad que parfois guessExtension retourne null
                // donc il faudrait extraire manuellement l'extension du fichier
                $extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $fileName = $safeFilename.'-'.uniqid().'.'.$extension;
            }

            try {
                $file->move($targetFolder, $fileName);
                return $fileName;
            } catch (FileException $e) {
                return null;
            }
        }
        return null;
    }
}