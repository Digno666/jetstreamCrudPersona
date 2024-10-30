<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <title>CRUD PERSONA</title>
</head>
<body>
    <div class="container mx-auto py-10">
        <div class="text-center mb-6">
          <h1 class="text-3xl font-bold mb-3">LISTA DE PERSONAS</h1>
        </div>
      
        <div class="flex justify-between items-center mb-6">
          <a href="{{ route('persona.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Registrar</a>
          <form action="/persona/index" method="post" class="flex items-center space-x-2">
            @method('GET')
            @csrf
            <select name="criterio" class="form-input border-b border-r-0 border-l-0 border-t-0">
              <option value="nombre">Nombre</option>
              <option value="id">CI</option>
            </select>
            <input type="text" name="buscar" class="form-input border-b border-r-0 border-l-0 border-t-0" placeholder="Buscar" aria-label="Buscar">
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded" type="submit" id="button-addon2">
              <i class="fas fa-search"></i> Buscar
            </button>
          </form>
        </div>
        @if(session('success'))
        <div class="bg-green-500 text-white p-2">
              {{ session('success') }}
            </div>
        @endif
        <div class="overflow-x-auto">
          <table class="table-auto w-full border-collapse">
            <thead>
              <tr class="bg-gray-200">
                <th class="px-4 py-2">Codigo</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Apellido</th>
                <th class="px-4 py-2">Profesion</th>
                <th class="px-4 py-2">Telefono</th>
                <th class="px-4 py-2">celular</th>
                <th class="px-4 py-2">email</th>
                <th class="px-4 py-2">direccion</th>
                <th class="px-4 py-2">fecha de nacimiento</th>
                <th class="px-4 py-2">lugar de nacimiento</th>
                <th class="px-4 py-2">estado</th>
                <th class="px-4 py-2">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($persona as $item)
              <tr class="border-b">
                <td class="px-4 py-2">{{ $item->per_cod }}</td>
                <td class="px-4 py-2">{{ $item->per_nom }}</td>
                <td class="px-4 py-2">{{ $item->per_appm }}</td>
                <td class="px-4 py-2">{{ $item->per_prof }}</td>
                <td class="px-4 py-2">{{ $item->per_telf }}</td>
                <td class="px-4 py-2">{{ $item->per_cel }}</td>
                <td class="px-4 py-2">{{ $item->per_email }}</td>
                <td class="px-4 py-2">{{ $item->per_dir }}</td>
                <td class="px-4 py-2">{{ $item->per_fnac }}</td>
                <td class="px-4 py-2">{{ $item->per_lnac }}</td>
                <td class="px-4 py-2">{{ $item->per_est }}</td>
                <td class="px-4 py-2">
                  <a href="{{route('persona.edit', $item)}}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded mr-2"><i class="fas fa-edit"></i></a>
                  <form action="{{route('persona.destroy', $item)}}" method="POST" class="inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded"><i class="fas fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
</body>
</html>