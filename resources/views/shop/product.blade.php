@extends('index')
@section('konten')
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

    <main class="grid grid-cols-1 lg:grid-cols-2 mx-auto max-w-screen-xl h-full md:w-10/12 md:my-12 flex-1">
        <div class="p-0 lg:mr-12">

            <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide opacity-100" onmousemove="zoom(event)" style="background-image: url('/image/header.png')">
                            <img class="hover:opacity-0" src="/image/header.png" >
                        </li>
                        <li class="splide__slide opacity-100">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide opacity-100">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide opacity-100">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide opacity-100">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide opacity-100">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide opacity-100">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                    </ul>
                </div>
            </section>

            <section id="thumbnails" class="splide mt-3" aria-label="thumbnails">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide thumbnail">
                            <img src="/image/header.png" alt="">
                        </li>
                        <li class="splide__slide thumbnail">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide thumbnail">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide thumbnail">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide thumbnail">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide thumbnail">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                        <li class="splide__slide thumbnail">
                            <img src="/image/BLACK FRONT.png" alt="">
                        </li>
                    </ul>
                </div>
            </section>

        </div>

        <div class=" m-0 p-4 border-transparent lg:border-neutral-300 border-l-2 lg:pl-12">
            <h1 class="text-4xl font-bold mb-4">Product Name</h1>
            <p class="text-3xl mb-4">Rp 100.000</p>
            <div class="text-neutral-500 text-sm mb-4">
                <p class="mb-2">Details : </p>
                <p class="font-thin">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid sapiente neque laudantium. Commodi sit aliquam corrupti deserunt nemo iste velit facilis harum. Iusto perferendis eos quis quidem rerum maiores iste. </p>
            </div>
            
            <div class="text-neutral-500 text-sm mb-4">
                <p class="mb-2">Sizing Guide : </p>
                <p class="font-thin">S : 12cm | 12cm | 12cm | </p>
                <p class="font-thin">M : 12cm | 12cm | 12cm | </p>
                <p class="font-thin">L : 12cm | 12cm | 12cm | </p>
                <p class="font-thin">XL : 12cm | 12cm | 12cm | </p>
            </div>
  
            <div class="flex items-center mb-4 gap-2">
                <p>Size :</p>
                <ul class="flex gap-2">
                    <li>
                        <input type="radio" id="size-s" name="size" value="s" class="hidden peer" required disabled/>
                        <label for="size-s" class="flex px-4 py-2 text-neutral-500 bg-white border border-neutral-400 cursor-pointer peer-checked:border-black peer-checked:text-black hover:text-gray-600 peer-checked:bg-neutral-100 hover:bg-neutral-100 peer-disabled:border-red-300 peer-disabled:cursor-not-allowed peer-disabled:hover:bg-white peer-disabled:text-neutral-300">                           
                            S
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="size-m" name="size" value="m" class="hidden peer" required />
                        <label for="size-m" class="flex px-4 py-2 text-neutral-500 bg-white border border-neutral-400 cursor-pointer peer-checked:border-black peer-checked:text-black hover:text-gray-600 peer-checked:bg-neutral-100 hover:bg-neutral-100 peer-disabled:border-red-300 peer-disabled:cursor-not-allowed peer-disabled:hover:bg-white peer-disabled:text-neutral-300">                           
                            M
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="size-l" name="size" value="l" class="hidden peer" required />
                        <label for="size-l" class="flex px-4 py-2 text-neutral-500 bg-white border border-neutral-400 cursor-pointer peer-checked:border-black peer-checked:text-black hover:text-gray-600 peer-checked:bg-neutral-100 hover:bg-neutral-100 peer-disabled:border-red-300 peer-disabled:cursor-not-allowed peer-disabled:hover:bg-white peer-disabled:text-neutral-300">                           
                            L
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="size-xl" name="size" value="xl" class="hidden peer" required />
                        <label for="size-xl" class="flex px-4 py-2 text-neutral-500 bg-white border border-neutral-400 cursor-pointer peer-checked:border-black peer-checked:text-black hover:text-gray-600 peer-checked:bg-neutral-100 hover:bg-neutral-100 peer-disabled:border-red-300 peer-disabled:cursor-not-allowed peer-disabled:hover:bg-white peer-disabled:text-neutral-300">                           
                            XL
                        </label>
                    </li>
                </ul>

            </div>
            
            <div class="flex gap-5">
                <div class="relative flex items-center gap-2">
                    <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="bg-white hover:bg-gray-200 inline-flex items-center justify-center  p-4">
                        <svg class="w-2.5 h-2.5 text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
                        </svg>
                    </button>
                    <input type="text" id="counter-input" data-input-counter data-input-counter-min="1" data-input-counter-max="5" class="flex-shrink-0 text-gray-900 dark:text-white border bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-[2.5rem] text-center" placeholder="" value="1" required />
                    <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="bg-white hover:bg-gray-200 inline-flex items-center justify-center  p-4">
                        <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </button>
                </div>
                <button type="submit" class="border text-white px-12 py-2 bg-neutral-700 hover:bg-neutral-500">
                    Add to Cart
                </button>
            </div>
        </div>
    </main>

    <style>
        .splide__slide img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: opacity .3s;
            display: block;
            width: 100%;
        }
        
        .thumbnail {
            opacity: 0.5;
        }

        .thumbnail.is-active {
            opacity: 1;
        }

        </style>


    <script>
        function zoom(e){
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = offsetX/zoomer.offsetWidth*100
        y = offsetY/zoomer.offsetHeight*100
        zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }

        document.addEventListener( 'DOMContentLoaded', function () {
        var main = new Splide( '#main-carousel', {
            type        : 'slide',
            rewind      : true,
            pagination  : false,
            arrows      : false,
        } );

        var thumbnails = new Splide( '#thumbnails', {
            fixedWidth  : 100,
            fixedHeight  : 70,
            gap         : 5,
            rewind      : true,
            pagination  : false,
            isNavigation: true
        } );

        main.sync( thumbnails );
        main.mount();
        thumbnails.mount();
        } );
    </script>
@endsection