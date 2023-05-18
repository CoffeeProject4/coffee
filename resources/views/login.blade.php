<!DOCTYPE html>
<html>
  <head>
    <title>Sign In/Sign Up</title>
  </head>
  <body>
    <div class="container">
      <div class="form-container">
        <h1>Sign In</h1>
        <form action="{{ route('login') }}" method="post">
          @csrf
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          <button type="submit" name="signIn">Sign In</button>
        </form>
      </div>
      <div class="form-container">
        <h1>Sign Up</h1>
        <form action="{{ route('store-data') }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="text" name="name" placeholder="Full Name">
          <input type="text" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="confirmpassword" placeholder="Confirm Password">
          <button type="submit" name="signUp">Sign Up</button>
        </form>
      </div>
    </div>
  </body>
</html>
