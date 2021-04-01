<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script src="https://kit.fontawesome.com/f38b57ad54.js" crossorigin="anonymous"></script>
</head>
<body>
    <div x-data="{ scrolAtTop: true }" class="flex flex-col-reverse">
        <div class="py-4 bg-white md:flex items-center justify-between md:px-10 fixed top-0 w-full z-10"
            :class="{ 'transition ease-linear duration-500 shadow-md' : !scrolAtTop }"
            @scroll.window="scrolAtTop = (window.pageYOffset > 1) ? false : true">
            <div class="flex justify-between">
                <div class=" flex items-center md:pl-20 pl-10">
                    <img src="https://media-exp1.licdn.com/dms/image/C510BAQG1Nyx-6PqmhQ/company-logo_200_200/0/1558518784151?e=2159024400&v=beta&t=C7De83-eyNKIZ6gnFULvdg4BA7-uG9qHyQykjLYc9tQ" alt="logo" width="45" class="mr-2">
                    <p href="" class="font-bold text-blue-900 md:text-2xl md:ml-4 ml-2 uppercase text-lg">PPDB SMK Wikrama</p>
                </div>
                <div class="px-4 cursor-pointer md:hidden flex items-center" id="burger">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>
            </div>

            <div class="hidden md:flex pr-20" id="menu">
                <ul class="text-center md:flex md:flex-row">
                    <li class="py-2"><a href="{{ route('login') }}" class="text-blue-900 text-md hover:text-purple-300 p-2 font-semibold transition ease-out duration-500 pengertian">Login</a></li>
                    <li class="py-2"><a href="{{ route('user.daftar') }}" class="text-blue-900 text-md hover:text-purple-300 p-2 font-semibold transition ease-out duration-500 penularan">Daftar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="md:flex px-24 py-20 items-center md:mt-20 mt-10 justify-center">
        <div class="md:w-1/2 mb-6 md:mb-0">
            <img src="https://i.pinimg.com/originals/af/b6/c4/afb6c47ab288e528996a213acba696f6.png" alt="" class="w-full">
        </div>

        <div class="md:w-1/2 md:text-left text-center md:ml-20">
            <div class="sm:text-2xl lg:text-4xl mb-6 text-lg tracking-widest font-bold text-blue-900">
                <span class="md:block">
                    Selamat Datang
                </span>
                <span>
                    di PPDB SMK Wikrama 
                </span>
            </div>

            <div class="flex md:mr-10 justify-center">
                <div class="bg-blue-600 text-white w-36 py-2 flex items-center justify-center rounded hover:no-underline hover:text-white">
                    <a href="/daftar">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full flex items-center py-4 bg-gray-800 font-semibold text-white justify-center ">
        <p>&copy;Copyright</p>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
    const burger = document.querySelector('#burger');
    const menu = document.querySelector('#menu');

    burger.addEventListener('click', ()=>{
        if(menu.classList.contains('hidden')){
            menu.classList.remove('hidden')
        }else{
            menu.classList.add('hidden');
        }
    })
</script>
</html>