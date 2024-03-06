@extends('layouts.main')

@section('container')
<section>
    <div class="w-full min-h-screen flex flex-col justify-center items-center bg-blue-50">
        <div class="mb-7 text-3xl flex flex-col items-center sm:text-4xl md:block lg:text-5xl xl:mb-10">
            <span class="font-black tracking-wider text-blue-700 mb-2">Learning Coding</span>
            <span class="font-black tracking-wider text-green-700">For Microcontroller</span>
        </div>
        <div>
            <a href="#select-microcontroller" class="border border-slate-300 bg-blue-700 text-white rounded-md font-semibold tracking-widest transition duration-500 block hover:scale-110 py-1.5 px-4 text-2xl sm:px-5 md:px-7 lg:px-10 lg:py-2">Projects</a>
        </div>
    </div>
</section>



<section id="select-microcontroller">
    <div class="w-full min-h-screen flex flex-col justify-center items-center bg-green-50 py-20 gap-10 sm:gap-16">
        <div>
            <h1 class="font-black text-3xl tracking-wider text-blue-600 sm:text-4xl lg:text-5xl">MCU</h1>
        </div>
        <div class="grid grid-cols-1 gap-10 md:gap-20 font-bold text-xl sm:text-2xl sm:gap-14 xl:text-2xl lg:gap-28 tracking-widest sm:grid-cols-2 lg:grid-cols-3">            
            <a href="/avr/introduction" class="border border-slate-300 w-40 h-44 sm:w-44 sm:h-48 xl:w-48 xl:h-52 cursor-pointer flex justify-center items-center rounded-xl bg-[rgb(250,250,250)] shadow-md transition duration-500 hover:bg-blue-700 hover:border-slate-500 hover:text-white hover:scale-110">AVR</a>
            
            <span class="border border-slate-200 w-40 h-44 sm:w-44 sm:h-48 xl:w-48 xl:h-52 flex flex-col relative justify-center items-center rounded-xl bg-[rgb(150,150,150)] shadow-md cursor-not-allowed">
                ARDUINO
                <span class="absolute tracking-normal text-lg lg:text-xl xl:text-2xl bottom-[15%] text-[rgb(70,70,70)] -rotate-12">comming soon</span>
            </span>
            
            <span class="border border-slate-200 w-40 h-44 sm:w-44 sm:h-48 xl:w-48 xl:h-52 flex flex-col relative justify-center items-center rounded-xl bg-[rgb(150,150,150)] shadow-md cursor-not-allowed">
                ARM
                <span class="absolute tracking-normal text-lg lg:text-xl xl:text-2xl  bottom-[15%] text-[rgb(70,70,70)] -rotate-12">comming soon</span>
            </span>

            <span class="border border-slate-200 w-40 h-44 sm:w-44 sm:h-48 xl:w-48 xl:h-52 flex flex-col relative justify-center items-center rounded-xl bg-[rgb(150,150,150)] shadow-md cursor-not-allowed">
                ESP32
                <span class="absolute tracking-normal text-lg lg:text-xl xl:text-2xl  bottom-[15%] text-[rgb(70,70,70)] -rotate-12">comming soon</span>
            </span>

            <span class="border border-slate-200 w-40 h-44 sm:w-44 sm:h-48 xl:w-48 xl:h-52 flex flex-col relative justify-center items-center rounded-xl bg-[rgb(150,150,150)] shadow-md cursor-not-allowed">
                RASPBERRY
                <span class="absolute tracking-normal text-lg lg:text-xl xl:text-2xl  bottom-[15%] text-[rgb(70,70,70)] -rotate-12">comming soon</span>
            </span>
        </div>
    </div>
</section>

@endsection