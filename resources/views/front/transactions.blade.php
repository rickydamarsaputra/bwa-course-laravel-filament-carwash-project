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
    <div class="flex flex-col items-center gap-[50px] max-w-[330px] m-auto h-fit w-full py-6">
      <div class="w-[120px] h-[120px] flex shrink-0">
        <img src="{{asset('assets/images/icons/illustration7.svg')}}" class="w-full h-full object-contain" alt="icon">
      </div>
      <div class="flex flex-col gap-1 text-center">
        <h1 class="font-bold text-2xl leading-[36px]">Check Booking</h1>
        <p class="text-center px-5 leading-[28px]">Untuk details booking silahkan masukkan data berikut ini</p>
      </div>
      <form action="{{route('front.transaction.details')}}" method="POST"
        class="w-full rounded-2xl p-5 flex flex-col gap-[26px] bg-white">
        @csrf
        <div class="flex flex-col gap-2">
          <label for="Book-id" class="font-semibold">Booking ID</label>
          <div
            class="rounded-full flex items-center ring-1 ring-[#E9E8ED] p-[12px_16px] bg-white w-full transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FF8E62]">
            <div class="w-6 h-6 flex shrink-0 mr-[10px]">
              <img src="{{asset('assets/images/icons/note-favorite-normal.svg')}}" alt="icon">
            </div>
            <input type="text" name="trx_id" id="Book-id"
              class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#909DBF]"
              placeholder="Write your booking id" required>
          </div>
        </div>
        <div class="flex flex-col gap-2">
          <label for="Name" class="font-semibold">Phone Number</label>
          <div
            class="rounded-full flex items-center ring-1 ring-[#E9E8ED] p-[12px_16px] bg-white w-full transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FF8E62]">
            <div class="w-6 h-6 flex shrink-0 mr-[10px]">
              <img src="{{asset('assets/images/icons/call.svg')}}" alt="icon">
            </div>
            <input type="tel" name="phone_number" id="Name"
              class="appearance-none outline-none w-full font-semibold placeholder:font-normal placeholder:text-[#909DBF]"
              placeholder="What is your phone number" required>
          </div>
        </div>
        <button type="submit" class="w-full rounded-full p-[12px_20px] bg-[#FF8E62] font-bold text-white">View My
          Booking</button>
      </form>
    </div>
    <nav id="Bottom-nav"
      class="fixed bottom-0 w-full max-w-[640px] mx-auto border-t border-[#E9E8ED] p-[20px_24px] bg-white z-20">
      <ul class="flex items-center justify-evenly">
        <li>
          <a href="{{route('front.index')}}" class="flex flex-col items-center text-center gap-1">
            <div class="w-6 h-6 flex shrink-0 ">
              <img src="{{asset('assets/images/icons/element-equal-grey.svg')}}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[18px] text-[#BABEC7]">Home</p>
          </a>
        </li>
        <li>
          <a href="{{route('front.transactions')}}" class="flex flex-col items-center text-center gap-1">
            <div class="w-6 h-6 flex shrink-0 ">
              <img src="{{asset('assets/images/icons/note-favorite.svg')}}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[18px] text-[#FF8969]">Orders</p>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center text-center gap-1">
            <div class="w-6 h-6 flex shrink-0 ">
              <img src="{{asset('assets/images/icons/ticket-discount-grey.svg')}}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[18px] text-[#BABEC7]">Coupons</p>
          </a>
        </li>
        <li>
          <a href="#" class="flex flex-col items-center text-center gap-1">
            <div class="w-6 h-6 flex shrink-0 ">
              <img src="{{asset('assets/images/icons/message-question-grey.svg')}}" alt="icon">
            </div>
            <p class="font-semibold text-xs leading-[18px] text-[#BABEC7]">Help</p>
          </a>
        </li>
      </ul>
    </nav>
  </main>
</body>

</html>