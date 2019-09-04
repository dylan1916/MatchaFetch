<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>    
    <div class="container-fluid">
        <div class="row">

            <div class="col">
                <a href="#" class="navbar-brand" style="color:#E9467C; font-size: 36px; font-family: 'Secular One', sans-serif; text-decoration: none;"><img src="https://img.icons8.com/color/39/000000/--tinder.png" class="d-inline-block align-top">Matcha</a>
            </div>

            <div class="col" style="text-align:right;">
                <a href="#"  data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary active" role="button" aria-pressed="true" style="background-color:white; color:#E9467C; margin-top: 1%;">CONNEXION</a>
            </div>
                
        </div>
        <center>
            <br/>
            <h1 id="emble">Matchez. Discutez.<br/> Faites des <br/> rencontres.</h1>
                <br/>
            <h5 id="slogan">En cliquant sur inscription, vous accepter nos Conditions d'utilisation.</h5>
                <br/><br/><br/>
                <a href="#" data-toggle="modal" data-target="#exampleModalInscription" id="btn-account" class="btn btn-primary btn-lg" role="button" aria-pressed="true" style="background-color: rgba(233, 70, 124, 0.9); border-color:rgba(233, 70, 124, 0.9); border-radius: 20px; border-left-width: 13px; border-right-width: 13px;">INSCRIPTION</a>
        </center>
    </div>
      

    <!-- POP UP CONNEXION -->
     <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="navbar-brand" style="color:#424242; font-size: 26px; font-family: 'Secular One', sans-serif; text-decoration: none; font-style: italic;"><img src="https://img.icons8.com/color/32/000000/--tinder.png" class="d-inline-block align-top">CONNEXION</a>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- FORMULAIRE CONNEXION -->
              <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Adresse e-mail</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre e-mail">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                    </div>
                    <br/>
                    <center>
                        <a href="#" style="text-decoration:none;"><p style="font-style:bold;color:#E9467C;">Mot de passe oublié ?</p></a>
                    </center>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"  style="background-color:#E9467C; color:white; border-color:white; border-radius:10px;">Connexion</button>
                    </div>
                  </form>
              <!-- //////// -->
            </div> 
          </div>
        </div>
      </div>
    <!-- //////////////// -->


    <!-- POP UP INSCRIPTION -->
    <!-- Modal -->
     <div class="modal fade" id="exampleModalInscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="navbar-brand" style="color:#424242; font-size: 26px; font-family: 'Secular One', sans-serif; text-decoration: none; font-style: italic;"><img src="https://img.icons8.com/color/32/000000/--tinder.png" class="d-inline-block align-top">C'EST PARTI !</a>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- FORMULAIRE INSCRIPTION -->
                  <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nom</label>
                          <input type="text" class="form-control" placeholder="Entrer votre nom">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Prénom</label>
                          <input type="text" class="form-control" placeholder="Entrez votre prénom">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Adresse e-mail</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre adresse e-mail">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre mot de passe">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">Confirmer votre mot de passe</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmer votre mot de passe">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="btn-account" style="background-color:#E9467C; color:white; border-color:white; border-radius:10px;">Créer un compte</button>
                        </div>
                      </form>
                  <!-- //////// -->
                </div> 
              </div>
            </div>
          </div>
        <!-- //////////////// --> 
</body>
</html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Secular+One|Work+Sans:700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/homepage.css">
        <title>Homepage</title>
</head>