<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Unity</title>
  @vite('resources/css/app.css')
</head>
<body>

  <nav class="flex items-center justify-between px-20 py-4 bg-gray-100 font-bold">
    <div class="text-[#C90184] text-2xl">
      Work <span class="font-medium text-[#e76abb]">Unity</span>
    </div>

    <ul class="flex space-x-6">
      <li><a href="#" class="text-[#C90184] font-semibold">Accueil</a></li>
      <li><a href="#" class="text-[#C90184] font-semibold">Employé</a></li>
      <li><a href="#" class="text-[#C90184] font-semibold">Ajouter</a></li>
    </ul>
  </nav>

  <div class="flex justify-center items-center mt-30">
    <form method="POST" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md space-y-4">
      @csrf
      <h2 class="text-2xl font-bold text-center text-[#C90184] mb-4">Ajouter un employé</h2>

      <div>
        <label class="block text-lg font-bold mb-1">Nom</label>
        <input type="text" name="lastname" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le nom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Prénom</label>
        <input type="text" name="firstname" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le prénom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Email</label>
        <input type="email" name="email" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer l’email">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Poste</label>
        <input type="text" name="position" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le poste">
      </div>

      <div class="flex justify-between pt-4">
        <button type="submit" class="bg-[#C90184] text-white px-3 py-2 rounded-md  transition">➕ Ajouter</button>
        <button type="button" class="bg-[#e76abb] text-white px-3 py-2 rounded-md">📝 Modifier</button>
        <button type="button " class="bg-[#FA80B4] text-white px-3 py-2 rounded-md">🗑 Supprimer</button>
      </div>
    </form>
  </div>

</body>
</html>
