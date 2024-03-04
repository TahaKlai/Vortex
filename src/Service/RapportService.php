<?php

namespace App\Service;

use App\Repository\DemandededonRepository;

class RapportService
{
    private $demandededonRepository;

    public function __construct(DemandededonRepository $demandededonRepository)
    {
        $this->demandededonRepository = $demandededonRepository;
    }

    public function genererRapport()
    {
        // Retrieve all Demandededon entities
        $demandededons = $this->demandededonRepository->findAll();

        // Generate the report
        $rapport = [
            'total_demandededon' => count($demandededons),
            'dons_par_date' => $this->calculerDonsParDate($demandededons),
            'repartition_type_don' => $this->calculerRepartitionTypeDon($demandededons),
            'quantite_demande' => $this->calculerQuantiteDemande($demandededons),
            'status_demande' => $this->calculerStatusDemande($demandededons),
        ];

        return $rapport;
    }

    private function calculerDonsParDate($demandededons)
    {
        $donsParDate = [];
        foreach ($demandededons as $demandededon) {
            $date = $demandededon->getDatedemande()->format('Y-m-d');
            if (!isset($donsParDate[$date])) {
                $donsParDate[$date] = 0;
            }
            $donsParDate[$date]++;
        }
        return $donsParDate;
    }

    private function calculerRepartitionTypeDon($demandededons)
    {
        $repartitionTypeDon = [];
        foreach ($demandededons as $demandededon) {
            $typeDon = $demandededon->getTypededon();
            if (!isset($repartitionTypeDon[$typeDon])) {
                $repartitionTypeDon[$typeDon] = 0;
            }
            $repartitionTypeDon[$typeDon]++;
        }
        return $repartitionTypeDon;
    }

    private function calculerQuantiteDemande($demandededons)
    {
        $quantiteDemande = 0;
        foreach ($demandededons as $demandededon) {
            $quantiteDemande += $demandededon->getQuantitedemande();
        }
        return $quantiteDemande;
    }

    private function calculerStatusDemande($demandededons)
    {
        $statusDemande = [];
        foreach ($demandededons as $demandededon) {
            $status = $demandededon->getStatusdemande();
            if (!isset($statusDemande[$status])) {
                $statusDemande[$status] = 0;
            }
            $statusDemande[$status]++;
        }
        return $statusDemande;
    }
}