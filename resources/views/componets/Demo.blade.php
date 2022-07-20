<div class="my-6">
    <div>
        <h2 class="my-auto underline dark:text-gray-300 font-extrabold text-2xl underline-offset-4 text-center "
            id="training-servers">Testing instances
            <span>
                @auth
                <a href="{{ route ('training.create') }}">
                    <button
                        class="px-3 py-2  text-sm font-medium text-center float-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        type="button">
                        Add more
                    </button>
                </a>
                @endauth
            </span>
    
        </h2>
        <div class=" flex flex-wrap my-4 space-y-4 md:space-x-4  justify-center ">
            <div></div>
            <!-- kenyaemr 18.x-->
            @foreach ($trainingData as $training)
            <div
                class="p-6 max-w-sm bg-white  rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{$training->ServerName}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$training->Description}}</p>
                <ul class="list-inside font-sm p-2 hover:text-slate-700 dark:text-slate-300 dark:shadow-none dark:ring-0">
                    <li>Login Username: <span class="select-all italic">{{$training->LoginUsername}}</span> </li>
                    <li>Password: <span class="select-all">{{$training->LoginPass}}</span></li>
                    <!-- ... -->
                </ul>
    
                <a href="{{$training->link}}" target="_blank"
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{$training->ServerName}}
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 30 30"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 21v-6h-18v6h18zm-3-4c.553 0 1 .448 1 1s-.447 1-1 1c-.552 0-1-.448-1-1s.448-1 1-1zm-7.806 0h1.275l-.864 2h-1.274l.863-2zm-2.141 0h1.275l-.863 2h-1.275l.863-2zm-2.19 0h1.275l-.863 2h-1.275l.863-2zm-4.863.941c-2.253-.29-4-2.194-4-4.524 0-2.252 1.626-4.121 3.767-4.506.177-3.294 2.895-5.911 6.233-5.911s6.056 2.617 6.233 5.911c2.005.361 3.541 2.029 3.729 4.089h-1.991c-.279-2.105-2.674-2.333-3.65-2.401.117-1.958-.555-5.599-4.321-5.599-4.438 0-4.359 4.75-4.321 5.599-.945-.037-3.679.341-3.679 2.818 0 1.223.856 2.245 2 2.511v2.013z"
                            clip-rule="evenodd"></path>
                    </svg>
    
                </a>
                <a href="{{$training->github}}" target="_blank"
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Github
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 30 30"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                @auth
    
    
                <ul class="inline-flex p-2  hover:text-slate-700 dark:text-slate-300 dark:shadow-none dark:ring-0">
                    <li class="float-left"><a href="{{ route('training.edit', $training->id)}}"><button type="button"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button></a>
                    </li>
                    <li>
                        <form action="{{ route('training.destroy', $training->id)}}" method="post"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>
                    </li>
                    <!-- ... -->
                </ul>
                @endauth
            </div>
    
            @endforeach
    
    
        </div>
    </div>
    
    {{-- prod servers --}}
    <div>
        <h2 class="my-6 dark:text-gray-300 underline font-extrabold text-2xl underline-offset-4 text-center "
            id="prod-servers">Production Instances <span>
                @auth
                <a href="{{ route ('prod.create') }}">
                    <button
                        class="px-3 py-2  text-sm font-medium text-center float-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        type="button">
                        Add more
                    </button>
                </a>
                @endauth
            </span> </h2>
    
        <div class=" flex flex-wrap my-4 space-y-4 md:space-x-4  justify-center ">
            <div></div>
            @foreach ($prodData as $item)
            <!-- kenyaemr 18.x-->
            <div
                class="p-6 max-w-sm bg-white  rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->ServerName }}
                    </h5>
                </a>
                <a href="{{$item->url}}" target="_blank"
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Visit
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 30 30"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 21v-6h-18v6h18zm-3-4c.553 0 1 .448 1 1s-.447 1-1 1c-.552 0-1-.448-1-1s.448-1 1-1zm-7.806 0h1.275l-.864 2h-1.274l.863-2zm-2.141 0h1.275l-.863 2h-1.275l.863-2zm-2.19 0h1.275l-.863 2h-1.275l.863-2zm-4.863.941c-2.253-.29-4-2.194-4-4.524 0-2.252 1.626-4.121 3.767-4.506.177-3.294 2.895-5.911 6.233-5.911s6.056 2.617 6.233 5.911c2.005.361 3.541 2.029 3.729 4.089h-1.991c-.279-2.105-2.674-2.333-3.65-2.401.117-1.958-.555-5.599-4.321-5.599-4.438 0-4.359 4.75-4.321 5.599-.945-.037-3.679.341-3.679 2.818 0 1.223.856 2.245 2 2.511v2.013z"
                            clip-rule="evenodd"></path>
                    </svg>
    
                </a>
                <a href="{{$item->githubLinks}}" target="_blank"
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Github
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 30 30"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                @auth
                <ul class="flex p-2  hover:text-slate-700 dark:text-slate-300 dark:shadow-none dark:ring-0">
                    <li class="float-left"><a href="{{ route('training.edit', $training->id)}}"><button type="button"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button></a>
                    </li>
                    <li>
                        <form action="{{ route('training.destroy', $training->id)}}" method="post"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </form>
                    </li>
                    <!-- ... -->
                </ul>
                @endauth
            </div>
            @endforeach
    
    
        </div>
    
    
    </div>
</div>