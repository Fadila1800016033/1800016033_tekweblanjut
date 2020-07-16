<!DOCTYPE html>
<html>
<head>
<title>User</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #808080;
}

.btn{
		text-decoration: none;
		background-color: #eeeeee;
		color: white;
		padding:15px  28px;
		border: none;
		font-size: 16px;
    float:right;
    margin:5px;
	}

.btn {background-color: RoyalBlue;} 


</style>
</head>
<body>

<div class="topnav">
  <a href="<?= base_url('Login/Logout'); ?>" class="btn">Logout</a>
  <a href="<?= base_url('User/add_new'); ?>" class="btn">Tambah Data</a>
</div>



<div class="container">
  <h2>Tabel Data User</h2>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>User ID</th>
        <th>User Nama</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($userr as $row): ?>
      <tr>
        <td><?= $row['user_id'];?></td>
        <td><?= $row['user_nama'];?></td>
        <td><?= $row['user_email'];?></td>
        <td> <a href="/user/edit/<?= $row['user_id']; ?>">Update</a></td>
        <td> <a href="/user/delete/<?= $row['user_id']; ?>">Delete</a></td>
        
        </tr>
    <?php endforeach;?>
    </tbody>
  </table>

  </div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
