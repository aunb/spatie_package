<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use DB;
use App\Models\User;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete'
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        // $permission = Permission::first();
        // $user = User::first();
        // \DB::table('model_has_permissions')->create([
        //     'permission_id'=>$permission->id,
        //     'model_type'=>'App\models\User',
        //     'model_id'=>$user->id,
        // ]);
    }
}
