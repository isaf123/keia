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

  <div class="fixed z-50 inset-0 flex items-center justify-center bg-white ">

    <form action="contact_control.php" method="post" class="w-[600px]">
      <h2 class="text-2xl font-bold mb-8 w-full text-center">Message Form</h2>
      <div class="flex gap-8 mb-4 w-full">
        <div class="flex-1">
          <label for="first_name" class=" font-semibold mb-1">First Name</label>
          <input
            name="first_name"
            type="text"
            class="border  border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
        </div>
        <div class="flex-1">
          <label for="last_name" class=" font-semibold mb-1">Last Name</label>
          <input
            name="last_name"
            type="text"
            class="border border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
        </div>

      </div>

      <label for="email" class=" font-semibold mb-1">Email</label>
      <input
        name="email"
        type="email"
        class="border mb-4 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />
      <label for="phone" class=" font-semibold mb-1">Phone Number</label>
      <input
        name="phone"
        type="phone"
        class="border mb-4 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />

      <label for="subject" class=" font-semibold mb-1">Message Subject</label>
      <input
        name="subject"
        type="subject"
        class="border mb-4 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full" />

      <label for="message" class=" font-semibold mb-1">Message</label>
      <textarea name="message" id="" class="h-[120px] border mb-4 border-gray-300 border-input bg-background text-sm rounded-md px-3 py-2 shadow-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring w-full"></textarea>

      <button type="submit" class="px-4 py-3 w-full bg-black text-white rounded-md cursor-pointer">Continue</button>
    </form>

  </div>
  </div>
</body>

</html>