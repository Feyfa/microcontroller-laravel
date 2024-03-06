<section class="text-2xl font-bold mt-14 lg:text-3xl">
    <h1 class="tracking-wide">AVR : Pin As Output</h1>
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
    <a href="#circuit" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Circuit</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/pin-as-output/circuit_.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat rangkaian ini di proteus menggunakan ic ATMEGA8 (1), Resistor 220 Ohm (3), Dan Led Red (3). Jika anda tidak punya Resistor 220 Ohm, anda bisa menggunakan dari rentang 220 Ohm - 1k Ohm.</p>
</section>



<section id="structur-folder" class="font-normal text-base mt-12">
    <a href="#structur-folder" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Structur Folder</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/pin-as-output/structur-folder_.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya tidak mengubah ubah struktur foldernya, ini adalah struktur default ketika project dibuat.</p>
</section>



{{-- code atmel studio --}}
<section id="code" class="mt-12">
    <a href="#code" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Code</a>
    <div class="code-container mx-auto bg-atmel-primary border border-slate-300 shadow-md rounded-md mt-5">
        <div class="copy-container flex justify-between items-center border-b border-b-slate-300 relative">
            <textarea class="absolute w-[1px] h-[1px] -z-10 bg-transparent">
#include &lt;avr/io.h&gt;
#include &lt;util/delay.h&gt;
    
int main (void)
{
    // Make only PB0 as output
    // DDRB |= 1 << 0;
    // DDRB  = DDRB | 1 << 0;
    // DDRB  = 00000000 | 00000001;
    // DDRB  = 00000001;
    DDRB |= 1 << 0;
    
    // Make only PC0 and PC1 as output
    // DDRC |= 1 << 0 | 1 << 1;
    // DDRC  = DDRC | 1 << 0 | 1 << 1;
    // DDRC  = 00000000 | 00000001 | 00000010;
    // DDRC  = 00000011;
    DDRC |= 1 << 0 | 1 << 1;
    
    while (1)
    {
        // Write Logic High only at PB0
        // PORTB |= 1 << 0;
        // PORTB  = PORTB | 1 << 0;
        // PORTB  = 00000000 | 00000001;
        // PORTB  = 00000001;
        PORTB |= 1 << 0;
    
        // Write logic high only on PC0 and PC1
        // PORTC |= 1 << 0 | 1 << 1;
        // PORTC  = PORTC | 1 << 0 | 1 << 1;
        // PORTB  = 00000000 | 00000001;
        // PORTC  = 00000000 | 00000001 | 00000010;
        // PORTC  = 00000011;
        PORTC |= 1 << 0 | 1 << 1;
    
        // Wait for 500 ms
        _delay_ms(500);
    
        // Write Low Logic Only at PB0
        // PORTB &= ~(1 << 0);
        // PORTB  = PORTB & ~(00000001);
        // PORTB  = 00000001 & 111111110;
        // PORTB  = 00000000;
        PORTB &= ~(1 << 0);
    
        // Write Low Logic Only on PC0 and PC1
        // PORTC &= ~(1 << 0 | 1 << 1);
        // PORTC  = PORTC & ~(00000001 | 00000010);
        // PORTC  = 00000011 & ~(00000011);
        // PORTC  = 00000011 & 11111100;
        // PORTC  = 00000000;
        PORTC &= ~(1 << 0 | 1 << 1);
    
        // Wait for 500 ms
        _delay_ms(500);
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
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span class="text-code-blue">int</span> <span class="text-code-coklat">main</span> (<span class="text-code-blue">void</span>)
                </div>
                <div>
                    {
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Make only PB0 as output</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRB |= 1 << 0;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRB&nbsp; = DDRB | 1 << 0;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRB&nbsp; = 00000000 | 00000001;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRB&nbsp; = 00000001;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">DDRB</span> |= 1 &lt;&lt; 0;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Make only PC0 and PC1 as output</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRC |= 1 << 0 | 1 << 1;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRC&nbsp; = DDRC | 1 << 0 | 1 << 1;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRC&nbsp; = 00000000 | 00000001 | 00000010;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// DDRC&nbsp; = 00000011;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">DDRC</span> |= 1 &lt;&lt; 0 | 1 &lt;&lt; 1;
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-blue">while</span> (1)
                </div>
                <div class="pl-8">
                    <span>{</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// Write Logic High only at PB0</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB |= 1 << 0;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp; = PORTB | 1 << 0;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp; = 00000000 | 00000001;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp; = 00000001;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-purple">PORTB</span> |= 1 &lt;&lt; 0;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// Write logic high only on PC0 and PC1</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC |= 1 << 0 | 1 << 1;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = PORTC | 1 << 0 | 1 << 1;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp; = 00000000 | 00000001;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = 00000000 | 00000001 | 00000010;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = 00000011;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-purple">PORTC</span> |= 1 &lt;&lt; 0 | 1 &lt;&lt; 1;
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// Wait for 500 ms</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-coklat">_delay_ms</span>(500);
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// Write Low Logic Only at PB0</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB &= ~(1 << 0);</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp;  = PORTB & ~(00000001);</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp;  = 00000001 & 111111110;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTB&nbsp;  = 00000000;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-purple">PORTB</span> &= ~(1 &lt;&lt; 0);
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// Write Low Logic Only on PC0 and PC1</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC &= ~(1 << 0 | 1 << 1);</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = PORTC & ~(00000001 | 00000010);</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = 00000011 & ~(00000011);</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = 00000011 & 11111100;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// PORTC&nbsp;  = 00000000;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-purple">PORTC</span> &= ~(1 &lt;&lt; 0 | 1 &lt;&lt; 1);
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">// Wait for 500 ms</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-coklat">_delay_ms</span>(500);
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
    <a href="#simulation" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Simulation</a>
    <div class="video-container rounded-md overflow-hidden shadow-md mt-5">
        <iframe class="w-full h-[300px] lg:h-[400px] xl:h-[500px]" src="https://www.youtube.com/embed/_ik6RkE4csA?si=l2N3NObXm4-KrxyS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>
{{-- simulation --}}


<section id="download-project" class="font-normal text-base mt-12">
    <a href="#download-project" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Download Project</a>
    <p class="mt-5 tracking-wide">Jika anda ingin mendownload project untuk code dan simulasi nya, anda bisa mengunjungi github saya <a href="https://github.com/Feyfa/atmega8-pin-as-output" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
</section>




<script src="{{ asset('js/index.js') }}"></script>