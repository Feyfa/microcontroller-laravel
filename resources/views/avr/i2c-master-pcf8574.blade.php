<section class="text-2xl font-bold mt-14 lg:text-3xl">
    <h1 class="tracking-wide">AVR : I2C Master PCF8574</h1>
</section>



<section class="mt-10 text-base font-semibold pl-3 lg:text-lg"">
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
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/i2c-master-pcf8574/circuit.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat rangkaian ini di proteus menggunakan ic ATMEGA8 (1), PCF8574 (1), Resistor 4k7 (2), Button (4), Led Red (8). Pin P0 - P3 PCF8574 dijadikan sebagai input untuk read dan pin P4 - P7 PCF8574 dijadikan output untuk write. Pin PD0 - PD3 ATMEGA8 dijadin untuk output dari pembacaan input pin P4 - P7 PCF8574</p>
</section>



<section id="structur-folder" class="font-normal text-base mt-12">
    <a href="#structur-folder" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Structur Folder</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/i2c-master-pcf8574/structur-folder.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat 1 folder dan didalam sebuah folder terdapat beberapa file .c dan .h</p>
</section>



{{-- code atmel studio --}}
<section id="code" class="mt-12">
    <a href="#code" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Code</a>
    <div class="code-container mx-auto bg-atmel-primary border border-slate-300 shadow-md rounded-md mt-5">
        <div class="copy-container flex justify-between items-center border-b border-b-slate-300 relative">
            <textarea class="absolute w-[1px] h-[1px] -z-10 bg-transparent">
#include &lt;avr/io.h&gt;   
#include &lt;util/delay.h&gt;   
#include "i2cMaster/i2cMaster.h"
    
int main(void)
{
    DDRD = 0xFF;
    
    // init i2c as master
    i2c_master_init();
    
    while(1)
    {
        // check whether the slave with address 64 is ready
        if(i2c_master_isDeviceReady(64))
        {
            // write data to the slave with address 64, 64 as write
            // ~(1 << 4)
            // ~(00010000)
            // 11101111
            // I use pull up mode
            i2c_master_transmit(64, ~(1 << 4));
            // read data from slave with address 65, 65 as read
            // example
            // PORTD = i2c_master_receive(65) | 0xF0;
            // PORTD = 10101110 | 11110000
            // PORTD = 11111110
            // the goal in OR with 0xF0 is, we want to change the starting bits (4 - 7) to 1, and the bits (0 - 3) remain their value
            PORTD = i2c_master_receive(65) | 0xF0;
            _delay_ms(300);
    
            i2c_master_transmit(64, ~(1 << 5));
            PORTD = i2c_master_receive(65) | 0xF0;
            _delay_ms(300);
    
            i2c_master_transmit(64, ~(1 << 6));
            PORTD = i2c_master_receive(65) | 0xF0;
            _delay_ms(300);
    
            i2c_master_transmit(64, ~(1 << 7));
            PORTD = i2c_master_receive(65) | 0xF0;
            _delay_ms(300);
        }
    }
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
                    <span class="text-code-blue">#include</span> &lt;util/delay.h&gt;
                </div>
                <div>
                    <span class="text-code-blue">#include</span> <span class="text-code-coklat">"i2cMaster/i2cMaster.h"</span>
                </div>
                <div>
                    &nbsp;
                </div>
                <div>
                    <span class="text-code-blue">int</span> <span class="text-code-coklat">main</span>(<span class="text-code-blue">void</span>)
                </div>
                <div class="w-ma">
                    {
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">DDRD</span> = 0xFF;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// init i2c as master</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">i2c_master_init</span>();
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-blue">while</span>(1)
                </div>
                <div class="pl-8">
                    {
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// check whether the slave with address 64 is ready</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">if</span>(<span class="text-code-coklat">i2c_master_isDeviceReady</span>(64))
                </div>
                <div class="pl-16">
                    {
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// write data to the slave with address 64, 64 as write</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// ~(1 << 4)</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// ~(00010000)</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// 11101111</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// I use pull up mode</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(64, ~(1 << 4));
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// read data from slave with address 65, 65 as read</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// example</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PORTD = i2c_master_receive(65) | 0xF0;</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PORTD = 10101110 | 11110000</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PORTD = 11111110</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// the goal in OR with 0xF0 is, we want to change the starting bits (4 - 7) to 1, and the bits (0 - 3) remain their value</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTD</span> = <span class="text-code-coklat">i2c_master_receive</span>(65) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(64, ~(1 << 5));
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTD</span> = <span class="text-code-coklat">i2c_master_receive</span>(65) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(64, ~(1 << 6));
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTD</span> = <span class="text-code-coklat">i2c_master_receive</span>(65) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(64, ~(1 << 7));
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTD</span> = <span class="text-code-coklat">i2c_master_receive</span>(65) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div class="pl-16">
                    }
                </div>
                <div class="pl-8">
                    }
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
        <iframe class="w-full h-[300px] lg:h-[400px] xl:h-[500px]" src="https://www.youtube.com/embed/JTJ3Pj9MgAk?si=JPdVLxStFXsKCP9z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>
{{-- simulation --}}


<section id="download-project" class="font-normal text-base mt-12">
    <a href="#download-project" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Download Project</a>
    <p class="mt-5 tracking-wide">Jika anda ingin mendownload project untuk code dan simulasi nya, anda bisa mengunjungi github saya <a href="https://github.com/Feyfa/atmega8-i2c-master-pcf8574" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
</section>




<script src="{{ asset('js/index.js') }}"></script>