<?php

namespace App\Entity;

use App\Repository\XlsDataRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: XlsDataRepository::class)]
class XlsData
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteAffaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteEvenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $compteDernierEvenement = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $numeroFiche = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleCivilite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $proprietaireActuelVehicule = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroNomVoie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complementAdresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codePostal = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephonePortable = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telephoneJob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateMiseEnCirculation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DateAchat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDernierEvenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleMarque = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $libelleModele = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $immatriculation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeProspect = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $kilometrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $LibelleEnergie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vendeur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaireFacturation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $typeVn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroDossier = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEvenement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origineEvenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(?string $compteAffaire): self
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->compteEvenement;
    }

    public function setCompteEvenement(?string $compteEvenement): self
    {
        $this->compteEvenement = $compteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->compteDernierEvenement;
    }

    public function setCompteDernierEvenement(?string $compteDernierEvenement): self
    {
        $this->compteDernierEvenement = $compteDernierEvenement;

        return $this;
    }

    public function getNumeroFiche(): ?string
    {
        return $this->numeroFiche;
    }

    public function setNumeroFiche(?string $numeroFiche): self
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): self
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getProprietaireActuelVehicule(): ?string
    {
        return $this->proprietaireActuelVehicule;
    }

    public function setProprietaireActuelVehicule(?string $proprietaireActuelVehicule): self
    {
        $this->proprietaireActuelVehicule = $proprietaireActuelVehicule;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumeroNomVoie(): ?string
    {
        return $this->numeroNomVoie;
    }

    public function setNumeroNomVoie(?string $numeroNomVoie): self
    {
        $this->numeroNomVoie = $numeroNomVoie;

        return $this;
    }

    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?string
    {
        return $this->telephoneJob;
    }

    public function setTelephoneJob(?string $telephoneJob): self
    {
        $this->telephoneJob = $telephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateMiseEnCirculation(): ?\DateTimeInterface
    {
        return $this->DateMiseEnCirculation;
    }

    public function setDateMiseEnCirculation(?\DateTimeInterface $DateMiseEnCirculation): self
    {
        $this->DateMiseEnCirculation = $DateMiseEnCirculation;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->DateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $DateAchat): self
    {
        $this->DateAchat = $DateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?\DateTimeInterface
    {
        return $this->dateDernierEvenement;
    }

    public function setDateDernierEvenement(?\DateTimeInterface $dateDernierEvenement): self
    {
        $this->dateDernierEvenement = $dateDernierEvenement;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->libelleMarque;
    }

    public function setLibelleMarque(?string $libelleMarque): self
    {
        $this->libelleMarque = $libelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->libelleModele;
    }

    public function setLibelleModele(?string $libelleModele): self
    {
        $this->libelleModele = $libelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeProspect(): ?string
    {
        return $this->typeProspect;
    }

    public function setTypeProspect(?string $typeProspect): self
    {
        $this->typeProspect = $typeProspect;

        return $this;
    }

    public function getKilometrage(): ?string
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?string $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->LibelleEnergie;
    }

    public function setLibelleEnergie(?string $LibelleEnergie): self
    {
        $this->LibelleEnergie = $LibelleEnergie;

        return $this;
    }

    public function getVendeur(): ?string
    {
        return $this->vendeur;
    }

    public function setVendeur(?string $vendeur): self
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    public function getCommentaireFacturation(): ?string
    {
        return $this->commentaireFacturation;
    }

    public function setCommentaireFacturation(?string $commentaireFacturation): self
    {
        $this->commentaireFacturation = $commentaireFacturation;

        return $this;
    }

    public function getTypeVn(): ?string
    {
        return $this->typeVn;
    }

    public function setTypeVn(?string $typeVn): self
    {
        $this->typeVn = $typeVn;

        return $this;
    }

    public function getNumeroDossier(): ?string
    {
        return $this->numeroDossier;
    }

    public function setNumeroDossier(?string $numeroDossier): self
    {
        $this->numeroDossier = $numeroDossier;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(?\DateTimeInterface $dateEvenement): self
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(?string $origineEvenement): self
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }
}
