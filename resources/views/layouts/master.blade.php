@auth
    <form id="logout-form" action="/logout" method="POST"> 
        {{ csrf_field() }}
        <button type="submit">Sair </button>
    </form>
@else
    <a href="/login">Login</a>
    <a href="/register">Register</a>
@endauth

<form method="POST" action="/disciplinas/search">
    {{ csrf_field() }}
    <input name="text" type="text">
    <button type="submit"> Buscar </button>
</form>