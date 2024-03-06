<section class="text-2xl font-bold mt-14 lg:text-3xl">
    <h1 class="tracking-wide">AVR : Introduction</h1>
</section>

<section class="mt-10 text-base font-semibold pl-3 lg:text-lg">
    <ul>
        <li class="mb-3">
            <a href="#microcontroller" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Microcontroller</a>
        </li>
        <li class="mb-3">
            <a href="#code-editor" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Code Editor</a>
        </li>
        <li class="mb-3">
            <a href="#software-simulation" class="block w-max"><span class="text-blue-700 text-xl font-bold">#</span> Software Simulation</a>
        </li>
    </ul>
</section>

<section id="microcontroller" class="font-normal text-base mt-10">
    <a href="#microcontroller" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Microcontroller</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/introduction/atmega8-dip.jpg') }}" alt="">
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/introduction/atmega8-dip-pinout.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Pada series ini saya akan menggunakan microcontroller Atmega8a berbasis 8-bit AVR RISC. fitur yang dimiliki adalah : memori Flash ISP 8 KB dengan kemampuan baca-sambil-menulis, EEPROM 512B, SRAM 1 KB, 23 jalur I/O tujuan umum, 32 tujuan umum register kerja, tiga pengatur waktu/penghitung fleksibel dengan mode perbandingan, interupsi internal dan eksternal, USART serial yang dapat diprogram, antarmuka serial Dua Kawat berorientasi byte, konverter A/D 10-bit 6 saluran (8 saluran dalam TQFP dan QFN/ Paket MLF), pengatur waktu pengawas yang dapat diprogram dengan osilator internal, port serial SPI, dan lima mode hemat daya yang dapat dipilih perangkat lunak. Jika anda ingin mengetahui lebih lanjut anda bisa <a href="https://ww1.microchip.com/downloads/en/DeviceDoc/ATmega8A-Data-Sheet-DS40001974B.pdf" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
</section>

<section id="code-editor" class="font-normal text-base mt-12">
    <a href="#code-editor" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Code Editor</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/introduction/code-editor.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Code editor yang saya gunakan untuk coding adalah Microhip Studio yang dulunya merupakan Atmel Studio. Jika anda ingin install <a href="https://www.microchip.com/en-us/tools-resources/develop/microchip-studio#Downloads" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
    <p class="mt-3 tracking-wider">Bahasa pemrograman yang digunakan series ini adalah C. Jadi saran saya jika anda belum memahami bahasa C sebaiknya pelajari bahasa C terlebih dahulu sebelum mengikuti series ini</p>
</section>

<section id="software-simulation" class="font-normal text-base mt-12">
    <a href="#software-simulation" class="font-bold text-2xl lg:text-3xl"><span class="text-blue-700 text-2xl font-bold">#</span> Software Simulation</a>
    <img class="border border-slate-300 rounded-md shadow-md mt-5" src="{{ asset('img/avr/introduction/software-simulation.jpg') }}" alt="">
    <p class="mt-5 tracking-wide">Software yang gunakan untuk melakukan simulasi microcontroller adalah Proteus versi 8.12. Jika anda ingin install <a href="https://drive.google.com/drive/u/0/folders/1hqFtDPN2f8j97_F94zm47WL8kIhor5i2" target="_blank" class="underline text-blue-900 italic">klik disini</a></p>
    <p class="mt-3 tracking-wider">Saya mohon maaf sebelumnya proteus yang saya gunakan adalah aplikasi bajakan, sebenarnya proteus memiliki versi yang gratis, tetapi kekurangannya tidak terdapat fitur simulasi untuk microcontroller. Untuk mendapatkan fitur microcontroller anda harus berbayar.</p>
</section>