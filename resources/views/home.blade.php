<x-layout btn="Criar tarefa" href="{{route('task.create')}}">
    <section class="graph">
        <div class="graph-header">
            <h2>Progresso do dia</h2>
            Data
        </div>
        <div class="graph-header-subtl">
            Tarefas: <strong>3/6</strong>
        </div>
        <div class="graph-placeholder">

        </div>
    </section>
    <section class="list">
        <div class="list-header">
            <select name="">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        <div class="task-list">

            @foreach($tasks as $task)
                <x-task :data=$task />
            @endforeach
            
        </div>
    </section>
</x-layout>
