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
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name'=>'home'])->syncRoles([$role1 , $role2]);
        
        Permission::create(['name'=>'Products.index'])->syncRoles([$role1 , $role2]);                                                                               
        Permission::create(['name'=>'Products.create'])->syncRoles([$role1 , $role2]);                    
        Permission::create(['name'=>'Products.edit'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'Products.destroy'])->syncRoles([$role1 , $role2]);

        Permission::create(['name'=>'categorys.index'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'categorys.create'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'categorys.edit'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'categorys.destroy'])->syncRoles([$role1 , $role2]);

        Permission::create(['name'=>'Subca.index'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'Subca.create'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'Subca.edit'])->syncRoles([$role1 , $role2]);
        Permission::create(['name'=>'Subca.destroy'])->syncRoles([$role1 , $role2]);

    
    }
}
