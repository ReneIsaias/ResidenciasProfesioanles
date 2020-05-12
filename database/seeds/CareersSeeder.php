<?php

use Illuminate\Database\Seeder;
use App\Files\Models\Careers;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Files\Models\Careers::class, 20)->create();
    	Careers::create([
    		'keyCareer'		=> 'INDU',
    		'careerName'	=> 'Ingenieria Industrial',
    		'careerStatus'	=> '1',
    	]);
    	Careers::create([
    		'keyCareer'		=> 'IQUI',
    		'careerName'	=> 'Ingenieria Quimica',
    		'careerStatus'	=> '1',
    	]);
    	Careers::create([
    		'keyCareer'		=> 'ISIC',
    		'careerName'	=> 'Ingenieria en Sistemas Computacionales',
    		'careerStatus'	=> '1',
    	]);
    	Careers::create([
    		'keyCareer'		=> 'IMEC',
    		'careerName'	=> 'Ingenieria Mecatronica',
    		'careerStatus'	=> '1',
    	]);
    	Careers::create([
    		'keyCareer'		=> 'INFO',
    		'careerName'	=> 'Ingenieria Informatica',
    		'careerStatus'	=> '1',
    	]);
    	Careers::create([
    		'keyCareer'		=> 'ICIV',
    		'careerName'	=> 'Ingenieria Civil',
    		'careerStatus'	=> '1',
    	]);
    	Careers::create([
    		'keyCareer'		=> 'ILOG',
    		'careerName'	=> 'Ingenieria Logistica',
    		'careerStatus'	=> '1',
    	]);
    }
}
