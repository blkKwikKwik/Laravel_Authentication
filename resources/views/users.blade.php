<x-app-layout>
<div>
    <div class="flex justify-center pt-10">
        <div>
            <div>
                <form class="input-group" action="{{ route('search.user') }}" method="GET">
                    @csrf
                    @method('get')
                    <label for="default-search" class="mb-2 text-sm font-medium sr-only text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="query" name="query" class="block w-full p-4 pl-10 text-sm border rounded-lg bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Search First Name" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
        <div class="relative lg:h-[700px] overflow-x-auto shadow-md sm:rounded-lg lg:w-[1000px]">
            <table class="w-full text-sm text-left text-gray-400">
                <thead class="text-xs bg-gray-700 text-gray-400 text-center">
                    <tr>
                        <th scope="col" class="pr-6 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email / Username
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class=" border-b bg-gray-900 border-gray-700">
                            <th scope="row" class="pr-6 py-4 font-medium whitespace-nowrap text-white text-center">
                                <div class="flex items-center">
                                    <img src={{ $user->image_path }} action="userProfile" class="w-12 h-12 rounded-full mr-2"/> {{ $user->first_name }}
                                </div>
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $user->last_name }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $user->email }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</x-app-layout>
