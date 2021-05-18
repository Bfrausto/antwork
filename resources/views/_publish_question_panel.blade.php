
<div class="border border-yellow-500 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/questions">
        @csrf
        <textarea name="body" id="" class="w-full border-none" placeholder="Consulta a nuestros expertos" ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}" alt="Tu avatar" class="rounded-full mr-2" width="50" height="50">

            <button type="submit" class="bg-yellow-300 rounded-lg shadow py-2 px-2 text-white">Haz una consulta</button>
        </footer>
    </form>
    @error('body')
    	<p class="text-red-500 text-m mt-2"> Ingresa una pregunta.</p>
    @enderror

</div>
