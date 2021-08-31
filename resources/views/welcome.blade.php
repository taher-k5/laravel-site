<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    </head>
    <body class="antialiased bg-gray-50">
        <div class="container w-full mx-auto flex justify-center px-4 mt-20">
            <div class="form-parent">
                <h1 class="text-2xl text-red-500 font-bold mb-10 uppercase text-center">This is test Form</h1>
                <form mthod="post" autocomplete="no" enctype="utf-8" class="w-full max-w-lg">
                  <div class="flex flex-wrap -mx-3 mb-6 w-full">
                    <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                      </label>
                      <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" placeholder="Enter your name here">
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Mobile No
                      </label>
                      <input required class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="mobile-no" placeholder="Enter your Mobile Number here">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Sex
                      </label>
                      <div class="relative">
                        <select name="gender" required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Man</option>
                          <option>Woman</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 mb-6 md:mb-0">
                      <span class="text-gray-700">Hobbies</span>
                       <select name="hobbies" class="form-multiselect block w-full mt-1" multiple required>
                         <option>Football</option>
                         <option>Hockey</option>
                         <option>Skating</option>
                         <option>Travaling</option>
                         <option>Reading</option>
                       </select>
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-2 mt-5 justify-center">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                      Submit
                    </button>
                  </div>
                </form>
            </div>
        </div>
    </body>
</html>
