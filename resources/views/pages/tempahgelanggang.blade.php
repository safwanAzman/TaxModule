@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" onclick="test()">
      <div class="flex items-center">
        <span>TEMPAHAN GELANGGANG A (DEWAN MELATI)</span>
      </div>
    </a>
 <div class="grid grid-cols-12 gap-6" x-data="{ active: 1 }">
    <div class="flex flex-col-reverse col-span-12 lg:col-span-8 xxl:col-span-8 lg:block">
        <div class="flex justify-between">
            <div class="flex items-center">
                <div class="bg-white shadow-sm flex text-sm">
                <x-tab.title name="0">SENARAI GELANGGANG</x-tab.title>
                <x-tab.title name="1">KALENDAR TEMPAHAN</x-tab.title>
                <x-tab.title name="2">MAKLUMAT PEMOHON</x-tab.title>
                <x-tab.title name="3">BIL TEMPAHAN</x-tab.title>
            </div>
            </div>     
        </div>
    </div>
    <!-- With avatar -->
    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
        <div class="p-4">
            <x-tab.content name="0"></x-tab.content>
            <x-tab.content name="1">
                <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 lg:col-span-8 xxl:col-span-8">
                    <img class="h-screen w-full" src="{{ asset('img/gelanggang.png') }}">
                </div>
                 <div class="col-span-12 lg:col-span-4 xxl:col-span-4">
                    <div class="bg-white shadow-lg">
                    <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                        <div class="flex items-center">
                            <span>Kalendar</span>
                        </div>
                        <div class="text-gray-600"></div>
                        </a>
                        <div class="p-4">
                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" >
                                
                                <div class="bg-white rounded-lg shadow w-full p-4">

                                    <div class="flex justify-between items-center mb-2">
                                        <div>
                                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                        </div>
                                        <div>
                                            <button 
                                                type="button"
                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                :disabled="month == 0 ? true : false"
                                                @click="month--; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                </svg>  
                                            </button>
                                            <button 
                                                type="button"
                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                :disabled="month == 11 ? true : false"
                                                @click="month++; getNoOfDays()">
                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                </svg>									  
                                            </button>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap mb-3 -mx-1">
                                        <template x-for="(day, index) in DAYS" :key="index">	
                                            <div style="width: 14.26%" class="px-1">
                                                <div
                                                    x-text="day" 
                                                    class="text-gray-800 font-medium text-center text-xs"></div>
                                            </div>
                                        </template>
                                    </div>

                                    <div class="flex flex-wrap -mx-1">
                                        <template x-for="blankday in blankdays">
                                            <div 
                                                style="width: 14.28%"
                                                class="text-center border p-1 border-transparent text-sm"	
                                            ></div>
                                        </template>	
                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">	
                                            <div style="width: 14.28%" class="px-1 mb-1">
                                                <div
                                                    @click="getDateValue(date)"
                                                    x-text="date"
                                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"	
                                                ></div>
                                            </div>
                                        </template>
                                    </div>
                                </div>

                            </div>	 

                        </div>
                    </div>

                    <div class="bg-white shadow-lg mt-4">
                    <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
                        <div class="flex items-center">
                            <span>Pemohonan</span>
                        </div>
                        <div class="text-gray-600"></div>
                        </a>
                        <div class="p-4">
                            <div class=" grid gap-2 lg:grid-cols-3 sm:grid-cols-3">
                                <x-form.input label="DISKAUN" value="" livewire=""/><span class="pt-8 font-semibold">% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATAU</span>
                                <div class="pt-5">
                                    <x-form.input label="" value="" livewire=""/>
                                </div>

                            </div>
                            <div class=" grid gap-2 lg:grid-cols-1 sm:grid-cols-1">
                                <label class="block text-sm font-semibold leading-5 text-gray-700">Cacatan</label>
                                <textarea class="w-full resize-y border rounded focus:outline-none focus:shadow-outline h-24"></textarea>

                                <x-form.input label="Tarikh Pemohonan" value="03/02/2018" livewire=""/>
                            </div>
                            <a href="#" class="bg-green-500 hover:bg-grey text-blue-500-darkest font-bold py-2 px-4 rounded flex cursor-pointer" style="width: 114px;">
                                <span class="text-white text-sm flex items-center">Seterusnya</span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </x-tab.content>
            <x-tab.content name="2"></x-tab.content>
            <x-tab.content name="3"></x-tab.content>
            <x-tab.content name="4"></x-tab.content>
        </div>
    </div>

</div>
</div>

<script>
    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    function app() {
        return {
            showDatepicker: false,
            datepickerValue: '',

            month: '',
            year: '',
            no_of_days: [],
            blankdays: [],
            days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

            initDate() {
                let today = new Date();
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
            },

            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);

                return today.toDateString() === d.toDateString() ? true : false;
            },

            getDateValue(date) {
                let selectedDate = new Date(this.year, this.month, date);
                this.datepickerValue = selectedDate.toDateString();

                this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth()).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);

                console.log(this.$refs.date.value);

                this.showDatepicker = false;
            },

            getNoOfDays() {
                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                // find where to start calendar day of week
                let dayOfWeek = new Date(this.year, this.month).getDay();
                let blankdaysArray = [];
                for ( var i=1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }

                let daysArray = [];
                for ( var i=1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }

                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            }
        }
    }
</script>


@stop