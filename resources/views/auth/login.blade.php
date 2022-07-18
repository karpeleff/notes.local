<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="max-w-2xl mx-auto">
    <div
        class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm m-4 p-4 sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
            <div>
                <label for="email" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your email</label>
                <input type="email" name="email" value="{{ old('email') }}" id="email" class="bg-gray-50 border border-gray-300
                 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                  dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required="">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div>
                <label for="password" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Your password</label>
                <input type="password" name="password" id="password" placeholder="" class="  @error('password') is-invalid @enderror
                    bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                     block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
            <div class="flex items-start">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" name="remember" aria-describedby="remember" type="checkbox" class="bg-gray-50
                         border border-gray-300
                         focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-700 dark:border-gray-600
                         dark:focus:ring-blue-600 dark:ring-offset-gray-800" {{ old('remember') ? 'checked' : '' }}>

                    </div>
                    <div class="text-sm ml-3">
                        <label for="remember" class="font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                    </div>
                </div>

                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-700 hover:underline ml-auto dark:text-blue-500"  href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                @endif
            </div>
            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
            font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700
             dark:focus:ring-blue-800">Login to your account</button>


            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                Not registered? <a href="/register" class="text-blue-700 hover:underline dark:text-blue-500">Create
                    account</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>
    <!-- component -->
    <!-- This is an example component -->


