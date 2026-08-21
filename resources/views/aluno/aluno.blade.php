<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alunos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex justify-end mb-4">
                    <a href="{{ route('aluno.create') }}" class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                        Novo Aluno
                    </a>
                </div>

                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">CPF</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Curso</th>
                            <th class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($alunos as $aluno)
                            <tr>
                                <td class="px-4 py-2">{{ $aluno->nome }}</td>
                                <td class="px-4 py-2">{{ $aluno->email }}</td>
                                <td class="px-4 py-2">{{ $aluno->cpf }}</td>
                                <td class="px-4 py-2">{{ $aluno->curso }}</td>
                                <td class="px-4 py-2 text-right space-x-2">
                                    <a href="{{ route('aluno.show', $aluno) }}" class="text-blue-600 hover:underline">Ver</a>
                                    <a href="{{ route('aluno.edit', $aluno) }}" class="text-yellow-600 hover:underline">Editar</a>
                                    <form action="{{ route('aluno.destroy', $aluno) }}" method="POST" class="inline" onsubmit="return confirm('Deseja realmente remover este aluno?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Remover</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-center text-gray-500">Nenhum aluno cadastrado.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $alunos->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
