@csrf

<div>
    <x-input-label for="nome" :value="__('nome')" />
    <x-text-input id="nome" name="nome" type="text" class="mt-1 block w-full" :value="old('nome', $cliente->nome ?? '')" required autofocus autocomplete="nome" />
    <x-input-error class="mt-2" :messages="$errors->get('nome')" />
</div>

<div>
    <x-input-label for="endereco" :value="__('endereco')" />
    <x-text-input id="endereco" name="endereco" type="text" class="mt-1 block w-full" :value="old('endereco', $cliente->endereco ?? '')" required autofocus autocomplete="endereco" />
    <x-input-error class="mt-2" :messages="$errors->get('endereco')" />
</div>

<div>
    <x-input-label for="descricao" :value="__('descricao')" />
    <x-text-input id="descricao" name="descricao" type="text" class="mt-1 block w-full" :value="old('descricao', $cliente->descricao ?? '')" required autofocus autocomplete="descricao" />
    <x-input-error class="mt-2" :messages="$errors->get('descricao')" />
</div>

<div class="mt-4">
    <x-primary-button>{{ __('Salvar') }}</x-primary-button>
</div>