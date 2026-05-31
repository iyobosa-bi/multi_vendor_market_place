<div class="mb-3">
    <label class="form-label">{{ $label }}</label>
    <input
        {{ $attributes->merge(['class' => 'form-control']) }}
        type="{{ $type ?? 'text' }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        value="{{ old($name, $value) }}"
        {{ $disabled ? 'disabled' : '' }}
        {{ $required ? 'required' : '' }}
        {{ $readonly ? 'readonly' : '' }}
    />
    <x-input-error :messages="$errors->get($name)" class="mt-2" />
</div>
