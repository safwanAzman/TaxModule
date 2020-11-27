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
            <h1 class="titlestyle">TRANSAKSI (SEMUA)</h1>
        </div>

        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">Pengguna Cetak</td>
                        <td class="tdstyle">{{ strtoupper(auth()->user()->name) }}</td>

                        <td class="tdstyle">Jumlah Keseluruhan Transaksi</td>
                        <td class="tdstyle">RM {{ number_format(array_sum(array_column($details, 'amount')), 2) }}</td>

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
                        <th style='text-align:center'>No. Resit</th>
                        <th style='text-align:center'>Tarikh Resit</th>
                        <th style='text-align:center'>No. Bil</th>
                        <th style='text-align:center'>Tarikh Bil </th>
                        <th style='text-align:center'>Urusniaga</th>
                        <th style='text-align:center'>Kod Hasil</th>
                        <th style='text-align:center'>Kompaun Status</th>
                        <th style='text-align:center'>No. Plat</th>
                        <th style='text-align:right'>Amaun (RM)</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($details as $detail)
                    <tr>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ strtoupper($detail->receipt_no) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ date('d/m/Y', strtotime($detail->created_at)) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ strtoupper($detail->bil_no) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ date('d/m/Y', strtotime($detail->bil_date)) }}</td>
                        <td style='padding: 5px; text-align: center;font-size: 14px;'>{{ strtoupper($detail->business_type) }}</td>
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