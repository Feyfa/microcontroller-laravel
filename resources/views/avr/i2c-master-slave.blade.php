<section class="text-2xl font-bold mt-14 lg:text-3xl">
    <h1 class="tracking-wide">AVR : I2C Master Slave</h1>
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
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/i2c-master-slave/circuit.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat rangkaian ini di proteus menggunakan ic ATMEGA8 (2), Resistor 4k7 (2), Button (4), Led Red (8). Pin PB0 - PB3 ATmega8 Slave dijadikan sebagai input untuk read dan pin PB4 - PB7 ATmega8 Slave dijadikan output untuk write. Pin PB0 - PB3 ATmega8 Master dijadikan untuk output dari pembacaan input pin PB4 - PB7 ATmega8 Slave</p>
</section>



<section id="structur-folder" class="font-normal text-base mt-12">
    <a href="#structur-folder" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Structur Folder</a>
    <h3 class="text-lg mt-5">ATmega8 sebagai master</h3>
    <img class="border border-slate-300 rounded-md shadow-md mt-2" src="{{ asset('img/avr/i2c-master-slave/structur-folder-master.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat 1 folder dan didalam sebuah folder terdapat beberapa file .c dan .h</p>
    <h3 class="text-lg mt-10">ATmega8 sebagai slave</h3>
    <img class="border border-slate-300 rounded-md shadow-md mt-2" src="{{ asset('img/avr/i2c-master-slave/structur-folder-slave.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat 1 folder dan didalam sebuah folder terdapat beberapa file .c dan .h</p>
</section>



{{-- code atmel studio --}}
<section id="code" class="mt-12">
    <a href="#code" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Code</a>

    <h3 class="text-lg mt-5">ATmega8 sebagai master</h3>
    <div class="code-container mx-auto bg-atmel-primary border border-slate-300 shadow-md rounded-md mt-2">
        <div class="copy-container flex justify-between items-center mb-0 border-b border-b-slate-300 relative">
            <textarea class="absolute w-[1px] h-[1px] -z-10 bg-transparent">
#include &lt;avr/io.h&gt;
#include &lt;util/delay.h&gt;
#include "i2cMaster/i2cMaster.h"
    
