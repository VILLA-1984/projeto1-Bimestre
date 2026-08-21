<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Aluno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 space-y-4">
                <div>
                    <span class="block text-sm font-medium text-gray-500">Nome</span>
                    <span class="block text-gray-900">{{ $aluno->nome }}</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-500">Email</span>
                    <span class="block text-gray-900">{{ $aluno->email }}</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-500">CPF</span>
                    <span class="block text-gray-900">{{ $aluno->cpf }}</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-500">Data de Nascimento</span>
                    <span class="block text-gray-900">{{ $aluno->data_nascimento->format('d/m/Y') }}</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-500">Telefone</span>
                    <span class="block text-gray-900">{{ $aluno->telefone }}</span>
                </div>
                <div>
                    <span class="block text-sm font-medium text-gray-500">Curso</span>
                    <span class="block text-gray-900">{{ $aluno->curso }}</span>
                </div>

                <div class="flex justify-end space-x-2 pt-4">
                    <a href="{{ route('aluno.index') }}" class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Voltar</a>
                    <a href="{{ route('aluno.edit', $aluno) }}" class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">Editar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
