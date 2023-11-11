<x-app-layout>
    @slot('title')
        Home - Portfolio Website Fazril Rizki
    @endslot

    <div class="body flex items-center justify-center bg-gray-100 mb-2">
        <div class="max-w-8xl p-8 bg-white shadow-lg rounded-md grid grid-cols-1 md:grid-cols-2 gap-8 mt-19">
            <div class="text-center md:text-left mt-20 ml-20">
                <p class="text-3xl font-semibold text-green-600 mb-4">
                    Hi, I'm Fazril!
                </p>
                <p class="text-gray-600">
                    Welcome to my portfolio website. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla gravida cursus libero, non varius turpis volutpat vel.
                </p>
            </div>

            <div class="flex items-center justify-center md:justify-end mr-23">
                <div class="bg-cover bg-center h-64 w-64 md:h-96 md:w-96 rounded-full overflow-hidden">
                    <img src="{{ asset('img/fazril.jpg') }}" alt="Fazril Rizki" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
