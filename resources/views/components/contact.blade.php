<section id="contact" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-bold text-lg text-primary mb-2">Contact</h4>
                <h2 class="font-bold text-secondary text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Saya</h2>
                <p class="font-medium text-md text-secondary md:text-lg">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. In rerum fugit corrupti soluta maiores. Consequatur voluptatum nemo incidunt libero ab.
                </p>
            </div>
        </div>
        <form action="{{ route('sendEmail') }}" method="POST">
            @csrf
            <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <label for="name" class="text-base font-bold text-secondary">
                        Nama
                    </label>
                    <input type="text" id="name" name="name" class="w-full bg-slate-200 text-primary p-3 rounded-md focus:ring-primary focus:ring-1 focus:border-primary">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="email" class="text-base font-bold text-secondary">
                        Email
                    </label>
                    <input type="text" id="email" name="email" class="w-full bg-slate-200 text-primary p-3 rounded-md focus:ring-primary focus:ring-1 focus:border-primary">
                </div>
                <div class="w-full px-4 mb-8">
                    <label for="pesan" class="text-base font-bold text-secondary">
                        Pesan
                    </label>
                    <textarea type="text" id="pesan" name="pesan" class="w-full bg-slate-200 text-primary p-3 rounded-md focus:ring-primary focus:ring-1 focus:border-primary h-32">
                    </textarea>
                </div>
                <div class="w-full px-4">
                    <button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">
                        Kirim
                    </button>
                </div>
        </div>
        </form>
    </div>
</section>