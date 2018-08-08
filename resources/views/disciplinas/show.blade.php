<h1>{{ $disciplina->titulo }}</h1>
<p>{{ $disciplina->ementa }}</p>
<a href="/disciplinas/{{ $disciplina->id }}/turmas/create">Inserir Turma</a>

<h2>Turmas:</h2>
@foreach ($disciplina->turmas as $turma)
    <div>
    {{ $turma->ministrante }}
    {{ $turma->inicio }}
    </div>
@endforeach