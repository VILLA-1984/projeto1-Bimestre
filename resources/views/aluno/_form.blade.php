@csrf

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Nome</label>
    <input type="text" name="nome" value="{{ old('nome', $aluno->nome ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
    @error('nome') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Email</label>
    <input type="email" name="email" value="{{ old('email', $aluno->email ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
    @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">CPF</label>
    <input type="text" name="cpf" maxlength="11" value="{{ old('cpf', $aluno->cpf ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
    @error('cpf') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
    <input type="date" name="data_nascimento" value="{{ old('data_nascimento', isset($aluno) ? $aluno->data_nascimento->format('Y-m-d') : '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
    @error('data_nascimento') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Telefone</label>
    <input type="text" name="telefone" value="{{ old('telefone', $aluno->telefone ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
    @error('telefone') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="mb-6">
    <label class="block text-sm font-medium text-gray-700">Curso</label>
    <input type="text" name="curso" value="{{ old('curso', $aluno->curso ?? '') }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
    @error('curso') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
</div>

<div class="flex justify-end space-x-2">
    <a href="{{ route('aluno.index') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Cancelar</a>
    <button type="submit" class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">Salvar</button>
</div>
