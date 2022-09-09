@extends('layouts.app')


@section('title', 'Create Book')


@section('content')

    <div class="py-10">
        <header>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl tracking-tight font-bold leading-tight text-gray-900">
                    Create Book
                </h1>
            </div>
        </header>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="px-4 py-8 sm:px-0">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <form action="/books" method="post" class="space-y-8 divide-y divide-gray-200">

                            @csrf

                            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                                <div>
                                    <div>
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Book</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed
                                            publicly so be careful what you share.</p>
                                    </div>

                                    <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="title"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Title
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div class="max-w-lg flex rounded-md shadow-sm">
                                                    <span
                                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                                                        book name/ </span>
                                                    <input type="text" name="title" id="title" autocomplete="title"
                                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="about"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> About
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <textarea id="about" name="about" rows="3"
                                                    class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                                <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.
                                                </p>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="cover-photo"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cover
                                                photo </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div
                                                    class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                    <div class="space-y-1 text-center">
                                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                            fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                            <path
                                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                                stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                        <div class="flex text-sm text-gray-600">
                                                            <label for="file-upload"
                                                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                                <span>Upload a file</span>
                                                                <input id="file-upload" name="file-upload" type="file"
                                                                    class="sr-only">
                                                            </label>
                                                            <p class="pl-1">or drag and drop</p>
                                                        </div>
                                                        <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--  <x-input label="ISBN" type="text" name="isbn" /> -->

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="isbn"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Isbn
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div class="max-w-lg flex rounded-md shadow-sm">
                                                    <input type="text" name="isbn" id="isbn" autocomplete="isbn"
                                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="no_of_copies"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> No of
                                                copies </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div class="max-w-lg flex rounded-md shadow-sm">
                                                    <input type="number" name="no_of_copies" id="no_of_copies"
                                                        autocomplete="isbn"
                                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="no_of_pages"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> No of
                                                Pages </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div class="max-w-lg flex rounded-md shadow-sm">
                                                    <input type="number" name="no_of_pages" id="no_of_pages"
                                                        autocomplete="isbn"
                                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="price"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Price
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div class="max-w-lg flex rounded-md shadow-sm">
                                                    <input type="text" name="price" id="price" autocomplete="price"
                                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="price"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Language
                                            </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                                <div class="max-w-lg flex rounded-md shadow-sm">
                                                    <input type="text" name="language" id="language"
                                                        autocomplete="language"
                                                        class="flex-1 block w-full focus:ring-indigo-500 focus:border-indigo-500 min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <button type="button"
                                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                                    <button type="submit"
                                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                        <div>
                            <div>
                                <!-- /End replace -->
                            </div>
        </main>
    </div>
@endsection
