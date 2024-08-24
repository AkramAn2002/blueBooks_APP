<style>
    a:focus i {
        color: #3b82f6; /* Couleur bleue */
        font-weight: 800;
    }
</style>
<div class="drawer lg:drawer-open top-0 absolute">
    <input id="my-drawer-2" type="checkbox" class="drawer-toggle"/>

    <div class="drawer-side shadow-xl">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu text-base-content min-h-full w-72 p-4 bg-white">

            <li class="ml-auto mr-auto">
                <img src="{{ asset('images/hero2.png') }}" alt="" width="80">
            </li>
            <li class="mt-12">
                <a href="#" tabIndex="0" class="focus:font-bold focus:ml-3 focus:bg-inherit focus:text-[16px]"><i class="fa-solid fa-download focus:text-blue-500 mr-2"></i>Réception</a>
            </li>
            <li class="mt-2">
                <a href="#" tabIndex="0" class="focus:font-bold focus:ml-3 focus:bg-inherit focus:text-[16px]"><i class="fa-regular fa-folder focus:text-blue-500 mr-2"></i>Dossier client</a>
            </li>
            <li class="mt-2">
                <a href="#" tabIndex="0" class="focus:font-bold focus:ml-3 focus:bg-inherit focus:text-[16px]"><i class="fa-solid fa-hand-holding focus:text-blue-500 mr-2"></i>Demande</a>
            </li>
            <li class="mt-2">
                <a href="#" tabIndex="0" class="focus:font-bold focus:ml-3 focus:bg-inherit focus:text-[16px]"><i class="fa-solid fa-calendar-days focus:text-blue-500 mr-2"></i>Déclaration</a>
            </li>
        </ul>
    </div>
</div>
