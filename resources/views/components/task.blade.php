<div class="task">
    <div class="title">
        <input type="checkbox"
            @if ($data && $data['is_done'])
                checked
            @endif
        />
        <h3 class="task-title">{{ $data['title'] ?? ''}}</h3>
    </div>
    <div class="priority">
        <div class="sphere"></div>
        <div>{{ $data['category']->title ?? '' }}</div>
    </div>
    <div class="actions">
        <a href="{{route('task.edit')}}">
            Editar
        </a>
        <a href="{{route('task.delete')}}">
            Excluir
        </a>
    </div>
</div>
