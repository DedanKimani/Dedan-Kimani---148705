<!DOCTYPE html>
<html>
<head>
  <title>Sign up page</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
  <form class="container mx-auto mt-5 max-w-md" action="post.php" method="POST">
  <h3 class="text-center mb-5">Sign up today</h3>
  <div class="mb-3">
      <label class="block mb-2 font-bold text-gray-700">Name</label>
      <input autocomplete="off" type="text" class="form-input px-4 py-3 w-full rounded-lg border border-gray-400" name="name" placeholder="Type your name">
    </div>
    <div class="mb-3">
  <label class="block mb-2 font-bold text-gray-700">username</label>
  <input autocomplete="off" type="text" class="form-input px-4 py-3 w-full rounded-lg border border-gray-400" name="username" placeholder="Type a username">
</div>

<div class="mb-3">
  <label class="block mb-2 font-bold text-gray-700">password</label>
  <input autocomplete="off" type="password" class="form-input px-4 py-3 w-full rounded-lg border border-gray-400" name="password" placeholder="Enter your password">
</div>

<div class="mb-3">
  <input autocomplete="off" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" value="Submit">
</div>
</form>
  <div class="container mx-auto mt-5 max-w-md">
     <p class="text-center">Already have an account? <a href="login.php" class="font-bold text-blue-500 hover:text-blue-700">Log in</a></p>
   </div>
</body>
</html> 