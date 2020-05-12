<?php

use Illuminate\Database\Seeder;
use App\RolPermission\Models\Permissions;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	///////////// USUARIOS
        Permissions::create([
        	'namePermission'		=> 'Navegar usuarios',
    		'slugPermission'		=> 'user.index',
    		'descriptionPermission'	=> 'Lista y navega todos los usuarios del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Ver detalle de usuario',
    		'slugPermission'		=> 'user.show',
    		'descriptionPermission'	=> 'Ver en detalle cada usuario del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Edicion de usuarios',
    		'slugPermission'		=> 'user.edit',
    		'descriptionPermission'	=> 'Editar cualquier dato de un usuario del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Eliminar usuario',
    		'slugPermission'		=> 'user.destroy',
    		'descriptionPermission'	=> 'Eliminar cualquier usuario del sistema',
    		'statusPermission'		=> '1',
    	]);
    	//////////////// ROLES
    	Permissions::create([
        	'namePermission'		=> 'Navegar roles',
    		'slugPermission'		=> 'role.index',
    		'descriptionPermission'	=> 'Lista y navega todos los roles del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Ver detalles de rol',
    		'slugPermission'		=> 'role.show',
    		'descriptionPermission'	=> 'Ver en detalle cada rol del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Creacion de roles',
    		'slugPermission'		=> 'role.create',
    		'descriptionPermission'	=> 'Editar cualquier datos de un rol del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Edicion de roles',
    		'slugPermission'		=> 'role.edit',
    		'descriptionPermission'	=> 'Editar cualquier datos de un rol del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Eliminar rol',
    		'slugPermission'		=> 'role.destroy',
    		'descriptionPermission'	=> 'Eliminar cualquier rol del sistema',
    		'statusPermission'		=> '1',
    	]);
    	/////////// PROYECTOS
    	Permissions::create([
        	'namePermission'		=> 'Navegar proyectos',
    		'slugPermission'		=> 'project.index',
    		'descriptionPermission'	=> 'Lista y navega todos los proyectos del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Ver detalles de proyecto',
    		'slugPermission'		=> 'project.show',
    		'descriptionPermission'	=> 'Ver en detalle cada proyecto del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Creacion proyectos',
    		'slugPermission'		=> 'project.create',
    		'descriptionPermission'	=> 'Editar cualquier datos de un proyecto del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Edicion proyectos',
    		'slugPermission'		=> 'project.edit',
    		'descriptionPermission'	=> 'Editar cualquier datos de un proyecto del sistema',
    		'statusPermission'		=> '1',
    	]);
    	Permissions::create([
        	'namePermission'		=> 'Eliminar proyecto',
    		'slugPermission'		=> 'project.destroy',
    		'descriptionPermission'	=> 'Eliminar cualquier proyecto del sistema',
    		'statusPermission'		=> '1',
    	]);
    }
}
