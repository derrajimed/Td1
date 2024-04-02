<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1 class=" m-5"> Commande_Produit</h1>
  <table class="table w-75 m-5">
    <tr class="table-info">
      <th>id</th>
      <th>idProduit</th>
      <th>id Commande</th>
      <th>Quantité</th>
      <th>Prix</th>
      <th>Montant</th>
      <th>created_at</th>
    </tr>
    @foreach ($liv as $val)
    <tr class="table-light">
      <td>{{$val->id}}</td>
      <td>{{$val->idProduit}}</td>
      <td>{{$val->idCommande}}</td>
      <td>{{$val->Qte}}</td>
      <td>{{$val->Prix}}</td>
      <td>{{$val->Montant}}</td>
      <td>{{$val->created_at}}</td>
    </tr>
    @endforeach
  </table>
   
</body>
</html>
