@slot('title')
    About - Portfolio Website Fazril Rizki
@endslot

<div id="about" class="body flex items-center justify-center bg-gray-100 mb-2">
    <div class="max-w-8xl p-8 bg-white shadow-lg rounded-md grid grid-cols-1 md:grid-cols-2 gap-8 mt-19">
        <div class="text-center md:text-left mt-20 ml-20">
            <div class="flex items-center justify-center md:justify-start mb-4">
                <div class="bg-cover bg-center h-64 w-64 md:h-96 md:w-96 rounded-full overflow-hidden">
                    <img src="{{ asset('img/fazril.jpg') }}" alt="Fazril Rizki" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Keterangan atau tulisan -->
            <div>
                <!-- Isi keterangan atau tulisan di sini -->
            </div>
        </div>

        <!-- Konten tentang Anda yang sebelumnya berada di sebelah kanan, sekarang dipindahkan ke sebelah kanan -->
        <div class="flex items-center justify-center md:justify-end mr-23">
            <!-- Konten tentang Anda -->
            <h1>TO DO LIST</h1>
        </div>
    </div>
</div>
