@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<div class="my-6 mb-6 shadow-sm font-medium">
    <h2 class="my-6 dark:text-gray-300 font-extrabold text-2xl underline-offset-4 text-center ">These are the technical
        training materials as per the latest HIS products</h2>
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent"
            role="tablist">
            <li class="mr-2 flex" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2"
                    id="PRE-RELEASE-TESTING-SERVERS-&-DWH-RESOURCES" data-tabs-target="#profile" type="button"
                    role="tab" aria-controls="profile" aria-selected="false">PRE-RELEASE TESTING SERVERS & DWH
                    RESOURCES
                
                </button>
                
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-sm border-b-1 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
                    aria-selected="false">TOT TECHNICAL CONTENT</button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                    aria-selected="false">END USER CONTENT</button>
            </li>

           @auth
           <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts"
                aria-selected="false">Active Servers</button>
        </li>
           @endauth
        </ul>
    </div>


    <div id="myTabContent my-4 mb-8 uppercase font-medium">
        
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel"
            aria-labelledby="PRE-RELEASE TESTING SERVERS & DWH RESOURCES">
           
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                           
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                URL
                            </th>
                            @auth
                            <th scope="col" class="px-6 py-3">
                                Other Options
                            </th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dwhData as $dwh)
                        <tr class="bg-white border-b uppercase dark:bg-gray-800 dark:border-gray-700">
                            
                
                            <td class="px-6 py-4">
                                {{$dwh->Title}}
                            </td>
                            <td class="px-6 py-4">
                                {{$dwh->Description}}
                            </td>
                            <td class="px-6 py-4">
                                <a href={{$dwh->url}} target="_blank">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Visit here
                                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </a>
                                
                            </td>
                            @auth
                                
                              <td class="px-6 py-4 justify-center ">
                                <a href="{{ route('dwhResources.edit', $dwh->id)}}"
                                    ><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button></a>
                                   
                                <form action="{{ route('dwhResources.destroy', $dwh->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                  </form>
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @auth
                <a href="{{ route ('dwhResources.create') }}">
                    <button
                    class="px-3 py-2 text-sm font-medium text-center float-right text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Add more
                </button>

                @endauth
            </div>

            
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
            aria-labelledby="dashboard-tab">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg font-medium">
                <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            
                            <th scope="col" class="px-6 py-3">
                                HIS Product & Version
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Job Aid 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Video
                            </th>
                           @auth
                           <th scope="col" class="px-6 py-3">
                            Other options
                         </th>
                           @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($totData as $technical)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 uppercase">
                            
                
                            <td class="px-6 py-4">
                                {{$technical->HISProductVersion}}
                            </td>
                            <td class="px-6 py-4">
                                {{$technical->Description}}
                            </td>
                            <td class="px-6 py-4">
                                <a href= {{$technical->JobAid}} target="_blank">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Visit here
                                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </a>
                               
                            </td>
                            <td class="px-6 py-4">
                                
                                <a href= {{$technical->Video}} target="_blank">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Visit here
                                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </a>
                            </td>
                            @auth
                            <td class="px-6 py-4 justify-center">
                                <a href="{{ route('tot.edit', $technical->id)}}"
                                    ><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button></a>
                                   
                                <form action="{{ route('tot.destroy', $technical->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                  </form>
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @auth
                <a href="{{ route ('tot.create') }}">
                    <button
                    class="px-3 py-2 text-sm font-medium text-center float-right text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Add more
                </button>
                @endauth
            </div>

        </div>
        <div class="hidden p-4 uppercase bg-gray-50 rounded-lg dark:bg-gray-800" id="settings"  role="tabpanel"
            aria-labelledby="settings-tab">

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300 font-medium">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            
                            <th scope="col" class="px-6 py-3">
                                HIS Product & Version
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Job Aid Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Job Aid 
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Video
                            </th>
                            @auth
                                
                        
                            <th scope="col" class="px-6 py-3">
                               Other options
                            </th>
                            @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($endUserData as $enduser)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            
                
                            <td class="px-6 py-4">
                                {{$enduser->HISProductVersion}}
                            </td>
                            <td class="px-6 py-4">
                                {{$enduser->Description}}
                            </td>
                            <td class="px-6 py-4">
                                                                
                                <a href=  {{$enduser->JobAid}} target="_blank">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Visit here
                                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                
                                <a href= {{$enduser->Video}} target="_blank">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Visit here
                                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </a>
                            </td>
                            @auth                        
                            <td class="px-6 py-4 justify-center">

                                <a href="{{ route('endusercontent.edit', $enduser->id)}}"
                                    ><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button></a>
                                   
                                <form action="{{ route('endusercontent.destroy', $enduser->id)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                                  </form>


                               
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              @auth
        <a href="{{ route ('endusercontent.create') }}">
              <button
              class="px-3 py-2 text-sm font-medium text-center float-right text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              type="button">
              Add more
          </button>
        </a>
              @endauth
            </div>


           
        </div>
        {{-- all servers tab --}}
        <div class=" relative overflow-x-auto shadow-md sm:rounded-lg hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800"
            id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300 font-medium" >
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Server Name</th>
                    <th scope="col" class="px-6 py-3">Url</th>
                    <th scope="col" class="px-6 py-3">Status
                    <th>
                </thead>
                {{-- {{$json}} --}}
                <tbody>
                    
                     @foreach ($data as $server)
                
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 uppercase">
                        <td class="px-6 py-4">{{ $server->id }}</td>
                        <td class="px-6 py-4">{{ $server->friendly_name }}</td>
                        <td> <a href= {{$server->url}} target="_blank">
                            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Visit here
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </a>
                        <td class="px-6 py-4" id="color">
                            <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Up</button>
                        </td>
                        {{-- <script>
                            if ({{ $server->status }}===2) {
                                document.getElementById("color").insertAdjacentHTML("afterend",'<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Up</button>');
                            } else {
                                document.getElementById("color").insertAdjacentHTML("afterend",'<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Up</button>');
                            }


                        </script> --}}
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>



<!-- modals -->
