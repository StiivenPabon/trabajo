<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'blogger']);

        Permission::create(['name'=>'home'])->syncRoles([$role1 , $role2]);
        
        Permission::create(['name'=>'Products.index'])->syncRoles([$role1 , $role2]);                                                                               
        Permission::create(['name'=>'Products.create'])->assignRole($role1);                   
        Permission::create(['name'=>'Products.edit'])->assignRole($role1); 
        Permission::create(['name'=>'Products.destroy'])->assignRole($role1); 

        Permission::create(['name'=>'categorys.index'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'categorys.create'])->assignRole($role1); 
        Permission::create(['name'=>'categorys.edit'])->assignRole($role1); 
        Permission::create(['name'=>'categorys.destroy'])->assignRole($role1); 

        Permission::create(['name'=>'Subca.index'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'Subca.create'])->assignRole($role1); 
        Permission::create(['name'=>'Subca.edit'])->assignRole($role1); 
        Permission::create(['name'=>'Subca.destroy'])->assignRole($role1); 

    
    }
}
