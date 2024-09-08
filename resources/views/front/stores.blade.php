<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('output.css')}}" rel="stylesheet">
  <link href="{{asset('main.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <main
    class="bg-[#FAFAFA] max-w-[640px] mx-auto min-h-screen relative flex flex-col has-[#CTA-nav]:pb-[120px] has-[#Bottom-nav]:pb-[120px]">
    <div id="Top-nav" class="flex items-center justify-between px-4 pt-5">
      <a href="{{route('front.index')}}">
        <div class="w-10 h-10 flex shrink-0">
          <img src="{{asset('assets/images/icons/back.svg')}}" alt="icon">
        </div>
      </a>
      <div class="flex flex-col w-fit text-center">
        <h1 class="font-semibold text-lg leading-[27px]">{{$carService->name}}</h1>
        <p class="text-sm leading-[21px] text-[#909DBF]">Kota {{$cityName}}, {{$stores->count()}}
          Stores
        </p>
      </div>
      <button class="w-10 h-10 flex shrink-0">
        <img src="{{asset('assets/images/icons/filter.svg')}}" alt="icon">
      </button>
    </div>
    <section id="Store-list" class="flex flex-col gap-6 px-4 mt-[30px]">
      @forelse($stores as $store)
      <a href="{{route('front.details', $store->slug)}}" class="card">
        <div
          class="flex flex-col gap-4 rounded-[20px] ring-1 ring-[#E9E8ED] pb-4 bg-white overflow-hidden transition-all duration-300 hover:ring-2 hover:ring-[#FF8E62]">
          <div class="w-full h-[120px] flex shrink-0 overflow-hidden relative">
            <img src="{{Storage::url($store->thumbnail)}}" class="w-full h-full object-cover" alt="thumbnail">
            @if($store->is_open)
            <p
              class="rounded-full p-[6px_10px] bg-[#41BE64] w-fit h-fit font-bold text-[10px] leading-[15px] text-white absolute top-4 right-4">
              OPEN NOW</p>
            @else
            <p
              class="rounded-full p-[6px_10px] bg-[#F12B3E] w-fit h-fit font-bold text-[10px] leading-[15px] text-white absolute top-4 right-4">
              CLOSED</p>
            @endif
          </div>
          <div class="flex items-center justify-between gap-4 px-4">
            <div class="title flex flex-col gap-[6px]">
              <div class="flex items-center gap-1">
                <h1 class="font-semibold w-fit">{{$store->name}}</h1>
                <div class="w-[18px] h-[18px] flex shrink-0">
                  <img src="{{asset('assets/images/icons/verify.svg')}}" alt="verified">
                </div>
              </div>
              <div class="flex items-center gap-[2px]">
                <div class="w-4 h-4 flex shrink-0">
                  <img src="{{asset('assets/images/icons/location.svg')}}" alt="icon">
                </div>
                <p class="text-sm leading-[21px] text-[#909DBF]">{{substr($store->address, 0, 25)}}...</p>
              </div>
            </div>
            <div class="rating flex flex-col gap-[6px]">
              <div class="flex items-center justify-end text-right gap-[6px]">
                <div class="w-[18px] h-[18px] flex shrink-0">
                  <img src="{{asset('assets/images/icons/Star 1.svg')}}" alt="verified">
                </div>
                <h1 class="font-semibold w-fit">4.8</h1>
              </div>
              <div class="flex items-center justify-end text-right gap-[2px]">
                <p class="text-sm leading-[21px] text-[#909DBF]">145 Reviews</p>
              </div>
            </div>
          </div>
        </div>
      </a>
      @empty
      <p>belum ada toko penyedia layanan tersebut</p>
      @endforelse
    </section>
  </main>
</body>

</html>