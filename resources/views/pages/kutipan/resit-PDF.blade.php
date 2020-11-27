<!DOCTYPE html>
<html>
    <head>
        <title>eCouncil</title>
        <link rel="icon" href="{{asset('img/eCouncil_biru.png')}}" type="image/gif" sizes="18x18">
        <style>
            #tables {}

            #table td,
            #table th {
                padding: 8px;
                font-size: 11px;
            }

            #table tr:hover {
                background-color: #ddd;
            }

            #table th {
                padding-left: 1.4rem;
                padding-right: 1.4rem;
                text-align: left;
                background-color: #c1ffb8;
                color: rgb(0, 0, 0);
            }

            .tdstyle {
                padding: 5px;
                text-align: left;
                font-size: 11px;
                font-family: Arial, Helvetica, sans-serif;
            }

            .titlestyle {
                font-size: 20px;
                color: #ffffff;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center
            }

            .titlestyle2 {
                font-size: 20px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: center;
                position: absolute;
                left: 120px;
            }

            .titlestyle3 {
                font-size: 12px;
                font-family: Arial, Helvetica, sans-serif;
                text-align: left;
                position: absolute;
                left: 120px;
                top: 40px;
            }
        </style>
    </head>

    <body>

        <div style="margin-bottom:40px">
            <div style="width: 100%;">

                <div style="display:flex">
                    <img src="https://www.vectorise.net/forums/downloads/majlis-perbandaran-kuantan-300x262_esW.png"
                        style="width: 100px; height: 100px;" />

                    <h1 class="titlestyle2">MAJLIS PERBADANDARAN KUANTAN</h1><br>
                    <span class="titlestyle3">Jalan Tanah Putih,25100 Kuantan, Pahang<br>TEL: 09-5121555 / 09-5121666 FAKS
                        :09-5130644<br>E-MEL:aduan@mpk.gov.my LAMAN WEB:www.mpk.gov.my
                    </span>
                </div>

            </div>
        </div>

        <div style="background-color: black; padding:6px; margin-top:20px;">
            <h1 class="titlestyle">TRANSAKSI {{ strtoupper($invoice->business_type) }}</h1>
        </div>

        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">Nama Pemilik</td>
                        <td class="tdstyle">{{ strtoupper($invoice->customer_name) }}</td>

                        <td class="tdstyle">No Rujukan</td>
                        <td class="tdstyle">{{ strtoupper($invoice->bil_no) }}</td>
                    </tr>

                    <tr>
                        <td class="tdstyle">No.Akaun</td>
                        <td class="tdstyle">{{ strtoupper($invoice->account_no) }}</td>

                        <td class="tdstyle">Status Harta</td>
                        <td class="tdstyle">NORMAL</td>
                    </tr>

                    <tr>
                        <td class="tdstyle">Alamat Surat Menyurat</td>
                        <td class="tdstyle">
                            {{ isset($invoice->customer_address1) ? strtoupper($invoice->customer_address1).', ' : '' }}
                            {{ isset($invoice->customer_address2) ? strtoupper($invoice->customer_address2).', ' : '' }}
                            {{ isset($invoice->customer_address3) ? strtoupper($invoice->customer_address3).', ' : '' }}
                            {{ isset($invoice->customer_postcode) ? strtoupper($invoice->customer_postcode).' ' : '' }}
                            {{ isset($invoice->customer_town) ? strtoupper($invoice->customer_town).', ' : '' }}
                            {{ isset($invoice->customer_state) ? strtoupper($invoice->customer_state) : '' }}
                        </td>

                        <td class="tdstyle">Alamat Harta</td>
                        <td class="tdstyle">
                            {{ isset($invoice->company_address1) ? strtoupper($invoice->company_address1).', ' : '' }}
                            {{ isset($invoice->company_address2) ? strtoupper($invoice->company_address2).', ' : '' }}
                            {{ isset($invoice->company_address3) ? strtoupper($invoice->company_address3).', ' : '' }}
                            {{ isset($invoice->company_postcode) ? strtoupper($invoice->company_postcode).' ' : '' }}
                            {{ isset($invoice->company_town) ? strtoupper($invoice->company_town).', ' : '' }}
                            {{ isset($invoice->company_state) ? strtoupper($invoice->company_state) : '' }}
                        </td>
                    </tr>

                    {{-- <tr>
                        <td class="tdstyle">Nilai Tahunan</td>
                        <td class="tdstyle">{{ strtoupper($invoice->customer_name) }}</td>

                        <td class="tdstyle">Kegunaan Tanah</td>
                        <td class="tdstyle">PERNIAGAAN</td>
                    </tr> --}}

                    <tr>
                        <td class="tdstyle">Kadar</td>
                        <td class="tdstyle">10.00%</td>

                        <td class="tdstyle">Kategori Harta</td>
                        <td class="tdstyle">BANGUNAN</td>
                    </tr>

                    {{-- <tr>
                        <td class="tdstyle">Cukai Tahunan</td>
                        <td class="tdstyle">210.00</td>

                        <td class="tdstyle">Jenis Bangunan</td>
                        <td class="tdstyle">KILANG BERKEMBAR 1 TINGKAT</td>
                    </tr> --}}

                    <tr>
                        <td class="tdstyle">Daerah</td>
                        <td class="tdstyle"></td>

                        <td class="tdstyle">Mukim</td>
                        <td class="tdstyle">{{ strtoupper($invoice->mukim) }}</td>
                    </tr>

                    <tr>
                        <td class="tdstyle">No.Lot/PT</td>
                        <td class="tdstyle">{{ strtoupper($invoice->lot_no) }}</td>

                        <td class="tdstyle">No.Hakmilik</td>
                        <td class="tdstyle">{{ strtoupper($invoice->ownership_no) }}</td>
                    </tr>

                    <tr>
                        <td class="tdstyle">Pengguna Cetak</td>
                        <td class="tdstyle">{{ strtoupper(auth()->user()->name) }}</td>

                        <td class="tdstyle">Tarikh Cetakan</td>
                        <td class="tdstyle">{{ date('d/m/Y') }}</td>
                    </tr>


                </tbody>
            </table>
        </div>
        <hr>
        <div style="margin-top:20px">
            <table id="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th style='text-align:center'>Tarikh</th>
                        <th style='text-align:center'>Kod Hasil</th>
                        <th style='text-align:center'>Status Kompaun</th>
                        <th style='text-align:center'>No. Plat </th>
                        <th style='text-align:right'>Amaun</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($invoice->detail as $detail)
                    <tr>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ date('d/m/Y', strtotime($invoice->bil_date)) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ strtoupper($detail->hasil_code) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ strtoupper($detail->compound_status) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ strtoupper($detail->plate_no) }}</td>
                        <td style='padding: 5px; text-align: right;font-size: 14px;'>{{ number_format($detail->amount, 2) }}</td>
                    </tr>
                    @empty @endforelse
                </tbody>
            </table>
        </div>

    </body>

</html>