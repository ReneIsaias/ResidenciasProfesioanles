<?php

use Illuminate\Database\Seeder;
use App\Files\Models\Reports;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reports::create([
        	'nameReport'		=> 'Anteproyecto',
    		'descriptionReport'	=> 'Informe que muestra el anteproyecto a presentar',
    		'statusReport'		=> '1',
    		'id_typeFile'		=> '1',
    	]);
    	Reports::create([
        	'nameReport'		=> 'Proyecto',
    		'descriptionReport'	=> 'Informe que muestra todo el proyecto terminado',
    		'statusReport'		=> '1',
    		'id_typeFile'		=> '1',
    	]);
    	Reports::create([
        	'nameReport'		=> 'Primer Informe',
    		'descriptionReport'	=> 'Reporte del primer informe del proyecto',
    		'statusReport'		=> '1',
    		'id_typeFile'		=> '1',
    	]);
    	Reports::create([
        	'nameReport'		=> 'Segundo informe',
    		'descriptionReport'	=> 'Reporte del segundo informe del proyecto',
    		'statusReport'		=> '1',
    		'id_typeFile'		=> '1',
    	]);
    	Reports::create([
        	'nameReport'		=> 'Tercer Informe',
    		'descriptionReport'	=> 'Reporte del tercer informe del proyecto',
    		'statusReport'		=> '1',
    		'id_typeFile'		=> '1',
    	]);
    	Reports::create([
        	'nameReport'		=> 'Cuarto Informe',
    		'descriptionReport'	=> 'Reporte del cuarto informe del proyecto',
    		'statusReport'		=> '1',
    		'id_typeFile'		=> '1',
    	]);
    }
}
