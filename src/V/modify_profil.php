<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        require('header.php');
    ?>
    <br/>
    <center>
        <h5 id="title">Update your personal information.</h5>
    </center>
    <br/><br/><br/><br/><br/>
    <div class="row">
        <div class="col-6">
            <center>
                <form class="form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Login" name="login">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Lastname" name="lastname">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <br/>
            </center>
        </div>


        <div class="col-6">
            <center>
                    <div class="form-group">
                        <select class="custom-select" required>
                        <option value="">Sex</option>
                        <option value="1">Man</option>
                        <option value="2">Woman</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="custom-select" required>
                        <option value="">I am ...</option>
                        <option value="1">A man looking for a woman</option>
                        <option value="2">A woman looking for a man</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="custom-select"  name="age" required>
                                <option value="" selected >Select your age</option>
                                <?php for($value = 18; $value <= 75; $value++){ 
                                echo('<option value="' . $value . '">' . $value . '</option>');
                            }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="My location" name=""  class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Write a little biography about you...(less than 200 characters)"></textarea>
                    </div>
                    <br/>
            </center>
        </div>
    </div>
        <center>
        <button type="submit" class="btn btn-primary" id="btn-account" style="background-color:#E9467C; color:white; border-color:white; border-radius:10px;">Update</button>
        </center>
    </form>
    <?php
        require('footer.php');
    ?>
</body>
</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/m.css"> -->
    <link rel="stylesheet" href="css/modifyProfil.css">
    <title>Document</title>
</head>