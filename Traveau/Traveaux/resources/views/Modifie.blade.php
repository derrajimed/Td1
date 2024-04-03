<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<form action="" method="post" class=" w-50 m-5">
        @csrf
        <div >
            @foreach($data as $val)
            <h1>Modifie </h1>
            <form action="/store" method="post" >
        @csrf
        <div class="form-group w-75 m-3" >
    <label for="Produit">N° Produit</label>
    <input type="text" class="form-control" name="idProduit" value="{{$val->idProduit}}"  >
  </div>
  <div  class="form-group w-75 m-3" >
    <label for="Produit">N° Commande</label>
    <input type="text" class="form-control" name="idCommande" value="{{$val->idCommande}}" >
  </div>
  <div  class="form-group w-75 m-3" >
    <label for="Produit">Qte</label>
    <input type="text" class="form-control" name="Quantité" value="{{$val->Qte}}"  >
  </div>
  <div  class="form-group w-75 m-3" >
    <label for="Produit">Prix</label>
    <input type="text" class="form-control" name="Prix" value="{{$val->Prix}}"  >
  </div>
  <div  class="form-group w-75 m-3" >
    <label for="Produit">Total</label>
    <input type="text" class="form-control" name="Montant" value="{{$val->Montant}}"  >
  </div>
  <div >
    <a href="/upd/modification/{id}" class="btn btn-primary w-25  m-3">Modifie</a>
  </div>


      </form>
          @endforeach 

        </div>
      </form>

     
</body>
</html>