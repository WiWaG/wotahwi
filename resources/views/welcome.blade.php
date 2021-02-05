<x-app-layout>
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <main class="lg:pt-20 md:pt-10 mx-auto max-w-7xl px-4  sm:px-6 lg:px-8 ">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">B&B in Groningen</span>
            <span class="block text-yellow-600 xl:inline">online booking</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum impedit accusamus labore dolore maxime ipsa eaque optio doloremque repudiandae, reiciendis saepe atque! Dicta fugiat recusandae, nulla nostrum nemo aliquid eligendi!
          </p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 md:py-4 md:text-lg md:px-10 ... transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                Boek nu
              </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-700 bg-yellow-100 hover:bg-yellow-200 md:py-4 md:text-lg md:px-10 ... ml-2 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
              Beschikbare kamers
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="">
  </div>
</div>

<!-- B&B Image component -->
<div class="container mx-auto p-8">
  <div class="flex flex-row flex-wrap -mx-2">
    <div class="w-full md:w-1/2 h-64 md:h-auto mb-4 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(https://images.unsplash.com/photo-1444201983204-c43cbd584d93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
        Link
      </a>
    </div>
    <div class="w-full md:w-1/2 mb-4 px-2">
      <div class="flex flex-col sm:flex-row md:flex-col -mx-2">
        <div class="w-full sm:w-1/2 md:w-full h-48 xl:h-64 mb-4 sm:mb-0 md:mb-4 px-2">
          <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(https://images.unsplash.com/photo-1445019980597-93fa8acb246c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80);">
            Link
          </a>
        </div>
        <div class="w-full sm:w-1/2 md:w-full h-48 xl:h-64 px-2">
          <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(https://images.unsplash.com/photo-1522798514-97ceb8c4f1c8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            Link
          </a>
        </div>
      </div>
    </div>
    <div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
        Link
      </a>
    </div>
    <div class="w-full sm:w-1/3 h-32 md:h-48 mb-4 sm:mb-0 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(https://images.unsplash.com/photo-1462539405390-d0bdb635c7d1?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1093&q=80);">
        Link
      </a>
    </div>
    <div class="w-full sm:w-1/3 h-32 md:h-48 px-2">
      <a class="block w-full h-full bg-grey-dark bg-no-repeat bg-center bg-cover" href="#" title="Link" style="background-image: url(https://images.unsplash.com/photo-1495754149474-e54c07932677?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
        Link
      </a>
    </div>
  </div>
</div>
</x-app-layout>
