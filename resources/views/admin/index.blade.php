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

</div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if(Session::has("message"))
<script>
    Toastify({
  text: "This is a toast",
  duration: 3000,
  destination: "https://github.com/apvarun/toastify-js",
  newWindow: true,
  close: true,
  gravity: "top", // `top` or `bottom`
  position: "left", // `left`, `center` or `right`
  stopOnFocus: true, // Prevents dismissing of toast on hover
  style: {
    background: "linear-gradient(to right, #00b09b, #96c93d)",
  },
  onClick: function(){} // Callback after click
}).showToast();
</script>
@endif
</body>
</html>
