<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/intlTelInput.css') }}>
    <link rel="stylesheet" href={{ asset('css/catg.css') }}>
    <link rel="stylesheet" href={{ asset('css/mainStyle.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <title>Quick House</title>
    @livewireStyles
</head>
<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"
        integrity="sha512-f5HTYZYTDZelxS7LEQYv8ppMHTZ6JJWglzeQmr0CVTS70vJgaJiIO15ALqI7bhsracojbXkezUIL+35UXwwGrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src={{ asset('js/swiper.js') }}></script>
    {{-- <script src={{asset('js/bootstrap.bundle.min.js')}}></script>
       <script src={{asset('js/bootstrap.min.js')}}></script> --}}
    <script src={{ asset('js/lightslider.js') }}></script>
    <script src={{ asset('js/mainscript.js') }}></script>
    <script src={{ asset('js/intlTelInput.js') }}></script>
    <script src={{ asset('js/scripts.js') }}></script>
    @livewireScripts
    <script>
        const rangeInput = document.querySelectorAll(".range-input input"),
priceInput = document.querySelectorAll(".price-input input"),
range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);

        if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
            if(e.target.className === "input-min"){
                rangeInput[0].value = minPrice;
                range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
            }else{
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach(input =>{
    input.addEventListener("input", e =>{
        let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);

        if((maxVal - minVal) < priceGap){
            if(e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap
            }else{
                rangeInput[1].value = minVal + priceGap;
            }
        }else{
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});


          var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        centeredSlides: true,
        clickable:true,
        autoplay: {
            delay: 2800,
           disableOnInteraction: false,
        },
        loop:true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        type:false,
      },
    });

    var swiper = new Swiper(".gallery-slider", {
      loop: true,
      effect: "coverflow",
      slidesPerView: "auto",
      centeredSlides: true,
    //   grabCursor: true,
        clickable:true,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: true,
      },
      autoplay: {
            delay: 2800,
           disableOnInteraction: false,
        },
      pagination: {
        el: ".swiper-pagination",
        type:false,
      },
    });

        var input = document.getElementById('phone');
        intlTelInput(input, {
            utilsScript: "js/utils.js",
            preferredCountries: ["mz", "us"],
            autoPlaceholder: "polite",
            nationalMode: false,

        }, );


    </script>
</body>
</html>
