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
    <div class="bg-[#270738] absolute top-0 max-w-[640px] w-full mx-auto rounded-b-[50px] h-[472px]"></div>
    <div id="Top-nav" class="flex items-center justify-between px-8 pt-5 relative z-10">
      <a href="{{url()->previous()}}">
        <div class="w-10 h-10 flex shrink-0">
          <img src="{{asset('assets/images/icons/back.svg')}}" alt="icon">
        </div>
      </a>
      <div class="flex flex-col w-fit text-center">
        <h1 class="font-semibold text-lg leading-[27px] text-white">Booking Details</h1>
        <p class="text-sm leading-[21px] text-white">Treat Your Car Nicely</p>
      </div>
      <div class="w-10 h-10 flex shrink-0">
      </div>
    </div>
    <div id="Status-details" class="flex flex-col gap-2 px-8 mt-[30px] relative z-10">
      <div class="flex flex-col w-full rounded-2xl border border-[#E9E8ED] p-4 gap-4 bg-white">
        <div id="Service" class="flex flex-col gap-2">
          <div class="flex items-center w-full gap-[10px] bg-white justify-between">
            <div class="flex items-center gap-[10px]">
              <div class="w-[60px] h-[60px] flex shrink-0">
                <img src="{{asset('assets/images/icons/illustration6.svg')}}" alt="icon">
              </div>
              <div class="flex flex-col h-fit">
                <div class="flex items-center gap-1">
                  <p class="font-semibold w-fit">{{$details->trx_id}}</p>
                  <div class="w-[18px] h-[18px] flex shrink-0">
                    <img src="{{asset('assets/images/icons/verify.svg')}}" alt="verified">
                  </div>
                </div>
              </div>
            </div>
            @if($details->is_paid)
            <p class="rounded-full p-[6px_10px] bg-[#41BE64] w-fit font-bold text-xs leading-[18px] text-white">PAID</p>
            @else
            <p class="rounded-full p-[6px_10px] bg-[#FFCE51] w-fit font-bold text-xs leading-[18px]">PENDING</p>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div id="Order-details" class="flex flex-col gap-2 px-8 mt-[18px] relative z-10">
      <div class="flex flex-col w-full rounded-2xl border border-[#E9E8ED] p-4 gap-4 bg-white">
        <div id="Location" class="flex flex-col gap-2">
          <h2 class="font-semibold">Workshop At</h2>
          <div class="flex items-center w-full gap-[10px] bg-white">
            <div class="w-[80px] h-[60px] flex shrink-0 rounded-xl overflow-hidden">
              <img src="{{Storage::url($details->store_details->thumbnail)}}" class="w-full h-full object-cover"
                alt="thumbnail">
            </div>
            <div class="flex flex-col">
              <div class="flex items-center gap-1">
                <p class="font-semibold w-fit">{{$details->store_details->name}}</p>
                <div class="w-[18px] h-[18px] flex shrink-0">
                  <img src="{{asset('assets/images/icons/verify.svg')}}" alt="verified">
                </div>
              </div>
              <div class="flex items-center gap-[2px]">
                <p class="text-sm leading-[21px] text-[#909DBF]">{{$details->store_details->address}}</p>
              </div>
            </div>
          </div>
        </div>
        <hr class="border-[#E9E8ED]">
        <div id="Service" class="flex flex-col gap-2">
          <h2 class="font-semibold">Your Service</h2>
          <div class="flex items-center w-full gap-[10px] bg-white justify-between">
            <div class="flex items-center gap-[10px]">
              <div class="w-[60px] h-[60px] flex shrink-0">
                <img src="{{Storage::url($details->service_details->icon)}}" alt="icon">
              </div>
              <div class="flex flex-col h-fit">
                <p class="font-semibold">{{$details->service_details->name}}</p>
                <p class="text-sm leading-[21px] text-[#909DBF]">Top Rated Service</p>
              </div>
            </div>
            <p class="rounded-full p-[6px_10px] bg-[#DFB3E6] w-fit font-bold text-xs leading-[18px]">POPULAR</p>
          </div>
        </div>
        <hr class="border-[#E9E8ED]">
        <div id="Time-details" class="flex flex-col gap-[10px]">
          <div class="flex items-center justify-between">
            <p class="text-sm leading-[21px]">Time At</p>
            <p class="font-semibold">{{$details->time_at}} WIB</p>
          </div>
          <div class="flex items-center justify-between">
            <p class="text-sm leading-[21px]">Date At</p>
            <p class="font-semibold">{{$details->started_at->format('M d, Y')}}</p>
          </div>
        </div>
        <hr class="border-[#E9E8ED]">
        <div id="Price-details" class="flex flex-col gap-[10px]">
          <div class="flex items-center justify-between">
            <p class="text-sm leading-[21px]">{{$details->service_details->name}} Price</p>
            <p class="font-semibold">Rp {{number_format($details->service_details->price, 0, ',', '.')}}</p>
          </div>
          <div class="flex items-center justify-between">
            <p class="text-sm leading-[21px]">Booking Fee</p>
            <p class="font-semibold">Rp {{number_format($bookingFee, 0, ',', '.')}}</p>
          </div>
          <div class="flex items-center justify-between">
            <p class="text-sm leading-[21px]">PPN 11%</p>
            <p class="font-semibold">Rp {{number_format($totalPpn, 0, ',', '.')}}</p>
          </div>
          <div class="flex items-center justify-between">
            <p class="text-sm leading-[21px]">Grand Total</p>
            <p class="font-bold text-xl leading-[30px] text-[#FF8E62]">Rp {{number_format($details->total_amount, 0,
              ',', '.')}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="px-8 mt-[30px] flex">
      <a href="tel:{{$details->store_details->phone_number}}"
        class="w-full rounded-full p-[12px_20px] bg-[#FF8E62] font-bold text-white text-center">Call
        Customer Service</a>
    </div>
  </main>
</body>

</html>