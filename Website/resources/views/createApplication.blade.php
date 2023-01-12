<x-app-layout>
    <div class="bg-dark w-screen h-screen overflow-y-auto no-scrollbar">
        <div class="mx-auto my-10 p-5 h-fit w-fit bg-[#202020] rounded-2xl">
            <div>
                <h2 class="text-lightgrey w-fit mx-auto text-2xl font-bold">Maak je advertentie pagina aan</h2>
                <p class="text-grey w-fit mx-auto font-bold">Vul dit zorgvuldig in, iedereen kan dit zien.</p>
            </div>
            <!-- questionaire container -->
            <div>
                <!-- titel en tarief grid -->
                <form action="{{ route('application.create') }}" method="POST">
                    @csrf
                    <div class="grid lg:grid-cols-2">
                        <div class="w-fit ml-8 mt-8">
                            <h2 class="text-lightgrey text-2xl font-semibold">Titel</h2>
                            <p class="text-grey font-semibold">Geef je advertentie een bijpassende en informatieve titel.</p>
                            <input type="text" name="title" required class="rounded-md w-full bg-zinc-800 border-b-[1px] border-zinc-300 text-grey p-2">
                            <p class="text-hotpink font-semibold">Maximaal 50 karakters.</p>
                        </div>
                        <div class="w-fit ml-8 mt-8">
                            <h2 class="text-lightgrey text-2xl font-semibold">Tarief</h2>
                            <p class="text-grey font-semibold">Hoeveel verwacht je betaald te worden? (in euro's)</p>
                            <div>
                                <input type="number" name="price" required class="rounded-tl-md rounded-bl-md w-3/5 lg:w-1/2 bg-zinc-800 border-b-[1px] border-zinc-300 text-grey p-2">
                            </div>
                            <p class="text-hotpink font-semibold">Vul een getal in.</p>
                        </div>
                    </div>
                    <!-- omschrijving & sector/categorie grid -->
                    <div class="grid lg:grid-cols-2">
                        <div class="w-fit ml-8 mt-8">
                            <h2 class="text-lightgrey text-2xl font-semibold">Omschrijving</h2>
                            <textarea name="description" required cols="55" rows="10" class="resize-none w-full lg:w-fit rounded-md bg-zinc-800 border-b-[1px] border-zinc-300 text-grey p-2"></textarea>
                            <p class="text-hotpink font-semibold">Maximaal 400 karakters.</p>
                        </div>
                        <div class="mt-2">
                            <div class="w-1/2 ml-8 mt-10">
                                <h2 class="text-lightgrey text-2xl font-semibold">Sector</h2>
                                <p class="text-grey font-semibold">Selecteer een sector die het beste bij jouw advertentie past.</p>
                                <select name="sector" required class="w-full rounded-md bg-zinc-800 border-b-[1px] border-zinc-300 text-lightgrey p-2">
                                    <option value="IT">IT</option>
                                    <option value="Dans">Dans</option>
                                    <option value="Muziek">Muziek</option>
                                </select>
                            </div>
                            <div class="w-1/2 ml-8 mt-8">
                                <h2 class="text-lightgrey text-2xl font-semibold">Categorie</h2>
                                <p class="text-grey font-semibold">Selecteer een categorie die het beste bij jouw sector past.</p>
                                <select name="category" required class="w-full rounded-md bg-zinc-800 border-b-[1px] border-zinc-300 text-lightgrey p-2">
                                    <option value="Web developer">Web developer</option>
                                    <option value="Zang leraar">Zang leraar</option>
                                    <option value="Gitaar leraar">Gitaar leraar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>Ik zoek een:</p>
                        <label for="freelancer">Freelancer</label>
                        <input type="radio" value="freelancer" id="freelancer" name="applicationType">
                        <label for="employer">Werkgever</label>
                        <input type="radio" value="employer" id="employer" name="applicationType">
                    </div>
                    <div class="w-fit ml-8 mt-8">
                        <h2 class="text-lightgrey text-2xl font-semibold">Beschikbaarheid</h2>
                        <p class="text-grey font-semibold">Voor welke dagen is je advertentie?</p>
                        <div class="mt-5 grid grid-cols-2 w-64">
                            <div>
                                <input type="checkbox" id="monday" name="monday" value="maandag" class="w-[14px] h-[14px] bg-zinc-800">
                                <label for="maandag" class="text-grey">Maandag</label><br>
                            </div>
                        </div>
                        <div class="mt-5 grid grid-cols-2 w-64">
                            <div>
                                <input type="checkbox" id="tuesday" name="tuesday" value="dinsdag" class="w-[14px] h-[14px] bg-zinc-800">
                                <label for="dinsdag" class="text-grey">Dinsdag</label><br>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-2 w-64">
                        <div>
                            <input type="checkbox" id="wednesday" name="wednesday" value="woensdag" class="w-[14px] h-[14px] bg-zinc-800">
                            <label for="woensdag" class="text-grey">Woensdag</label><br>
                        </div>

                    </div>
                    <div class="mt-5 grid grid-cols-2 w-64">
                        <div>
                            <input type="checkbox" id="thursday" name="thursday" value="donderdag" class="w-[14px] h-[14px] bg-zinc-800">
                            <label for="donderdag" class="text-grey">Donderdag</label><br>
                        </div>

                    </div>
                    <div class="mt-5 grid grid-cols-2 w-64">
                        <div>
                            <input type="checkbox" id="friday" name="friday" value="vrijdag" class="w-[14px] h-[14px] bg-zinc-800">
                            <label for="vrijdag" class="text-grey">Vrijdag</label><br>
                        </div>

                    </div>
                    <div class="mt-5 grid grid-cols-2 w-64">
                        <div>
                            <input type="checkbox" id="saturday" name="saturday" value="zaterdag" class="w-[14px] h-[14px] bg-zinc-800">
                            <label for="zaterdag" class="text-grey">Zaterdag</label><br>
                        </div>
                    </div>
                    <div class="mt-5 grid grid-cols-2 w-64">
                        <div>
                            <input type="checkbox" id="sunday" name="sunday" value="zondag" class="w-[14px] h-[14px] bg-zinc-800">
                            <label for="zondag" class="text-grey">Zondag</label><br>
                        </div>
                    </div>
                    <div class="mt-8 ml-8 flex">
                        <button class="w-8 h-8 text-2xl bg-purple text-hotpink text-center rounded-md shadow-md shadow-black">
                            <!-- <img src="" alt="Plus" class="w-3 h-3 m-auto"> -->
                        </button>
                        <h2 class="ml-2 text-lightgrey text-md font-semibold mr-2">Voeg foto's toe</h2>
                    </div>
                    <div class="flex justify-end">
                        <input type="submit" class="text-hotpink border-2 rounded-2xl border-purple bg-purple shadow-md shadow-black px-2 my-5 mr-10">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>