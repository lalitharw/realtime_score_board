<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">


    @vite('resources/css/app.css')
</head>
<body>

<div class="flex items-center flex-col justify-center min-h-screen">
    <h3 class="font-bold mb-3 text-2xl">Login</h3>
<div class="w-full max-w-xs  mx-auto">
    <form method="POST" action="{{ route('admin.auth.login') }}">
        @csrf
    <input type="email" name="email" placeholder="Email" class="flex mb-[20px] w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    <input type="text" name="password" placeholder="Password" class="flex w-full h-10 px-3 py-2 text-sm bg-white border rounded-md border-neutral-300 ring-offset-background placeholder:text-neutral-500 focus:border-neutral-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50" />
    <button class="w-full bg-blue-500 mt-3 py-1 text-white rounded-lg hover:bg-blue-700">Submit</button>
    </form>
</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if(Session::has("message"))
<script>
    Toastify({
        text: "{{ Session::get('message') }}",
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true,
        style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        },
        onClick: function(){} // Callback after click
    }).showToast();
</script>
@endif

</body>
</html>
