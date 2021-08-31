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
                @foreach($data as $key => $data)
                  <input type="hidden" name="id" value="{{$data->id}}" id="data-id">
                  <div class="flex flex-wrap -mx-3 mb-6 w-full">
                    <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                      </label>
                      <input required id="name" value="{{$data->name}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" placeholder="Enter your name here">
                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Mobile No
                      </label>
                      <input required id="mobile_number" value="{{$data->mobile_number}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="mobile-no" placeholder="Enter your Mobile Number here">
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Sex
                      </label>
                      <div class="relative">
                        <select name="gender" id="gender" required class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option value="">Select option</option>
                          <option value="man" @if('man' == $data->gender) selected @endif>Man</option>
                          <option value="woman" @if('woman' == $data->gender) selected @endif>Woman</option>
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
                      @php
                        $str = explode(",", $data->hobbies);
                      @endphp
                       <select name="hobbies[]" id="hobbies" class="form-multiselect block w-full mt-1" multiple>
                         <option value="Football" @foreach($str as $val) @if('Football' == $val) selected @endif @endforeach>Football</option>
                         <option value="Hockey" @foreach($str as $val) @if('Hockey' == $val) selected @endif @endforeach>Hockey</option>
                         <option value="Skating" @foreach($str as $val) @if('Skating' == $val) selected @endif @endforeach>Skating</option>
                         <option value="Travaling" @foreach($str as $val) @if('Travaling' == $val) selected @endif @endforeach>Travaling</option>
                         <option value="Reading" @foreach($str as $val) @if('Reading' == $val) selected @endif @endforeach>Reading</option>
                       </select>

                    </div>
                  </div>
                  <div class="flex flex-wrap -mx-3 mb-2 mt-5 justify-center">
                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                      Submit
                    </button>
                  </div>
                   @endforeach
                </form>
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
                let id = $('#data-id').val();


                $.ajax({
                  url: "/update/" + id,
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
                    alert('Your form update successfully');
                  },
                 });
                });
            </script>
        </footer>
    </body>
</html>
