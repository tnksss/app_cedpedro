<form action="{{route('folders.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="cgm">CGM: </label>
        <input class="form-control" name="cgm" type="text" placeholder="12312312399">
    </div>
    <div class="mb-3">
        <label for="name">Nome: </label>
        <input class="form-control" name="name" type="text" placeholder="12312312399">
    </div>
    <div class="mb-3">
        <label for="birth_date">Data de Nascimento: </label>
        <input class="form-control" name="birth_date" type="date" placeholder="">
    </div>
    