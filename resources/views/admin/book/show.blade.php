
@extends('layouts.app')

@section('title', 'Books')

@section('content')

<div class="bg-white">
  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
    <!-- Product details -->
    <div class="lg:max-w-lg lg:self-end">
      <nav aria-label="Breadcrumb">
        <ol role="list" class="flex items-center space-x-2">
          <li>
            <div class="flex items-center text-sm">
              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Travel</a>

              <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" aria-hidden="true" class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
              </svg>
            </div>
          </li>

          <li>
            <div class="flex items-center text-sm">
              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Bags</a>
            </div>
          </li>
        </ol>
      </nav>

      <div class="mt-4">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $book->title }}</h1>
      </div>

      <section aria-labelledby="information-heading" class="mt-4">
        <h2 id="information-heading" class="sr-only">Product information</h2>

        <div class="flex items-center">
          <p class="text-lg text-gray-900 sm:text-xl">{{ $book->price }} TZS</p>

          <div class="ml-4 border-l border-gray-300 pl-4">
            <h2 class="sr-only">Reviews</h2>
            <div class="flex items-center">
              <div>
                <div class="flex items-center">
                  <!--
                    Heroicon name: mini/star

                    Active: "text-yellow-400", Default: "text-gray-300"
                  -->
                  <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>

                  <!-- Heroicon name: mini/star -->
                  <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>

                  <!-- Heroicon name: mini/star -->
                  <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>

                  <!-- Heroicon name: mini/star -->
                  <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>

                  <!-- Heroicon name: mini/star -->
                  <svg class="text-gray-300 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                  </svg>
                </div>
                <p class="sr-only">4 out of 5 stars</p>
              </div>
              <p class="ml-2 text-sm text-gray-500">1624 reviews</p>
            </div>
          </div>
        </div>

        <div class="mt-4 space-y-6">
          <p class="text-base text-gray-500">Language: {{ $book->language }}</p>
        </div>

        <div class="mt-6 flex items-center">
          <!-- Heroicon name: mini/check -->
          <svg class="h-5 w-5 flex-shrink-0 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
          </svg>
          <p class="ml-2 text-sm text-gray-500">In stock and ready to ship</p>
        </div>
      </section>
    </div>

    <!-- Product image -->
    <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
      <div class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg">
        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-featured-product-shot.jpg" alt="Model wearing light green backpack with black canvas straps and front zipper pouch." class="h-full w-full object-cover object-center">
      </div>
    </div>

    <!-- Product form -->
    <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
      <section aria-labelledby="options-heading">
        <h2 id="options-heading" class="sr-only">Product options</h2>

        <form>
          <div class="sm:flex sm:justify-between">
            <!-- Size selector -->
            <fieldset>
              <legend class="block text-sm font-medium text-gray-700">Size</legend>
              <div class="mt-1 grid grid-cols-1 gap-4 sm:grid-cols-2">
                <!-- Active: "ring-2 ring-indigo-500" -->
                <div class="relative block cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none">
                  <input type="radio" name="size-choice" value="18L" class="sr-only" aria-labelledby="size-choice-0-label" aria-describedby="size-choice-0-description">
                  <p id="size-choice-0-label" class="text-base font-medium text-gray-900">{{ $book->no_of_pages }}</p>
                  <p id="size-choice-0-description" class="mt-1 text-sm text-gray-500">Number of pages</p>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <div class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></div>
                </div>

                <!-- Active: "ring-2 ring-indigo-500" -->
                <div class="relative block cursor-pointer rounded-lg border border-gray-300 p-4 focus:outline-none">
                  <input type="radio" name="size-choice" value="20L" class="sr-only" aria-labelledby="size-choice-1-label" aria-describedby="size-choice-1-description">
                  <p id="size-choice-1-label" class="text-base font-medium text-gray-900">{{ $book->no_of_copies }}</p>
                  <p id="size-choice-1-description" class="mt-1 text-sm text-gray-500">Number of copies</p>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <div class="pointer-events-none absolute -inset-px rounded-lg border-2" aria-hidden="true"></div>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="mt-4">
            <a href="#" class="group inline-flex text-sm text-gray-500 hover:text-gray-700">
              <span>Would you like to buy?</span>
              <!-- Heroicon name: mini/question-mark-circle -->
              <svg class="ml-2 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        
       
        </form>
      </section>
    </div>
  </div>
</div>

@endsection