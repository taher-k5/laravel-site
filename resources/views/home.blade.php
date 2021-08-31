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
                <form mthod="post" id="form" autocomplete="no" enctype="utf-8" class="w-full max-w-lg">
                  <div class="flex flex-wrap -mx-3 mb-6 w-full">
                    <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                      </label>
                      <input required id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" placeholder="Enter your name here">
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Mobile No
                      </label>
                      <input required id="mobile_number" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="mobile-no" placeholder="Enter your Mobile Number here">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Sex
                      </label>
                      <div class="relative">
                        <select name="gender" id="gender" required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option value="">Select option</option>
                          <option value="man">Man</option>
                          <option value="woman">Woman</option>
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
                       <select name="hobbies[]" id="hobbies" class="form-multiselect block w-full mt-1" multiple>
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

        <div class="overflow-x-auto">
            <div class="flex items-center justify-center font-sans overflow-hidden pb-20 pt-5">
                <div class="w-full lg:w-5/6">
                    <h2 class="text-3xl font-bold mb-5 text-center">Form Data</h2>
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">Id</th>
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-center">Gender</th>
                                    <th class="py-3 px-6 text-center">Mobile No</th>
                                    <th class="py-3 px-6 text-center">Hobbies</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach($data as $key => $data)                                                                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
                                            <span class="font-medium">{{$data->id}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
                                            <span>{{$data->name}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>{{$data->gender}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <a href="tel:{{$data->mobile_number}}" class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">{{$data->mobile_number}}</a>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
                                            <span>{{$data->hobbies}}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="/edit/{{$data->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <a href="/{{$data->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

           <script type="text/javascript">

            $('#form').on('submit',function(e){
                e.preventDefault();

                let name = $('#name').val();
                let mobile_number = $('#mobile_number').val();
                let gender = $('#gender').val();
                let hobbies = $('#hobbies').val();


                $.ajax({
                  url: "/",
                  type:"POST",
                  data:{
                    "_token": "{{ csrf_token() }}",
                    name:name,
                    hobbies:hobbies,
                    mobile_number:mobile_number,
                    gender:gender
                  },
                  success:function(response){
                    console.log(response);
                    $('#form')[0].reset();
                    alert('Thanks you for submitting form');
                  },
                 });
                });
            </script>
        </footer>
    </body>
</html>
