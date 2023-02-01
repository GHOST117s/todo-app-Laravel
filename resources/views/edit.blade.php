<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <title>Edit</title>
</head>

<body>
    <form action="/update">

        <input type="hidden" name="sno" value={{$items['sno']}}>

        <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans mt-20">
      
          <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg"> 
      
            <div class="mb-4">
      
              <h1 class="text-3xl md:text-4xl text-indigo-600 font-medium mb-2 text-center">To-Do List App </h1>
      
              <div class="flex mt-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" name="item" id="text"  value="{{$items['item']}}" required>
              {{-- </input> --}}
      
                {{-- <input type="hidden" id="saveIndex" /> --}}
      
                <button class="p-2 lg:px-4 md:mx-2 text-center border border-solid border-green-600 rounded text-white bg-green-600 transition-colors duration-300 mt-1 md:mt-0 md:ml-1" id="add-task-btn" name="update" value="update">
                  Edit
                </button><!-- <br> -->
         
      
              </div>
      
            </div>
          </form>
 
</body>

</html>