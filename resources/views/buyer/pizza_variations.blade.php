<div class="popup-background z-0 bg-black opacity-25 absolute top-0 left-0 bottom-0 right-0">
</div>
<div class="pizza-container w-full max-w-screen-md bg-white rounded-xl overflow-hidden z-40 .w-11/12 my-40 flex justify-between items-center">
    <div class="pizza-photo w-3/5"><img src="{{asset('img/products/pesto-small.jpg')}}" alt=""></div>
    <div class="pizza-description w-2/5 p-4 h-full flex flex-col bg-gray-100 items-between justify-between">
        <div>
        <div class="pizza-container_header">
            <div class="text-2xl font-medium">Pesto</div>
            <div class="header_description my-2 text-sm text-gray-600">25cm, tradicinis padas, 410-450 g</div>
            <div class="header_ingredients text-sm underline">
                <button class="underline pl-1">Vištiena,</button>
                <button class="underline pl-1">fetos sūris,</button>
                <button class="underline pl-1">vyšniniai pomidorai,</button>
                <button class="underline pl-1">mocarelos sūris,</button>
                <button class="underline pl-1">padažas pesto,</button>
                <button class="underline pl-1">česnakinis padažas</button>
            </div>
        </div>
        <div class="size-chooser bg-gray-200 h-8 rounded mt-2 p-1">
            <div class="size-selector absolute bg-white top-0 left-0 bottom-0 width-1/3"></div>
            <form method="post" class="pocaity-0 pizza-container_action w-full flex text-sm">
                <div class="selection w-1/3 flex flex-row justify-center">
                    <input class="" type="radio" name="size" value="1" id="size1">
                    <label class="" for="size1">Maža</label>
                </div>
                <div class="selection w-1/3 flex flex-row justify-center">
                    <input class="" type="radio" name="size" value="2" id="size2">
                    <label class="" for="size2">Vidutinė</label>
                </div>
                <div class="selection w-1/3 flex flex-row justify-center">
                    <input class="" type="radio" name="size" value="3" id="size3">
                    <label class="" for="size3">Didelė</label>
                </div>
                
            </form>
        </div>
    </div>
    <button class="mb-4 py-3 text-white font-medium rounded-md flex items-center justify-center bg-orange-450 hover:bg-orange-650" type="submit">
        Įdėti į krepšelį už 12,25 &euro;
    </button>
    </div>
</div>
<div class="exit-button w-1/12 text-white mt-40 ml-4">
    <svg class="transform hover:scale-125" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.84606 12.4986L0.552631 3.20519C-0.1806 2.47196 -0.1806 1.28315 0.552631 0.549923C1.28586 -0.183308 2.47466 -0.183308 3.20789 0.549923L12.5013 9.84335L21.792 0.552631C22.5253 -0.1806 23.7141 -0.1806 24.4473 0.552631C25.1805 1.28586 25.1805 2.47466 24.4473 3.20789L15.1566 12.4986L24.45 21.792C25.1832 22.5253 25.1832 23.7141 24.45 24.4473C23.7168 25.1805 22.528 25.1805 21.7947 24.4473L12.5013 15.1539L3.20519 24.45C2.47196 25.1832 1.28315 25.1832 0.549923 24.45C-0.183308 23.7168 -0.183308 22.528 0.549923 21.7947L9.84606 12.4986Z" fill="white"></path>
    </svg>
</div>