<?php

namespace App\Livewire\Admin;

use App\Service\NotificationService;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleCreate extends Component
{
    public string $role_name = '';

    public array $selectedPermissions = [];

    protected function rules(): array
    {
        return [
            'role_name' => 'required|string|unique:roles,name',
            'selectedPermissions' => 'required|array',
            'selectedPermissions.*' => 'exists:permissions,name',
        ];
    }

    public function submit()
    {
        $this->validate();

        $role = Role::firstOrCreate([
            'name' => $this->role_name,
            'guard_name' => 'admin',
        ]);

        $role->syncPermissions($this->selectedPermissions);

        NotificationService::createMessage('Role created successfully');

        $this->reset(['role_name', 'selectedPermissions']);
    }

    public function render()
    {
        $permissions = Permission::all()->groupBy('group_name');
        return view('livewire.admin.role-create', compact('permissions'));
    }
}
