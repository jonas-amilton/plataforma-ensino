    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Painel Administrativo') }}
            </h2>
        </x-slot>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">

            @include('admin.partials.card-adm-panel', [
                'title' => 'Adicionar Disciplina',
                'content' => 'Você pode adicionar adicionar uma nova disciplina aqui.',
                'image' => 'images/adicionar-disciplina.jpg',
                'href' => '',
            ])

            @include('admin.partials.card-adm-panel', [
                'title' => 'Gerenciar Disciplinas',
                'content' => 'Você pode editar ou remover as disciplinas aqui.',
                'image' => 'images/gerenciar-disciplinas.jpg',
                'href' => '',
            ])

            @include('admin.partials.card-adm-panel', [
                'title' => 'Adicionar Professor',
                'content' => 'Você pode adicionar um novo professor aqui.',
                'image' => 'images/adicionar-professor.jpg',
                'href' => '',
            ])

            @include('admin.partials.card-adm-panel', [
                'title' => 'Gerenciar Professores',
                'content' => 'Você pode editar ou remover os professores aqui.',
                'image' => 'images/gerenciar-professores.jpg',
                'href' => '',
            ])

            @include('admin.partials.card-adm-panel', [
                'title' => 'Gerenciar Matriculas',
                'content' => 'Você pode gerenciar as matriculas aqui.',
                'image' => 'images/gerenciar-matriculas.jpg',
                'href' => '',
            ])

            @include('admin.partials.card-adm-panel', [
                'title' => 'Gerenciar Notas',
                'content' => 'Você pode gerenciar as notas aqui.',
                'image' => 'images/gerenciar-notas.jpg',
                'href' => '',
            ])
        </div>

    </x-app-layout>
