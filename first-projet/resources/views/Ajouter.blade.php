<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Unity</title>
  @vite('resources/css/app.css')
</head>
<body>

  <div class="flex justify-center items-center mt-30">
    <form method="POST" action="{{route('employe.store')}}" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md space-y-4">
      @csrf

      <div>
        <label class="block text-lg font-bold mb-1">Nom</label>
        <input type="text" name="nom" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le nom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Prénom</label>
        <input type="text" name="prenom" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le prénom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Email</label>
        <input type="email" name="email" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer l’email">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Poste</label>
        <input type="text" name="poste" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le poste">
      </div>

      <div class="flex justify-between pt-4">
        <button type="submit" class="bg-[#C90184] text-white px-3 py-2 rounded-md  transition">➕ Ajouter</button>
      </div>
    </form>
  </div>

</body>
</html>
