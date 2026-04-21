<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="../css/output.css">
    <title>Login</title>
</head>

<body class="min-h-screen flex">
    <div class="hidden lg:block lg:w-1/2">
        <img src="../assets/background.webp" alt="" class="h-full w-full object-cover">
    </div>
    <div class="w-full lg:w-1/2 flex flex-col justify-center px-6 sm:px-12 lg:px-20">
        <div class="max-w-md w-full mx-auto">
            <!-- Heading -->
            <div class="text-center">
                <h1 class="text-3xl font-bold mb-2">Create an account</h1>
                <p class="text-gray-400 mb-8">Enter your details below to create your account</p>
            </div>

            <!-- Form -->
            <form class="space-y-6">
                <div>
                    <label class="block text-sm mb-2" for="fullname">Fullname</label>
                    <input type="text" placeholder="Fullname" id="fullname" required
                        class="w-full px-4 py-2 rounded-md border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500" />
                </div>
                <div>
                    <label class="block text-sm mb-2" for="email">Email</label>
                    <input type="email" placeholder="Email" id="email" required
                        class="w-full px-4 py-2 rounded-md border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500" />
                </div>
                <div>
                    <label class="block text-sm mb-2" for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" required
                        class="w-full px-4 py-2 rounded-md border border-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500" />
                </div>
                <button type="submit"
                    class="w-full bg-black text-white py-2 rounded-md font-medium hover:bg-black/85 transition">
                    Create Account
                </button>
            </form>
            <p class="text-center text-sm text-gray-700 mt-6">
                Already have an account?
                <a href="./login.php" class="underline hover:text-gray-500">Sign In</a>
            </p>
        </div>
    </div>
</body>

</html>