<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Permission;
use App\Role;

class AddStationDataPermissionsToPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $new_permissions = array(
            array('name' => 'can_edit_station_data'),
            array('name' => 'can_add_station_data'),
            array('name' => 'can_delete_station_data'),
            array('name' => 'can_view_station_data'),
        );

        $new_permission_ids = array();
        // First add the permissions
        foreach ($new_permissions as $new_permission) {
            $permission = Permission::create($new_permission);
            $new_permission_ids[] = $permission->id;
        }

        // For now we're assigning these new permissions to all of the roles
        $roles = Role::get();
        foreach ($roles as $role) {
            $role->attachPermissions($new_permission_ids);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $new_permissions = array(
            'can_edit_station_data',
            'can_add_station_data',
            'can_delete_station_data',
            'can_view_station_data',
        );

        $roles = Role::get();
        $permissions = Permission::whereIn('name', $new_permissions)->get();
        $permission_ids = $permissions->lists('id');
        // First detach the permissions from the roles
        foreach ($roles as $role) {
            $role->detachPermissions($permission_ids);
        }
        // Now delete the permission altogether
        foreach ($permissions as $permission) {
            $permission->delete();
        }
    }
}
