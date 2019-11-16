<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<br>
<br>
<div class="container">
<div class="card">
  <div class="card-header">
    UTS
  </div>
  <div class="card-body">
    <h4>form pembelian barang</h4>
    <form action="hasil.php" method="POST">
    <div class="container">
    <div class="row">
    <div class="col-md-6 offset-md-3">
  <div class="form-group row">
    <label for="nambar" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10">
      <input type="text" name="nambar" class="form-control" id="inputEmail3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
    <label for="jumbel" class="col-sm-2 col-form-label">Jumlah Beli</label>
    <div class="col-sm-10">
      <input type="text" name="jumbel" class="form-control"  id="inputPassword3" placeholder="">
    </div>
  </div>
  <div class="form-group row">
  <label for="jebay" class="col-sm-2 col-form-label">Jenis bayar</label>
  <div class="col-sm-10">
      <select id="inputState" name="jen_bay" class="form-control">
        <option selected value="kredit">kredit</option>
        <option value="tunai">tunai</option>
       
      </select>
    </div>
    </div>
  <fieldset class="form-group">
    <div class="row">
    <label for="input" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-10">
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" name="checkB" id="asuransi" value="Asuransi">
        <label class="form-check-label" for="asuransi">Asuransi</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="checkB" id="Member" value="Member">
        <label class="form-check-label" for="Member">Member</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="checkB" id="Non-Member" value="Non Member">
     <label class="form-check-label" for="Non-Member">Non Member</label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Diskon</div>
    <div class="col-sm-10">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="Radio" name="diskon" id="diskon10" value="10%">
        <label class="form-check-label" for="diskon10">10%</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" name="diskon" type="Radio" id="diskon20" value="20%">
        <label class="form-check-label" for="diskon20">20%</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">submit</button>
      <button type="reset" class="btn btn-primary">reset</button>
    </div>
  </div>
  </div>
  </div>
  </div>
</form>
  </div>
</div>
</div>
<br>
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">STMIK Antar Bangsa</span>
  </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>