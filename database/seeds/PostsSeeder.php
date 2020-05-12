<?php

use Illuminate\Database\Seeder;
use App\Files\Models\Posts;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::create([
        	'namePost'			=> 'Presidente',
    		'descriptionPost'	=> 'Presidente de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Gerente',
    		'descriptionPost'	=> 'Gerente de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Rector',
    		'descriptionPost'	=> 'Rector de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Secretaria',
    		'descriptionPost'	=> 'Secretaria de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Visepresidente',
    		'descriptionPost'	=> 'Visepresidente de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Licenciado',
    		'descriptionPost'	=> 'Licenciado de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Ingeniero',
    		'descriptionPost'	=> 'Ingeniero de la empresa',
    		'statusPost'		=> '1',
    	]);
    	Posts::create([
        	'namePost'			=> 'Otro',
    		'descriptionPost'	=> 'Otro puesto de la empresa',
    		'statusPost'		=> '1',
    	]);
    }
}
