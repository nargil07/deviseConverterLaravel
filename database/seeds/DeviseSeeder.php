<?php

use Illuminate\Database\Seeder;

class DeviseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devises')->insert([
            'nom' => 'US Dollar',
            'identifiant' => 'USD',
            'valeur' => 1,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dirham des Émirats arabes',
            'identifiant' => 'AED',
            'valeur' => 3.67295,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Afghani afghan',
            'identifiant' => 'AFN',
            'valeur' => 66.7300,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Lek albanais',
            'identifiant' => 'ALL',
            'valeur' => 128.171,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dram arménien',
            'identifiant' => 'AMD',
            'valeur' => 483.940,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Florin néerlandais',
            'identifiant' => 'ANG',
            'valeur' => 1.77000,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Kwanza angolais',
            'identifiant' => 'AOA',
            'valeur' => 165.750,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Peso argentin',
            'identifiant' => 'ARS',
            'valeur' => 15.7900,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dollar australien',
            'identifiant' => 'AUD',
            'valeur' => 1.37080,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Florin arubais',
            'identifiant' => 'AWG',
            'valeur' => 1.79,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Nouveau manat azerbaïdjanais',
            'identifiant' => 'AZN',
            'valeur' => 1.80472,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Mark convertible de Bosnie-Herzégovine',
            'identifiant' => 'BAM',
            'valeur' => 1.85687,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dollar de la barbade',
            'identifiant' => 'BBD',
            'valeur' => 2.00000,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Taka bangladais',
            'identifiant' => 'BDT',
            'valeur' => 79.0700,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Lev bulgare',
            'identifiant' => 'BGN',
            'valeur' => 1.85710,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dinar bahreïni',
            'identifiant' => 'BHD',
            'valeur' => 0.377000,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Franc burundais',
            'identifiant' => 'BIF',
            'valeur' => 1676.53,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dollar bermudien',
            'identifiant' => 'BMD',
            'valeur' => 1,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dollar du Brunei',
            'identifiant' => 'BND',
            'valeur' => 1.43908,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Bolíviano bolivien',
            'identifiant' => 'BOB',
            'valeur' => 6.86000,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Dollar canadien',
            'identifiant' => 'CAD',
            'valeur' => 1.32355,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Franc congolais',
            'identifiant' => 'CDF',
            'valeur' => 1076.00,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Franc suisse',
            'identifiant' => 'CHF',
            'valeur' => 1.01770,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Peso chilien',
            'identifiant' => 'CLP',
            'valeur' => 667.000,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Yuan ou renminbi chinois',
            'identifiant' => 'CNY',
            'valeur' => 6.91850,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Peso colombien',
            'identifiant' => 'COP',
            'valeur' => 2927.00,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Couronne tchèque',
            'identifiant' => 'CZK',
            'valeur' => 25.6509,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Livre égyptienne',
            'identifiant' => 'EGP',
            'valeur' => 17.8600,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Euro',
            'identifiant' => 'EUR',
            'valeur' => 0.949400,
        ]);
        DB::table('devises')->insert([
            'nom' => 'Livre britannique',
            'identifiant' => 'GBP',
            'valeur' => 0.813868,
        ]);
    }
}
