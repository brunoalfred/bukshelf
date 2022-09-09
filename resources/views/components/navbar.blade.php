 <nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="flex justify-between h-16">
             <div class="flex">
                 <div class="flex-shrink-0 flex items-center">
                     <img class="block lg:hidden h-8 w-auto"
                         src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&amp;shade=600"
                         alt="Workflow">
                     <img class="hidden lg:block h-8 w-auto"
                         src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&amp;shade=600"
                         alt="Workflow">
                 </div>
                 <div class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8">

                     <a href="#"
                         class="border-indigo-500 text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                         aria-current="page" x-state:on="Current" x-state:off="Default"
                         x-state-description="Current: &quot;border-indigo-500 text-gray-900&quot;, Default: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                         Dashboard
                     </a>

                     <a href="#"
                         class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                         x-state-description="undefined: &quot;border-indigo-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                         Books
                     </a>

                     <a href="#"
                         class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                         x-state-description="undefined: &quot;border-indigo-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                         Authors
                     </a>

                     <a href="#"
                         class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                         x-state-description="undefined: &quot;border-indigo-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700&quot;">
                         Orders
                     </a>

                 </div>
             </div>
             <div class="hidden sm:ml-6 sm:flex sm:items-center">
                 <button type="button"
                     class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                     <span class="sr-only">View notifications</span>
                     <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                         </path>
                     </svg>
                 </button>

                 <!-- Profile dropdown -->
                 <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()"
                     @click.away="onClickAway($event)" class="ml-3 relative">
                     <div>
                         <button type="button"
                             class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                             id="user-menu-button" x-ref="button" @click="onButtonClick()"
                             @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()"
                             aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()"
                             @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                             <span class="sr-only">Open user menu</span>
                             <img class="h-8 w-8 rounded-full"
                                 src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                 alt="">
                         </button>
                     </div>

                     <div x-show="open" x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                         x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state."
                         x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical"
                         aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()"
                         @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false"
                         @keydown.enter.prevent="open = false; focusButton()"
                         @keyup.space.prevent="open = false; focusButton()" style="display: none;">

                         <a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active"
                             x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem"
                             tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0"
                             @mouseleave="activeIndex = -1" @click="open = false; focusButton()">
                             Your Profile
                         </a>

                         <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                             :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1"
                             id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1"
                             @click="open = false; focusButton()">
                             Settings
                         </a>

                         <a href="#" class="block px-4 py-2 text-sm text-gray-700"
                             :class="{ 'bg-gray-100': activeIndex === 2 }" role="menuitem" tabindex="-1"
                             id="user-menu-item-2" @mouseenter="activeIndex = 2" @mouseleave="activeIndex = -1"
                             @click="open = false; focusButton()">
                             Sign out
                         </a>

                     </div>

                 </div>
             </div>
             <div class="-mr-2 flex items-center sm:hidden">
                 <!-- Mobile menu button -->
                 <button type="button"
                     class="bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                     aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                     x-bind:aria-expanded="open.toString()">
                     <span class="sr-only">Open main menu</span>
                     <svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 block"
                         :class="{ 'hidden': open, 'block': !(open) }" x-description="Heroicon name: outline/bars-3"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                     </svg>
                     <svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden"
                         :class="{ 'block': open, 'hidden': !(open) }" x-description="Heroicon name: outline/x-mark"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                     </svg>
                 </button>
             </div>
         </div>
     </div>

     <div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu"
         x-show="open" style="display: none;">
         <div class="pt-2 pb-3 space-y-1">

             <a href="#"
                 class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                 aria-current="page" x-state:on="Current" x-state:off="Default"
                 x-state-description="Current: &quot;bg-indigo-50 border-indigo-500 text-indigo-700&quot;, Default: &quot;border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800&quot;">
                 Dashboard
             </a>

             <a href="#"
                 class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                 x-state-description="undefined: &quot;bg-indigo-50 border-indigo-500 text-indigo-700&quot;, undefined: &quot;border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800&quot;">
                 Books
             </a>

             <a href="#"
                 class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                 x-state-description="undefined: &quot;bg-indigo-50 border-indigo-500 text-indigo-700&quot;, undefined: &quot;border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800&quot;">
                 Authors
             </a>

             <a href="#"
                 class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium"
                 x-state-description="undefined: &quot;bg-indigo-50 border-indigo-500 text-indigo-700&quot;, undefined: &quot;border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800&quot;">
                 Orders
             </a>

         </div>
         <div class="pt-4 pb-3 border-t border-gray-200">
             <div class="flex items-center px-4">
                 <div class="flex-shrink-0">
                     <img class="h-10 w-10 rounded-full"
                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                         alt="">
                 </div>
                 <div class="ml-3">
                     <div class="text-base font-medium text-gray-800">Tom Cook</div>
                     <div class="text-sm font-medium text-gray-500">tom@example.com</div>
                 </div>
                 <button type="button"
                     class="ml-auto bg-white flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                     <span class="sr-only">View notifications</span>
                     <svg class="h-6 w-6" x-description="Heroicon name: outline/bell"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" aria-hidden="true">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                         </path>
                     </svg>
                 </button>
             </div>
             <div class="mt-3 space-y-1">

                 <a href="#"
                     class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">
                     Your Profile
                 </a>

                 <a href="#"
                     class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">
                     Settings
                 </a>

                 <a href="#"
                     class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">
                     Sign out
                 </a>

             </div>
         </div>
     </div>
 </nav>
