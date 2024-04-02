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
            <div class="form-group">
              <label for="id">id Produit:</label>
              <input type="text" class="form-control" name="idProduit" value="{{$val->idProduit}}" >
            </div>
            <div class="form-group">
              <label for="idc">id Commande :</label>
              <input type="text" class="form-control" name="idCommande" value="{{$val->idCommande}}"> 
            </div>
            <div class="form-group">
              <label for="Qte">Quantité :</label>
              <input type="text" class="form-control" name="Quantité" value="{{$val->Qte}}">
            </div>
            <div class="form-group">
              <label for="Prix">Prix:</label>
              <input type="text" class="form-control" name="Prix" value="{{$val->Prix}}">
            </div>
            <div class="form-group">
              <label for="Mantant">Mantant :</label>
              <input type="text" class="form-control" name="Montant" value="{{$val->Montant}}">
            </div>
            <div>
            <a href="/updateCommande/{{$val->id}}" class="btn btn-info  ">Modifie</button></div>


          @endforeach 

        </div>
      </form>

     
</body>
</html>