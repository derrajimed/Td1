<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1 class=" m-5 text-center"> Commande_Produit</h1>
  <table class="table w-100  text-center">
    <tr>
      <form action="/store" method="post" >
        @csrf
        <div class="row m-2">
          <div class="col-2">
            <input type="text" name="idProduit" placeholder="id Produit">
          </div>
          <div class="col-2">
          <input type="text" name="idCommande" placeholder="id Commande">

          </div>
          <div class="col-2">
          <input type="text" name="Quantité" placeholder="Quantité">
          </div>
          <div class="col-2">
          <input type="text" name="Prix" placeholder="Prix">
          </div>
          <div class="col-2">
          <input type="text" name="Montant" placeholder="Montant">

          </div>
          <div class="col-2"><button class="btn btn-info  ">Ajouter</button></div>

        </div>
      </form>
    </tr>
    <tr class="table-success">
      <th>id</th>
      <th>idProduit</th>
      <th>id Commande</th>
      <th>Quantité</th>
      <th>Prix</th>
      <th>Montant</th>
      <th>created_at</th>
      <th>Actions</th>
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
      <td class="row"> 
        <form method="post" class="col-6">
            <a href="/{{$val->id}}" class="btn btn-info">Delete</a>
        </form>
      

      </td>
    </tr>
    @endforeach
  </table>

  <div class="row m-3 w-100">

    <div class="col-6">
    <h4 class=" m-5 text-center"> Produits </h4>

      <table class="table w-75 m-5 text-center " >
        <tr class="table-success">
          <th>
            id Produit 
          </th>
          <th>
            Quantité
          </th>
        </tr>
        @foreach ($prd as $val)
        <tr class="table-light">
        <td>
          {{$val->idProduit}}
        </td>

        <td>
          {{$val->Qte}}
        </td>

        </tr>
        @endforeach

      </table>
    </div>
    <div>
      
    <div class="col-6">
    <h4 class=" m-5 text-center"> Commandes </h4>

    <table class="table w-75 m-5 text-center" >
        <tr class="table-success ">
          <th>
            idCommande
          </th>
          <th>
            Quantité
          </th>
        </tr>
        @foreach ($cmds as $val)
        <tr class="table-light">
        <td>
          {{$val->idCommande}}
        </td>

        <td>
          {{$val->Qte}}
        </td>

        </tr>
        @endforeach

      </table>
    </div>
    </div>
  </div> 
   
</body>
</html>
