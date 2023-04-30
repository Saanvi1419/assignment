<!DOCTYPE html>
<html>
    <title>register</title>
    <style>
.reg-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
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
.form button:hover,.form button:active,.form button:focus {
  background: #4359a0;
}
body {
  background-image: url('nature2.jpg');
  background-repeat: no-repeat;
}

    </style>
  </head>
  <body>
  <div class="reg-page">
    <div class="form">
      <form class="login-form" method="POST" action="<?php echo e(route('register')); ?>">
      <?php echo csrf_field(); ?>
      <?php echo method_field('post'); ?>
      <input type="email" name="email" placeholder="Email"/>
      <?php if($errors->has('email')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                                <?php endif; ?>
        <input type="text" name="name" placeholder="Name"/>
        <?php if($errors->has('name')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                <?php endif; ?>
        <input type="password" name="password" placeholder="PassWord"/>
        <?php if($errors->has('password')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('password')); ?></p>
                                <?php endif; ?>
        <input type="password" name="password_confirmation" placeholder="Password Confirmation" />
        <button class="button">Sign Up</button>
      </form>
    </div>
  </div>
  </body>
  </html>
</body>
</html><?php /**PATH C:\xampp\htdocs\dup\resources\views/register.blade.php ENDPATH**/ ?>