<?php

use Illuminate\Database\Seeder;
use App\Files\Models\Covenants;

class CovenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Covenants::create([
    		'convenant'		=> 'ACTIVO',
    		'descriptionConvenant'	=> 'Convenio en perfecto estado',
    		'statusConvenant'	=> '1',
    	]);
    	Covenants::create([
    		'convenant'		=> 'SIN CONVENIO',
    		'descriptionConvenant'	=> 'No existe un convenio',
    		'statusConvenant'	=> '1',
    	]);
    	Covenants::create([
    		'convenant'		=> 'EN PROCESO',
    		'descriptionConvenant'	=> 'Convenio ya esta en proceso de tramite',
    		'statusConvenant'	=> '1',
    	]);
    	Covenants::create([
    		'convenant'		=> 'DESACTUALIZADO',
    		'descriptionConvenant'	=> 'Convenio antiguo, sin datos actuales',
    		'statusConvenant'	=> '1',
    	]);
    	Covenants::create([
    		'keyCareer'		=> 'INVALIDO',
    		'careerName'	=> 'No es valido el convenio',
    		'careerStatus'	=> '1',
    	]);
    	Covenants::create([
    		'keyCareer'		=> 'RENOVAR',
    		'careerName'	=> 'Volver a tramitar el covenio',
    		'careerStatus'	=> '1',
    	]);
    	Covenants::create([
    		'keyCareer'		=> 'OTRO',
    		'careerName'	=> 'Permite agregar un nuevo convenio',
    		'careerStatus'	=> '1',
    	]);
    }
}
