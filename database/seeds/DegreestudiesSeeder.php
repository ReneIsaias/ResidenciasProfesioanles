<?php

use Illuminate\Database\Seeder;
use App\Files\Models\Degreestudies;

class DegreestudiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Degreestudies::create([
    		'degreeStudy'	=> 'Ingenieria',
    		'statusDegree'	=> '1',
    	]);
    	Degreestudies::create([
    		'degreeStudy'	=> 'Maestria',
    		'statusDegree'	=> '1',
    	]);
    	Degreestudies::create([
    		'degreeStudy'	=> 'Licenciado',
    		'statusDegree'	=> '1',
    	]);
    	Degreestudies::create([
    		'degreeStudy'	=> 'Doctor',
    		'statusDegree'	=> '1',
    	]);
    	Degreestudies::create([
    		'degreeStudy'	=> 'Arquitecto',
    		'statusDegree'	=> '1',
    	]);
    	Degreestudies::create([
    		'degreeStudy'	=> 'Abogado',
    		'statusDegree'	=> '1',
    	]);
    	Degreestudies::create([
    		'degreeStudy'	=> 'Otro',
    		'statusDegree'	=> '1',
    	]);
    }
}
