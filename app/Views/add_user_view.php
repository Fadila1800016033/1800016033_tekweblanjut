<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    
    <title>Tambah Data</title>
  </head>
  <body>
    
  
    <div class="container">
        <div class="row">
        <div class="col-md-4 mx-auto pt-5">
        
        <form action="/User/save" method="POST">
            <div class="form-group">
              <h3><center><span>Tambah Data</span></h3></center>

                <label for="userid">User ID</label>
                <input type="text" name="user_id" class="form-control" id="user_id" placeholder="User ID">
            </div>
            <div class="form-group">
                <label for="usernama">Nama</label>
                <input type="text" name="user_nama" class="form-control" id="user_nama" placeholder="Nama">
            </div>

            <div class="form-group">
                <label for="useremail">Email</label>
                <input type="text" name="user_email" class="form-control" id="user_email" placeholder="E-Mail">
            </div>

            <div class="form-group">
                <label for="userpass">Password</label>
                <input type="password" name="user_pass" class="form-control" id="user_pass" placeholder="Password">
            </div>
          
            <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>