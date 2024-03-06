<section class="text-2xl font-bold mt-14 lg:text-3xl">
    <h1 class="tracking-wide">AVR : LCD16x2 Without I2C</h1>
</section>



<section class="mt-10 text-base font-semibold pl-3 lg:text-lg">
    <ul>
        <li class="mb-3">
            <a href="#circuit" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Circuit</a>
        </li>
        <li class="mb-3">
            <a href="#structur-folder" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Structur Folder</a>
        </li>
        <li class="mb-3">
            <a href="#code" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Code</a>
        </li>
        <li class="mb-3">
            <a href="#simulation" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Simulation</a>
        </li>
        <li>
            <a href="#download-project" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Download Project</a>
        </li>
    </ul>
</section>



<section id="circuit" class="font-normal text-base mt-10">
    <a href="#circuit" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Circuit</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/lcd16x2-without-i2c/circuit.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat rangkaian ini di proteus menggunakan ic ATMEGA8 (1), LCD16X2 (1), Potentiometer 1K (2). Saya menggunakan mode 4 bit untuk lcd16x2</p>
</section>



<section id="structur-folder" class="font-normal text-base mt-12">
    <a href="#structur-folder" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Structur Folder</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/lcd16x2-without-i2c/structur-folder.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat 3 folder dan didalam sebuah folder terdapat beberapa file .c dan .h</p>
</section>



{{-- code atmel studio --}}
<section id="code" class="mt-12">
    <a href="#code" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Code</a>
    <div class="code-container mx-auto bg-atmel-primary border border-slate-300 shadow-md rounded-md mt-5">
        <div class="copy-container flex justify-between items-center border-b border-b-slate-300 relative">
            <textarea class="absolute w-[1px] h-[1px] -z-10 bg-transparent">
#include &lt;avr/io.h&gt;
#include "toString/toString.h"
#include "lcd16x2_PB/lcd16x2_PB.h"
#include "lcd16x2_PD/lcd16x2_PD.h"
    
int main(void)
{
    /*
    - D4=PB0
    - D5=PB1
    - D6=PB2
    - D7=PB3
    - RS=PB4
    - RW=PB5
    - EN=PB6
    */
    // LCD Init Uses PB Region
    lcdInit_PB();
    
    // Set The LCD Cursor At x = 0 , y = 0
    lcdSetCursor_PB(0, 0);
    // Print, Parameters Can Only Be Strings
    lcdPrint_PB("use religion PB");
    
    // Print value 2024 use IntegerToString And Set The Cursor x = 0 , y = 1
    lcdPrintWithCursor_PB(0, 1, IntegerToString(2024));
    
    
    
    
    
    /*
    - D4=PD0
    - D5=PD1
    - D6=PD2
    - D7=PD3
    - RS=PD4
    - RW=PD5
    - EN=PD6
    */
    // LCD Init Uses PD Region
    lcdInit_PD();
    
    // Set The LCD Cursor At x = 0 , y = 0
    lcdSetCursor_PD(0, 0);
    // Print, Parameters Can Only Be Strings
    lcdPrint_PD("use religion PD");
    
    // Print value 2024 use IntegerToString And Set The Cursor x = 0 , y = 1
    lcdPrintWithCursor_PD(0, 1, IntegerToString(1234));
}
            </textarea>
            <span class="border-r border-r-slate-300 rounded-sm px-4 py-1 shadow-2xl">main.c</span>
            <i class="fa-solid fa-clipboard text-slate-600 cursor-pointer hover:text-slate-500 mr-2"></i>
        </div>
        <div class="overflow-auto font-medium p-3 text-sm lg:text-base">
            <code class="text-code-black">
                <div>
                    <span class="text-code-blue">#include</span> &lt;avr/io.h&gt;
                </div>
                <div>
                    <span class="text-code-blue">#include</span> <span class="text-code-coklat">"toString/toString.h"</span>
                </div>
                <div>
                    <span class="text-code-blue">#include</span> <span class="text-code-coklat">"lcd16x2_PB/lcd16x2_PB.h"</span>
                </div>
                <div>
                    <span class="text-code-blue">#include</span> <span class="text-code-coklat">"lcd16x2_PD/lcd16x2_PD.h"</span>
                </div>
                <div>
                    &nbsp;
                </div>
                <div>
                    <span class="text-code-blue">int</span> <span class="text-code-coklat">main</span>(<span class="text-code-blue">void</span>)
                </div>
                <div>
                    {
                </div>
                <div class="pl-8">
                    <span class="text-code-green">/*</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D4=PB0</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D5=PB1</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D6=PB2</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D7=PB3</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- RS=PB4</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- RW=PB5</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- EN=PB6</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">*/</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// LCD Init Uses PB Region</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdInit_PB</span>();
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Set The LCD Cursor At x = 0 , y = 0</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdSetCursor_PB</span>(0, 0);
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Print, Parameters Can Only Be Strings</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdPrint_PB</span>(<span class="text-code-coklat">"use religion PB"</span>);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Print value 2024 use IntegerToString And Set The Cursor x = 0 , y = 1</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdPrintWithCursor_PB</span>(0, 1, <span class="text-code-coklat">IntegerToString</span>(2024));
                </div>
                <div>
                    &nbsp;
                </div>
                <div>
                    &nbsp;
                </div>
                <div>
                    &nbsp;
                </div>
                <div>
                    &nbsp;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">/*</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D4=PD0</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D5=PD1</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D6=PD2</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- D7=PD3</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- RS=PD4</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- RW=PD5</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">- EN=PD6</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">*/</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// LCD Init Uses PD Region</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdInit_PD</span>();
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Set The LCD Cursor At x = 0 , y = 0</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdSetCursor_PD</span>(0, 0);
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Print, Parameters Can Only Be Strings</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdPrint_PD</span>(<span class="text-code-coklat">"use religion PD"</span>);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Print value 2024 use IntegerToString And Set The Cursor x = 0 , y = 1</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">lcdPrintWithCursor_PD</span>(0, 1, <span class="text-code-coklat">IntegerToString</span>(1234));
                </div>
                <div>
                    }
                </div>
            </code>
        </div>
    </div>
</section>
{{-- code atmel studio --}}





{{-- simulation --}}
<section class="mt-12" id="simulation">
    <a href="#simulation" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Simulation</a>
    <div class="video-container rounded-md overflow-hidden shadow-md mt-5">
        <iframe class="w-full h-[300px] lg:h-[400px] xl:h-[500px]" src="https://www.youtube.com/embed/x-zMfYSKq9c?si=hhvb0B3QUItfMpg2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>
{{-- simulation --}}


<section id="download-project" class="font-normal text-base mt-12">
    <a href="#download-project" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Download Project</a>
    <p class="mt-5 tracking-wide">Jika anda ingin mendownload project untuk code dan simulasi nya, anda bisa mengunjungi github saya <a href="https://github.com/Feyfa/atmega8-lcd16x2-without-i2c" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
</section>




<script src="{{ asset('js/index.js') }}"></script>