<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->delete();

        $trainings = [
            [
                'title' => 'FORMATION PRATIQUE EN COMPTABILITE D’ENTREPRISE',
                'price' => 50000,
                'cover' => '',
                'description' => 'Objectifs :

                    Acquérir une expérience professionnelle,
                    Développer vos connaissances pratique en la matière,
                    Se former sur les logiciels de comptabilité.
                    Bonus : vous allez prendre
                    
                    Documents jargon comptable avec les modifications de SYSCOHADA
                    Document d’analyse du bilan
                    Document d’obligation comptable selon le SYSCOHADA révisé
                    Les pièces comptables
                              Début : 08 Novembre 2021
                    Module 1 : Mise en place de la comptabilité générale en fonction du statut juridique et de l’objet social de la société. (Organisation comptable selon le SYSCOHADA révisé (SA, SARL.U, ETS…)
                    Module 2 : Initiation et perfectionnement à SAGE SAARI COMPTA i7, cas pratique à faire en plénière avec utilisation du logiciel. (100% pratique)

                    Module 3 : Gestion du fichier des immobilisations sous l’application SAGE « immobilisation i7 »

                    Module 4 : Calcul des salaires, préparation des bulletins de paie et leur comptabilisation sous le progiciel « SAGE paie i7 »

                    Module 5 : Elaboration des Etats Financiers (Selon la nouvelle modification du SYSCOHADA révisée) liasse Minimale et Normale sous les logiciels ETAMINI & ETAFINE

                    Module 6 : Gestion et Elaboration des déclarations Fiscales et Sociales (Apprendre à remplir l’imprimé de TVA, et autres Impôts et taxes de l’OTR) 100% pratique

                    Frais d’inscription	Frais de formation	Jours	Durée	Horaire
                    5.000 FCFA	50.000 FCFA	Lundi – Mercredi –  Jeudi	6 Semaines	12h20 -14h20  ou  18h20 – 20h20
                    
                    NB : Possibilité de paiement par tranche

                    La formation est sanctionnée par une attestation certifiée

                    Adresse : Djidjolé, rue 135 AFG, en face de l’Ecole Primaire LA SAGESSE,

                    Appel & WhatsApp: 
                    92 56 61 51 / 93 04 06 06
                ',
                'is_paid' => true,
                'online' => false,
                'with_certification' => true,
                'lat' => '',
                'lon' => '',
                'address' => 'Djidjolé, rue 135 AFG, en face de l’Ecole Primaire LA SAGESSE',
                'category_id' => 5,
                'city_id' => '',
                'advertiser_id' => '',
            ],

            [
                'title' => 'Formation en GRH & PAIE',
                'price' => 55000,
                'cover' => '',
                'description' => 'Objectifs :

                    Acquérir une expérience professionnelle,
                    Développer vos connaissances pratique en la matière,
                    Se former sur les logiciels de comptabilité.
                    Bonus : vous allez prendre
                    
                    Documents jargon comptable avec les modifications de SYSCOHADA
                    Document d’analyse du bilan
                    Document d’obligation comptable selon le SYSCOHADA révisé
                    Les pièces comptables
                              Début : 08 Novembre 2021
                    Module 1 : Mise en place de la comptabilité générale en fonction du statut juridique et de l’objet social de la société. (Organisation comptable selon le SYSCOHADA révisé (SA, SARL.U, ETS…)
                    Module 2 : Initiation et perfectionnement à SAGE SAARI COMPTA i7, cas pratique à faire en plénière avec utilisation du logiciel. (100% pratique)

                    Module 3 : Gestion du fichier des immobilisations sous l’application SAGE « immobilisation i7 »

                    Module 4 : Calcul des salaires, préparation des bulletins de paie et leur comptabilisation sous le progiciel « SAGE paie i7 »

                    Module 5 : Elaboration des Etats Financiers (Selon la nouvelle modification du SYSCOHADA révisée) liasse Minimale et Normale sous les logiciels ETAMINI & ETAFINE

                    Module 6 : Gestion et Elaboration des déclarations Fiscales et Sociales (Apprendre à remplir l’imprimé de TVA, et autres Impôts et taxes de l’OTR) 100% pratique

                    Frais d’inscription	Frais de formation	Jours	Durée	Horaire
                    5.000 FCFA	50.000 FCFA	Lundi – Mercredi –  Jeudi	6 Semaines	12h20 -14h20  ou  18h20 – 20h20
                    
                    NB : Possibilité de paiement par tranche

                    La formation est sanctionnée par une attestation certifiée

                    Adresse : Djidjolé, rue 135 AFG, en face de l’Ecole Primaire LA SAGESSE,

                    Appel & WhatsApp: 
                    92 56 61 51 / 93 04 06 06
                ',
                'is_paid' => true,
                'online' => false,
                'with_certification' => true,
                'lat' => '',
                'lon' => '',
                'address' => 'Djidjolé, rue 135 AFG, en face de l’Ecole Primaire LA SAGESSE',
                'category_id' => 5,
                'city_id' => '',
                'advertiser_id' => '',
            ],
        ];

        foreach ($trainings as $training) {
            Training::create($training);
        }
        // Training::factory()->count(20)->hasTags(2)->create();
    }
}
