<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>vaccine</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container p-10">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <div>
               
                    

                    <section class="bg-gray-50 dark:bg-gray-900">
                        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                            
                            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                                        Get Registered here under any center
                                    </h1>
                                    <form class="space-y-4 md:space-y-6" method="POST" action="{{url('RegisterUser')}}">
                                        @csrf
                                        <div>
                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
                                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name')}}" placeholder="deloar" required="">
                                        </div>
                                        <span style="color: red">{{$errors->first('name')}}</span>
                                        <div>
                                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your phone</label>
                                            <input value="{{old('phone')}}" type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="017..." required="">
                                        </div>
                                        <span style="color: red">{{$errors->first('phone')}}</span>
                                        <div>
                                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your nid</label>
                                            <input value="{{old('nid')}}" type="number" name="nid" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="13 or 17 digit number" required="">
                                        </div>
                                        <span style="color: red">{{$errors->first('nid')}}</span>
                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                            <input value="{{old('email')}}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                                        </div>
                                        <span style="color: red">{{$errors->first('email')}}</span>

                                        <div>
                                           
                                                <label for="center" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your vaccine center</label>
                                              <select name="centers" id="centers" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                  @foreach ($data as $center )
                                                  <option value="{{$center->id}}">{{$center->name}}</option>
                                                  @endforeach
                                                 
                                                 
                                             </select>
                                           
                                           
                                        </div>
                                        <div>
                                            <button type="submit" class=" w-full text-blue bg-blue-400">register</button>
                                        </div>
                                        
                                       
            
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                      </section>
                    
               
            </div> <!-- first div ends here-->
            <div class="text-blue-900">
                @include('pages.message')
            </div>

        </div> <!-- grid ends here -->
        

    </div>
</body>
</html>