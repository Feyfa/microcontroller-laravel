<section class="text-2xl font-bold mt-14 lg:text-3xl">
    <h1 class="tracking-wide">AVR : Pin As Input</h1>
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
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/pin-as-input/circuit.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya membuat rangkaian ini di proteus menggunakan ic ATMEGA8 (1), Resistor 220 Ohm (2), Led Red (2), Dan Swicth (2). Jika anda tidak punya Resistor 220 Ohm, anda bisa menggunakan dari rentang 220 Ohm - 1k Ohm.</p>
</section>



<section id="structur-folder" class="font-normal text-base mt-12">
    <a href="#structur-folder" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Structur Folder</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/pin-as-input/structur-folder.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Saya tidak mengubah ubah struktur foldernya, ini adalah struktur default ketika project dibuat.</p>
</section>



{{-- code atmel studio --}}
<section id="code" class="mt-12">
    <a href="#code" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Code</a>
    <div class="code-container bg-atmel-primary border border-slate-300 shadow-md rounded-md mt-5">
        <div class="copy-container flex justify-between items-center border-b border-b-slate-300 relative">
            <textarea class="absolute w-[1px] h-[1px] -z-10 bg-transparent">
#include &lt;avr/io.h&gt;

int main (void)
{
    // Make PB0 And PB1 As Output
    DDRB |= 1 << 0 | 1 << 1;
    
    // Make PC0 And PC1 As Input
    DDRC &= ~(1 << 0 | 1 << 1);
    
    // Write Logic High To PC0 And PC1, This Aims To Make PC0 And PC1 As Pull Up Mode Inputs
    PORTC |= 1 << 0 | 1 << 1;
    
    while (1)
    {
        /*
        - When PC0 Is 0 Or When The Switch Is Pressed
        - !(PINC & (1 << 0))
        - !(11111110 & 00000001)
        - !(00000000)
        - !(0)
        - 1
        */
        if(!(PINC & (1 << 0)))
        {
            // PB0 HIGH
            PORTB |= 1 << 0;
        }
    
        /*
        - When PC0 Is 1 Or When The Switch Has Not Been Pressed
        - !(PINC & (1 << 0))
        - !(11111111 & 00000001)
        - !(00000001)
        - !(1)
        - 0
        - There Is No Need To Write This Condition Again, Because It Has Been Resolved Using else, This Is Just To Know How It Works
        */
        else
        {
            // PB0 LOW
            PORTB &= ~(1 << 0);
        }
    
    
    
    
    
        /*
        - When PC1 Is 0 Or When The Switch Is Pressed
        - !(PINC & (1 << 1))
        - !(11111101 & 00000010)
        - !(00000000)
        - !(0)
        - 1
        */
        if(!(PINC & (1 << 1)))
        {
            // PB1 HIGH
            PORTB |= 1 << 1;
        }
    
        /*
        - When PC1 Is 1 Or When The Switch Has Not Been Pressed
        - !(PINC & (1 << 0))
        - !(11111111 & 00000010)
        - !(00000010)
        - !(2)
        - 0
        - There Is No Need To Write This Condition Again, Because It Has Been Resolved Using else, This Is Just To Know How It Works
        */
        else
        {
            // PB1 LOW
            PORTB &= ~(1 << 1);
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
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span class="text-code-blue">int</span> <span class="text-code-coklat">main</span> (<span class="text-code-blue">void</span>)
                </div>
                <div>
                    {
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Make PB0 And PB1 As Output</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">DDRB</span> |= 1 << 0 | 1 << 1;
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Make PC0 And PC1 As Input</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">DDRC</span> &= ~(1 << 0 | 1 << 1);
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-green">// Write Logic High To PC0 And PC1, This Aims To Make PC0 And PC1 As Pull Up Mode Inputs</span>
                </div>
                <div class="pl-8">
                    <span class="text-code-purple">PORTC</span> |= 1 << 0 | 1 << 1;
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
                    <span class="text-code-green">/*</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- When PC0 Is 0 Or When The Switch Is Pressed</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(PINC & (1 << 0))</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(11111110 & 00000001)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(00000000)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(0)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- 1</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">*/</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">if</span>(!(<span class="text-code-purple">PINC</span> & (1 << 0)))
                </div>
                <div class="pl-16">
                    {
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PB0 HIGH</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span>  |= 1 << 0;
                </div>
                <div class="pl-16">
                    }
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-16">
                    <span class="text-code-green">/*</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- When PC0 Is 1 Or When The Switch Has Not Been Pressed</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(PINC & (1 << 0))</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(11111111 & 00000001)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(00000001)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(1)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- 0</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- There Is No Need To Write This Condition Again, Because It Has Been Resolved Using else, This Is Just To Know How It Works</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">*/</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">else</span>
                </div>
                <div class="pl-16">
                    {
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PB0 LOW</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span> &= ~(1 << 0);
                </div>
                <div class="pl-16">
                    }
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div>
                    <span>&nbsp;</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">/*</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- When PC1 Is 0 Or When The Switch Is Pressed</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(PINC & (1 << 1))</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(11111101 & 00000010)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(00000000)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(0)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- 1</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">*/</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">if</span>(!(<span class="text-code-purple">PINC</span> & (1 << 1)))
                </div>
                <div class="pl-16">
                    {
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PB1 HIGH</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span>  |= 1 << 1;
                </div>
                <div class="pl-16">
                    }
                </div>
                <div>
                    &nbsp;
                </div>
                <div class="pl-16">
                    <span class="text-code-green">/*</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- When PC1 Is 1 Or When The Switch Has Not Been Pressed</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(PINC & (1 << 0))</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(11111111 & 00000010)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(00000010)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- !(2)</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- 0</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">- There Is No Need To Write This Condition Again, Because It Has Been Resolved Using else, This Is Just To Know How It Works</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-green">*/</span>
                </div>
                <div class="pl-16">
                    <span class="text-code-blue">else</span>
                </div>
                <div class="pl-16">
                    {
                </div>
                <div class="pl-24">
                    <span class="text-code-green">// PB1 LOW</span>
                </div>
                <div class="pl-24">
                    <span class="text-code-purple">PORTB</span> &= ~(1 << 1);
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
        <iframe class="w-full h-[300px] lg:h-[400px] xl:h-[500px]" src="https://www.youtube.com/embed/Zu6SlolnzIU?si=-t9uCUc-0KSyG_uw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</section>
{{-- simulation --}}


<section id="download-project" class="font-normal text-base mt-12">
    <a href="#download-project" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-3xl font-bold">#</span> Download Project</a>
    <p class="mt-5 tracking-wide">Jika anda ingin mendownload project untuk code dan simulasi nya, anda bisa mengunjungi github saya <a href="https://github.com/Feyfa/atmega8-pin-as-input" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
</section>




<script src="{{ asset('js/index.js') }}"></script>