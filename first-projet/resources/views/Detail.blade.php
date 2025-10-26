<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails de l’employé</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    <h2 class="text-2xl font-bold text-[#C90184] mb-6 text-center">Détails de l’employé</h2>

    <form class="space-y-4 text-left">
      <div>
        <label class="block text-black text-lg font-bold mb-1">Nom :</label>
        <input type="text" value="{{ $employe->nom }}" readonly class="w-full p-2 border rounded-md">
      </div>

      <div>
        <label class="block text-black text-lg font-bold mb-1">Prénom :</label>
        <input type="text" value="{{ $employe->prenom }}" readonly class="w-full p-2 border rounded-md">
      </div>

      <div>
        <label class="block text-black text-lg font-bold mb-1">Email :</label>
        <input type="email" value="{{ $employe->email }}" readonly class="w-full p-2 border rounded-md">
      </div>

      <div>
        <label class="block  text-black text-lg font-bold mb-1">Poste :</label>
        <input type="text" value="{{ $employe->poste }}" readonly class="w-full p-2 border rounded-md">
      </div>

      <div class="pt-4 text-center">
        <a href="/" class="bg-[#C90184] text-white px-10 py-2 rounded-lg hover:bg-[#e76abb]">Retour</a>
      </div>
    </form>
  </div>

</body>
</html>
