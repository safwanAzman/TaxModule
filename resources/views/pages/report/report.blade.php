@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      >
      <div class="flex items-center">
        <span>Report</span>
      </div>
      <a  href="{{route('Kutipan.index')}}" class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-white mr-2 mt-1">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            <span>Kembali</span>
        </a>
    </div>
    <div class="bg-white sm:rounded-lg shadow px-5 py-3">

        <div class="grid grid-cols-12 gap-6" x-data="{ active: 0 }">
            <div class="flex flex-col-reverse col-span-12 lg:col-span-3 xxl:col-span-3 lg:block">
                <div class="bg-white shadow-xl p-4">
                    <div class="border-b border-gray-200 text-base font-semibold mb-4">
                        <p class="py-2">TYPE OF REPORT</p>
                    </div>
                    <x-tab.title name="0">Senarai Anggota</x-tab.title>
                    <x-tab.title name=1>Kebajikan</x-tab.title>
                    <x-tab.title name="2">Pembiayaan</x-tab.title>
                    <x-tab.title name="3">Takaful</x-tab.title>
                    <x-tab.title name="4">Surat</x-tab.title>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-9 xxl:col-span-9">
                <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold border-b border-gray-400">
                    <div class="flex items-center">
                        <span>LIST OF REPORT</span>
                    </div>
                </div>
                <x-tab.content name="0">@include('pages.report.senaraiAnggota')</x-tab.content>
                <x-tab.content name="1"></x-tab.content>
                <x-tab.content name="2"></x-tab.content>
                <x-tab.content name="3"></x-tab.content>
                <x-tab.content name="4"></x-tab.content>
               
            </div>
        </div>
    </div>
</div>


@endsection