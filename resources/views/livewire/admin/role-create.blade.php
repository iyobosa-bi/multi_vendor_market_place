<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="card-header">
                            <h2 class="card-title">Create Role</h2>
                            <div class="card-actions">
                                <a href="{{ route('admin.role.index') }}" class="btn btn-primary btn-3">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form wire:submit.prevent="submit" class="card">
                            <div class="card-body">
                                <div class="row row-cards">
                                    <div class="col-md-12">
                                        <x-admin.input-text
                                            label="Role Name"
                                            placeholder="Enter Role Name"
                                            name="role_name"
                                            wire:model.defer="role_name"
                                        />
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        @foreach($permissions as $group => $permissionGroup)
                                            <label class="form-label">{{ $group }}</label>
                                            @foreach($permissionGroup as $item)
                                                <label class="form-check">
                                                    <input
                                                        wire:model="selectedPermissions"
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        value="{{ $item->name }}"
                                                    >
                                                    <span class="form-check-label">{{ $item->name }}</span>
                                                </label>
                                            @endforeach
                                        @endforeach
                                    </div>
                                    <x-input-error :messages="$errors->first('selectedPermissions')" class="mt-2" />
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                                    Create Role
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
