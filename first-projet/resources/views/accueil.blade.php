<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Unity</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen">

  <nav class="flex items-center justify-between px-10 py-4 bg-gray-100 ">
    <div class="text-[#C90184] text-2xl font-bold">
      Work <span class="text-[#e76abb] font-medium">Unity</span>
    </div>
  </nav>

  <div class="container mx-auto px-8 py-10">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold text-[#C90184]">Liste des employés</h2>
      <a href="{{route('employe.create') }}" class="bg-[#C90184] text-white px-4 py-2 rounded-lg shadow hover:bg-[#e76abb]">
        ➕ Ajouter un employé
      </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Nom</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Prénom</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Email</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Poste</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-3">Fathi</td>
            <td class="px-6 py-3">Housna</td>
            <td class="px-6 py-3">housna@example.com</td>
            <td class="px-6 py-3">Développeuse</td>
            <td class="px-6 py-3 flex justify-center space-x-2">
              <button class="bg-[#F783A3] text-white px-3 py-1 rounded-md">👁 Voir</button>
              <button class="bg-[#D3045D] text-white px-3 py-1 rounded-md">🖉 Modifier</button>
              <button class="bg-[#EC9CCC] text-white px-3 py-1 rounded-md">🗑 Supprimer</button>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-3">Idrissi</td>
            <td class="px-6 py-3">Farah</td>
            <td class="px-6 py-3">farah@example.com</td>
            <td class="px-6 py-3">Economiste</td>
            <td class="px-6 py-3 flex justify-center space-x-2">
              <button class="bg-[#F783A3] text-white px-3 py-1 rounded-md">👁 Voir</button>
              <button class="bg-[#D3045D] text-white px-3 py-1 rounded-md">🖉 Modifier</button>
              <button class="bg-[#EC9CCC] text-white px-3 py-1 rounded-md">🗑 Supprimer</button>
            </td>
          </tr>
          <tr class="border-b hover:bg-gray-50">
            <td class="px-6 py-3">Fatih</td>
            <td class="px-6 py-3">Sara</td>
            <td class="px-6 py-3">sara@example.com</td>
            <td class="px-6 py-3">Désigner</td>
            <td class="px-6 py-3 flex justify-center space-x-2">
              <button class="bg-[#F783A3] text-white px-3 py-1 rounded-md">👁 Voir</button>
              <button class="bg-[#D3045D] text-white px-3 py-1 rounded-md">🖉 Modifier</button>
              <button class="bg-[#EC9CCC] text-white px-3 py-1 rounded-md">🗑 Supprimer</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
