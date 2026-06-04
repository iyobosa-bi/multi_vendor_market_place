<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleIndex extends Component
{
    public function render()
    {
        $roles = Role::withCount('permissions')->with('permissions')->get();
        return view('livewire.admin.role-index', compact('roles'));
    }
}
