<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email"
                   class="w-full p-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring focus:ring-blue-200">

            <label for="password" class="block text-sm font-medium text-gray-600 mb-1">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password"
                   class="w-full p-2 border border-gray-300 rounded-md mb-4 focus:outline-none focus:ring focus:ring-blue-200">

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300">Login</button>

            <div class="text-center mt-4">
            </div>
        </form>
    </div>
</body>
</html>
