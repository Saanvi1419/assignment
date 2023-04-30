<!DOCTYPE html>
<html lang="en">
<head>
    <style>
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4c82af;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
body {
  background-image: url('d.jpg');

}

    .form button:hover,.form button:active,.form button:focus {
  background: #4359a0;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <form action="<?php echo e(route('logout')); ?>">
    <button>log out</button>
        <h1>home:<?php echo e(Auth::user()->name); ?></h1>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\dup\resources\views/home.blade.php ENDPATH**/ ?>