int main(void)
{
    DDRB = 0xFF;
    
    // init i2c as master
    i2c_master_init();
    
    while(1)
    {
        // check whether the slave with address 74 is ready
        if(i2c_master_isDeviceReady(74))
        {
            // write data to the slave with address 74, 74 as write
            // ~(1 << 4)
            // ~(00010000)
            // 11101111
            // I use pull up mode
            i2c_master_transmit(74, ~(1 << 4));
            // read data from slave with address 75, 75 as read
            // example
            // PORTB = i2c_master_receive(75) | 0xF0;
            // PORTB = 10101110 | 11110000
            // PORTB = 11111110
            // the goal in OR with 0xF0 is, we want to change the starting bits (4 - 7) to 1, and the bits (0 - 3) remain their value
            PORTB = i2c_master_receive(75) | 0xF0;
            _delay_ms(300);
    
            i2c_master_transmit(74, ~(1 << 5));
            PORTB = i2c_master_receive(75) | 0xF0;
            _delay_ms(300);
    
            i2c_master_transmit(74, ~(1 << 6));
            PORTB = i2c_master_receive(75) | 0xF0;
            _delay_ms(300);
    
            i2c_master_transmit(74, ~(1 << 7));
            PORTB = i2c_master_receive(75) | 0xF0;
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
                    <span class="text-code-purple">DDRB</span> = 0xFF;
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
                    <span class="text-code-green">// check whether the slave with address 74 is ready</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">if</span>(<span class="text-code-coklat">i2c_master_isDeviceReady</span>(74))
                </div>
                <div class="pl-16">
                    {
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// write data to the slave with address 74, 74 as write</span>
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
                    <span class="text-code-coklat">i2c_master_transmit</span>(74, ~(1 << 4));
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// read data from slave with address 75, 75 as read</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// example</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PORTB = i2c_master_receive(75) | 0xF0;</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PORTB = 10101110 | 11110000</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PORTB = 11111110</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// the goal in OR with 0xF0 is, we want to change the starting bits (4 - 7) to 1, and the bits (0 - 3) remain their value</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span> = <span class="text-code-coklat">i2c_master_receive</span>(75) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(74, ~(1 << 5));
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span> = <span class="text-code-coklat">i2c_master_receive</span>(75) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(74, ~(1 << 6));
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span> = <span class="text-code-coklat">i2c_master_receive</span>(75) | 0xF0;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">_delay_ms</span>(300);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-24">
                    <span class="text-code-coklat">i2c_master_transmit</span>(74, ~(1 << 7));
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span> = <span class="text-code-coklat">i2c_master_receive</span>(75) | 0xF0;
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

    <h3 class="text-lg mt-10">ATmega8 sebagai slave</h3>
    <div class="code-container mx-auto bg-atmel-primary border border-slate-300 shadow-md rounded-md mt-2">
        <div class="copy-container flex justify-between items-center mb-2 border-b border-b-slate-300 relative">
            <textarea class="absolute w-[1px] h-[1px] -z-10">
#include &lt;avr/io.h&gt;
#include &lt;util/delay.h&gt;
#include "i2cSlave/i2cSlave.h"
    
int main(void)
{
    uint8_t result = 0;
    
    // PB0 - PB3 as input, PB4 - PB7 as output
    DDRB = 0xF0;
    // activate pull up on PB0 - PB3, and write logic high on PB4 - PB7
    PORTB = 0xFF;
    
    // init i2c as slave, with write address 74 and read address 75
    i2c_slave_init(74);
    
    while(1)
    {
        // result = 0 , master makes slave as write
        // result = 1 , master makes slave as read
        result = i2c_slave_listen();
    
        // when it is made read, the slave's job is to transmit data();
        if(result) i2c_slave_transmit(PINB | 0xF0);
        // when it is written, the slave's job is to receive data();
        else PORTB = i2c_slave_receive();
    }
}
            </textarea>
            <span class="border-r border-r-slate-300 rounded-sm px-4 py-1 shadow-2xl">main.c</span>
            <i class="fa-solid fa-clipboard text-slate-600 cursor-pointer hover:text-slate-500 mr-2"></i>
        </div>
        <div class="overflow-auto font-medium px-3 pb-3 ">
            <code class="text-code-black">
                <div>
                    <span class="text-code-blue">#include</span> &lt;avr/io.h&gt;
                </div>
                <div>
                    <span class="text-code-blue">#include</span> &lt;util/delay.h&gt;
                </div>
                <div>
                    <span class="text-code-blue">#include</span> <span class="text-code-coklat">"i2cSlave/i2cSlave.h"</span>
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
                    <span class="text-code-aqua">uint8_t</span> result = 0;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// PB0 - PB3 as input, PB4 - PB7 as output</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">DDRB</span> = 0xF0;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// activate pull up on PB0 - PB3, and write logic high on PB4 - PB7</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">PORTB</span> = 0xFF;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// init i2c as slave, with write address 74 and read address 75</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-coklat">i2c_slave_init</span>(74);
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
                    <span class="text-code-green">// result = 0 , master makes slave as write</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// result = 1 , master makes slave as read</span>
                </div>
                <div class="pl-16">
                    result = <span class="text-code-coklat">i2c_slave_listen</span>();
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// when it is made read, the slave's job is to transmit data</span>();
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">if</span>(result) <span class="text-code-coklat">i2c_slave_transmit</span>(<span class="text-code-purple">PINB</span> | 0xF0);
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// when it is written, the slave's job is to receive data</span>();
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">else</span> <span class="text-code-purple">PORTB</span> = <span class="text-code-coklat">i2c_slave_receive</span>();
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
        <iframe class="w-full h-[300px] lg:h-[400px] xl:h-[500px]" src="https://www.youtube.com/embed/KgEDhFnjbYY?si=CostYILtXGnyqex_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>
{{-- simulation --}}


<section id="download-project" class="font-normal text-base mt-12">
    <a href="#download-project" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Download Project</a>
    <p class="mt-5 tracking-wide">Jika anda ingin mendownload project untuk code dan simulasi nya, anda bisa mengunjungi github saya <a href="https://github.com/Feyfa/atmega8-i2c-master-slave" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
</section>




<script src="{{ asset('js/index.js') }}"></script>