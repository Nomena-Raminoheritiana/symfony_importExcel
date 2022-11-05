<?php

namespace App\Manager;

use App\Entity\XlsData;
use Doctrine\ORM\EntityManagerInterface;

class XlsDataManager
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }

    public function saveData(Array $xlsDatas)
    {
        foreach($xlsDatas as $data) {
            $xlsData = (new XlsData())
                ->setCompteAffaire($data[0])
                ->setCompteEvenement($data[1])
                ->setCompteDernierEvenement($data[2])
                ->setNumeroFiche($data[3])
                ->setLibelleCivilite($data[4])
                ->setProprietaireActuelVehicule($data[5])
                ->setNom($data[6])
                ->setPrenom($data[7])
                ->setNumeroNomVoie($data[8])
                ->setComplementAdresse($data[9])
                ->setCodePostal($data[10])
                ->setVille($data[11])
                ->setTelephone($data[12])
                ->setTelephonePortable($data[13])
                ->setTelephoneJob($data[14])
                ->setEmail($data[15])
                ->setDateMiseEnCirculation($data[16] ? new \DateTimeImmutable('now') : null)
                ->setDateAchat($data[17] ? new \DateTimeImmutable($data[17]) : null)
                ->setDateDernierEvenement($data[18] ? new \DateTimeImmutable($data[18]) : null)
                ->setLibelleMarque($data[19])
                ->setLibelleModele($data[20])
                ->setVersion($data[21])
                ->setVin($data[22])
                ->setImmatriculation($data[23])
                ->setTypeProspect($data[24])
                ->setKilometrage($data[25])
                ->setLibelleEnergie($data[26])
                ->setVendeur($data[27])
                ->setCommentaireFacturation($data[29])
                ->setTypeVn($data[30])
                ->setNumeroDossier($data[31])
                ->setDateEvenement(!is_null($data[33]) ? new \DateTimeImmutable('now') : null)
                ->setOrigineEvenement($data[34]);
            $this->entityManager->persist($xlsData);
        }
        $this->entityManager->flush();
    }
}