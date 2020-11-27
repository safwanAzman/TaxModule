@extends('default.default')
@section('content')
<div class="bg-white sm:rounded-lg shadow px-3 py-3 mt-3">
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-blue-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" onclick="test()">
      <div class="flex items-center">
        <span>Senarai Harta Cukai</span>
      </div>
    </a>
 <div class="grid grid-cols-12 gap-6">
    <div class="flex flex-col-reverse col-span-12 lg:col-span-12 xxl:col-span-12 lg:block">
        <div class="flex justify-between">
        <div class="flex items-center">
                    <span class="mr-2 -mt-4 text-base text-gray-500">Kawasan </span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value="" selected>Beserah</option>
                    </x-form.dropdown>

                    <span class=" ml-3 mr-2 -mt-4 text-base text-gray-500">Status</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>Aktif</option>
                        <option value="">Tidak Aktif</option>
                    </x-form.dropdown>

                    <span class="ml-3 mr-2 -mt-4 text-base text-gray-500">Kriteria</span>
                    <x-form.dropdown label="" value="" default="yes">
                        <option value=""selected>No Akaun Baru</option>
                    </x-form.dropdown>  
            </div>
                <div class="flex justify-end">
                    <span class="ml-3 mr-2 mt-3 text-base text-gray-500">Carian</span>
                    <x-form.input label="" value="" livewire=""/> 
            </div>
        </div>
    </div>
    <!-- With avatar -->
    <div class="col-span-12 lg:col-span-8 xxl:col-span-8">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                <thead >
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Bilangan Ditemui = <span class="font-semibold text-base"> 7</span> | Bilangan Dipapar = <span class="font-semibold text-base text-blue-500"> 7</span> </th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3"></th>
                    <th class="px-4 py-3 flex justify-end">
                        @include('pages.maklumatindividu')
                    </th>
                    </tr>
                </thead>
                </table>
                <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="">
                    <th class=""></th>
                    <th class=""></th>
                    <th class=""></th>
                   
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    
                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">1</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">MASLINDA BINTI MUHAMAD ISA (IND00019)-individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0200549</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 288 JALAN BUDIMAN KG MELAYU </span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">2,100.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">10.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">210.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/0000</span></p>
                                <p class="font-semibold">2018-02-02 20:28:04</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>

                     <tr class="border bg-blue-100 cursor-pointer">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">2</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">SUHAZLIN BINTI HARIS (810921146261)-individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0200703</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">BLOK 7 TINGKAT 4 APARTMENT INDAH</span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">2,800.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">11.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">308.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/0001</span></p>
                                <p class="font-semibold">2018-02-02 20:28:58</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">3</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">ROSLINA BT ABDULLAH (1223000009)-Individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0200714</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 22 JLN. BAN RB KG.</span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">2,400.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">11.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">2640.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00428</span></p>
                                <p class="font-semibold">2018-02-02 20:28:04</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>
                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">4</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">DEWIANA BINTI MOH (123445000017)-Individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0200713</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">LNO 84B TINGKAT 1,LORONG PANDAN DAMAI</span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">19,000.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">11.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">20490.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00092</span></p>
                                <p class="font-semibold">2018-02-02 20:28:04</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>

                     <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">5</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">TAN SIEW CHEOW (770205105318)-individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0201105</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 176 JALAN 1/12 TAMAN TAPAH</span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">2,800.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">9.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">252.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00255</span></p>
                                <p class="font-semibold">2018-02-02 20:28:04</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">6</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">HAIRUL BIN KHAMIS (661008084411)-individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0202491</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO,10 JALAN SUADAMAI </span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">6,200.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">9.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">558.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00058</span></p>
                                <p class="font-semibold">2018-02-02 20:28:04</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>

                    <tr class="border">
                        <td class="px-4 py-3" style=" border: 1px solid #ddd;">
                            <div class="flex text-2xl">
                                <p class="font-semibold ">7</p>
                                <svg
                                    class="w-8 h-8 ml-5 text-blue-500"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />


                                </svg>
                            
                            </div>
                        </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="text-base text-green-600 font-semibold uppercase">SALINA BINTI BUANG (701212113321)-individu</p>
                                <p class="font-semibold">No Akaun: <span class="text-base text-green-600 font-semibold">T0203049</span></p>
                                <p class="font-semibold">Alamat Harta: <span class="text-base text-blue-600 font-semibold">NO 22 JALAN PERMAI </span></p>
                                <p class="text-sm font-semibold">
                                    Nilai Tahunan: <span class="text-sm text-green-600 font-semibold">1,200.00</span>
                                        Kadar: <span class="text-sm text-green-600 font-semibold">10.00%</span>
                                        Cukai Tahunan: <span class="text-sm text-green-600 font-semibold">120.00</span>  
                                </p>
                            </td>
                            <td class="px-4 py-3 text-sm" style=" border: 1px solid #ddd;">
                                <p class="font-semibold">No Rujukan: <span class="text-base text-green-600 font-semibold">MPK/PEN/00059</span></p>
                                <p class="font-semibold">2018-02-02 20:28:04</p>
                                <p class="font-semibold">Dikemaskini Oleh: Admin</p>
                            </td>
                    </tr>
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-span-12 lg:col-span-4 xxl:col-span-4">
        <div class="bg-white shadow-lg">
          <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
                <span>Maklumat Harta</span>
            </div>
            <div class="text-gray-600 flex">
                @include('pages.info-modal')
                @include('pages.maklumatharta') 
            </div>
            </a>
            <div class="p-4 font-semibold text-sm leading-6">
                <p>Status Akaun: <span class="text-green-600 font-semibold mr-3">Aktif</span> Status Harta: <span class="text-green-600 font-semibold">Normal</span></p>
                <p>No Rujukan :<span class="text-gray-500 font-semibold mr-2"> MPK/PEN/00001</span></p>
                <p>No Akaun :  <span class="text-blue-600 font-semibold">T0200703</span> <span class="text-gray-600 font-semibold">(T0200703)</span></p>
                <p>Pemilik :  <span class="text-green-600 font-semibold">SUHAZLIN BINTI HARIS (810921146261)</span></p>
                <p>Alamat Harta :  <span class="text-gray-500 font-semibold">BLOK 7 TINGKAT 4 APARTMENT INDAH 25300 KUANTAN </span></p>
                <p>Kawasan :  <span class="text-gray-500 font-semibold mr-2">KUANTAN</span></p>
                <p>Taman :  <span class="text-gray-500 font-semibold">APARTMENT INDAH</span></p>
                <p>Jalan :  <span class="text-gray-500 font-semibold">JALAN MUHUBBAH</span></p>


            </div>
        </div>

        <div class="bg-white shadow-lg mt-4">
          <a class="flex items-center justify-between p-4 text-sm font-semibold text-purple-100 bg-blue-600 shadow-md focus:outline-none focus:shadow-outline-purple">
            <div class="flex items-center">
                <span>Maklumat Nilaian</span>
            </div>
              <div class="text-gray-600">@include('pages.maklumatnilaian')</div>
            </a>
            <div class="p-4 font-semibold text-sm leading-6">
                <p>Status Nilaian: <span class="text-green-600 font-semibold mr-3">Kemaskini</span></p>
                <p>Tarikh Nilaian :<span class="text-gray-500 font-semibold mr-2"> 13/05/2015</span></p>
                <p>Tarikh Mula Kadar: <span class="text-gray-500 font-semibold mr-2">01/07/2015</span></p>
                <p>Nilai Tahunan :  <span class="text-gray-500 font-semibold mr-2">40,000.00</span></p>
                <p>Kadar :  <span class="text-gray-500 font-semibold mr-2">3.5%</span></p>
                <p>Cukai Tahunan :  <span class="text-gray-500 font-semibold mr-2">1400.00</span></p>
            </div>
        </div>
    </div>
</div>
</div>

<script>
  function test() {
      Swal.fire({
      title: 'Do you want to save the changes?',
      showCancelButton: true,
      confirmButtonText: `Save`,

    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire('Saved!', '', 'success')
      } 
    })
  }
</script>

@stop