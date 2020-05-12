<?php

use Illuminate\Database\Seeder;
use App\Files\Models\TypeFile;

class TypeFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeFile::create([
    		'descriptionFile'	=> 'Anteproyecto',
    		'statusFile'		=> '1',
    	]);
    	TypeFile::create([
    		'descriptionFile'	=> 'Proyecto',
    		'statusFile'		=> '1',
    	]);
    	TypeFile::create([
    		'descriptionFile'	=> 'Primer Informe',
    		'statusFile'		=> '1',
    	]);
    	TypeFile::create([
    		'descriptionFile'	=> 'Segundo informe',
    		'statusFile'		=> '1',
    	]);
    	TypeFile::create([
    		'descriptionFile'	=> 'Tercer Informe',
    		'statusFile'		=> '1',
    	]);
    	TypeFile::create([
    		'descriptionFile'	=> 'Cuarto Informe',
    		'statusFile'		=> '1',
    	]);
    }
}
