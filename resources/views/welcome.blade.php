<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
</head>

<body class="antialiased">
  <div class="items-top relative flex min-h-screen justify-center bg-gray-100 py-4 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
      <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
        @auth
          <a class="text-sm text-gray-700 underline dark:text-gray-500" href="{{ url('/home') }}">Home</a>
        @else
          <a class="text-sm text-gray-700 underline dark:text-gray-500" href="{{ route('login') }}">Log in</a>

          @if (Route::has('register'))
            <a class="ml-4 text-sm text-gray-700 underline dark:text-gray-500" href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      </div>
    @endif
  </div>
</body>

</html>
