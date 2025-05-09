<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KEIA-home solution</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

  <div class="fixed z-50 inset-0 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg  w-[560px]">
      <form action="register_control.php" method="post">
        <h2 class="text-2xl font-bold mb-2 w-full text-center">Register</h2>
        <label for="name" class=" font-semibold mb-1">Name</label>
        <input
          type="text"
          name="name"
          class="border mb-2 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
        <label for="email" class=" font-semibold mb-1">Email</label>
        <input
          name="email"
          type="text"
          class="border mb-2 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
        <label for="password" class=" font-semibold mb-1">Password</label>
        <input
          name="password"
          type="password"
          class="border mb-2 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
        <label for="repassword" class=" font-semibold mb-1">Confirm Password</label>
        <input
          name="repassword"
          type="password"
          class="border mb-6  border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
        <p class="text-sm text-gray-600 mb-4 text-center">
          already have account ? <a href="login.php" class="text-blue-600">login now</a>
        </p>
        <button type="submit" class="px-4 py-3 w-full bg-black text-white rounded-md cursor-pointer">Continue</button>
      </form>
    </div>
  </div>
</body>

</html>