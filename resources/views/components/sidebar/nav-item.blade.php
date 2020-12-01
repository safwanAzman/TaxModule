<li class="relative px-6 py-1">
    <span class="absolute inset-y-0 left-0 w-1 bg-blue-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
    <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 hover:text-gray-100 dark:hover:text-gray-200 dark:text-gray-100"
    href="{{$route}}">
        {{$slot}}
        <span class="ml-4">{{$title}}</span>
    </a>
</li>