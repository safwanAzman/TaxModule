<div x-data="{ {{$accordionActive}}: false}">
    <div class="flex items-center justify-between w-full py-3 mt-4 font-semibold border-b border-gray-400 cursor-pointer" @click="{{$accordionActive}} = !{{$accordionActive}}">
    <div class="text-base">{{$title}}</div>
        <svg x-show="!{{$accordionActive}}" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
        <svg x-show="{{$accordionActive}}" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
    </div>
    <div  class="mt-3" x-show="{{$accordionActive}}">
        {{$slot}}
    </div>
</div>