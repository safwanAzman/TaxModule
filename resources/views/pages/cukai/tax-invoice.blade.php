<!DOCTYPE html>
<html>
    <title>Lesen</title>
    <head>
        <style>
        #tables {}
        #table td,
        #table th {
            padding: 8px;
            font-size: 11px;
            font-family: Arial, Helvetica, sans-serif;
        }
        #table tr:hover {
            background-color: #ddd;
        }
        #table th {
            padding-left: 1.4rem;
            padding-right: 1.4rem;
            text-align: left;
            background-color: #ffffff;
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
        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">Jenis :</td>
                        <td class="tdstyle" style="font-weight:bold;">2 TRED/PERNIAGAAN/PERINDUSTERIAN/LAIN-LAIN</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">No.Akaun Baru</td>
                        <td class="tdstyle">{{ $receipt->invoice->account_no }}<br>
                            <img src="https://w7.pngwing.com/pngs/103/686/png-transparent-barcode-scanners-universal-product-code-others-angle-label-rectangle.png"
                                style="width: 85px; height:18px;" />
                        </td>
                        <td class="tdstyle">No.Akaun Lama</td>
                        <td class="tdstyle">{{ $receipt->invoice->old_account_no }}</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Rujukan Baru Rujukan (F)</td>
                        <td class="tdstyle">{{ $receipt->invoice->bil_no }}<br>MPS(UP)37677</td>
                        <td class="tdstyle"></td>
                        <td class="tdstyle"></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Nama Peniaga</td>
                        <td class="tdstyle">{{ $receipt->invoice->customer_name }}</td>
                        <td class="tdstyle">No.Kad Pengenalan</td>
                        <td class="tdstyle">{{ $receipt->invoice->customer_ic }}</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Nama Syarikat</td>
                        <td class="tdstyle">{{ $receipt->invoice->company_name }}</td>
                        <td class="tdstyle">No.Pendaftaran Syarikat</td>
                        <td class="tdstyle">{{ $receipt->invoice->ownership_no }}</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Alamat</td>
                        <td class="tdstyle">
                            {{ isset($receipt->invoice->company_address1) ? $receipt->invoice->company_address1.', ' : '' }}
                            {{ isset($receipt->invoice->company_address2) ? $receipt->invoice->company_address2.', ' : '' }}
                            {{ isset($receipt->invoice->company_address3) ? $receipt->invoice->company_address3.', ' : '' }}
                            {{ isset($receipt->invoice->company_postcode) ? $receipt->invoice->company_postcode.' ' : '' }}
                            {{ isset($receipt->invoice->company_town) ? $receipt->invoice->company_town.', ' : '' }}
                            {{ isset($receipt->invoice->company_state) ? $receipt->invoice->company_state : '' }}
                        </td>
                        <td class="tdstyle"></td>
                        <td class="tdstyle"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">Tamat Lesen : <span style="font-weight: bold">01/12/2021</span></td>
                        <td style='text-align:right;font-size: 11px; font-family: Arial, Helvetica, sans-serif;'>Muka/s 1/1
                            :</td>
                    </tr>
                </tbody>
            </table>
            <table id="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th style='padding: 5px;text-align:left'>BIL</th>
                        <th style='padding: 5px;text-align:left'>KOD HASIL</th>
                        <th style='padding: 5px;text-align:left'>JENIS LESEN</th>
                        <th style='padding: 5px;text-align:left'>KETERANGAN</th>
                        <th style='padding: 5px;text-align:left' colspan="2"></th>
                        <th style='padding: 5px; text-align:right'>AMAUN</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($receipt->invoice->detail as $detail)
                    <tr>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $loop->iteration }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $detail->hasil_code }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $detail->licence_type }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $detail->compound_status }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;' colspan="2"></td>
                        <td style='padding: 5px; text-align: right;font-size: 10px;'>{{ number_format($detail->amount, 2) }}</td>
                    </tr>    
                    @empty @endforelse
                    <tr>
                        <td style='padding: 5px; text-align: left;font-size: 10px;' colspan="5"></td>
                        <td style='padding: 5px; text-align: left;font-size: 10px; font-weight: bold;'>JUMLAH</td>
                        <td style='padding: 5px; text-align: right;font-size:10px;'>{{ number_format($receipt->invoice->detail->sum('amount'), 2) }}</td>
                    </tr>
                    <tr>
                        <td style='padding: 5px; text-align: left;font-size: 10px;' colspan="5"></td>
                        <td style='padding: 5px; text-align: left;font-size: 10px; font-weight: bold;'>JUMLAH BESAR</td>
                        <td style='padding: 5px; text-align: right;font-size: 10px;'>{{ number_format($receipt->invoice->detail->sum('amount'), 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">TAX INVOICE-(No GST :002051657728)<br>Nota : *Kod Hasil di kenakan GST sebanyak
                            0.00%</td>
                        <td style='text-align:right;font-size: 11px; font-family: Arial, Helvetica, sans-serif;'>LESEN INI
                            TIDAK SAH KECUALI ADA CETAKAN<br>
                            MESIN PENERIMAAN MAJLIS PERBANDARAN KUANTAN<br><span style="font-size: 9px;">Cetakan : Admin {{ date("d/m/Y G:i:s") }}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">Jenis :</td>
                        <td class="tdstyle" style="font-weight:bold;">2 TRED/PERNIAGAAN/PERINDUSTERIAN/LAIN-LAIN</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">No.Akaun Baru</td>
                        <td class="tdstyle">{{ $receipt->invoice->account_no }}<br>
                            <img src="https://w7.pngwing.com/pngs/103/686/png-transparent-barcode-scanners-universal-product-code-others-angle-label-rectangle.png"
                                style="width: 85px; height:18px;" />
                        </td>
                        <td class="tdstyle">No.Akaun Lama</td>
                        <td class="tdstyle">{{ $receipt->invoice->old_account_no }}</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Rujukan Baru Rujukan (F)</td>
                        <td class="tdstyle">{{ $receipt->invoice->bil_no }}<br>MPS(UP)37677</td>
                        <td class="tdstyle"></td>
                        <td class="tdstyle"></td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Nama Peniaga</td>
                        <td class="tdstyle">{{ $receipt->invoice->customer_name }}</td>
                        <td class="tdstyle">No.Kad Pengenalan</td>
                        <td class="tdstyle">{{ $receipt->invoice->customer_ic }}</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Nama Syarikat</td>
                        <td class="tdstyle">{{ $receipt->invoice->company_name }}</td>
                        <td class="tdstyle">No.Pendaftaran Syarikat</td>
                        <td class="tdstyle">{{ $receipt->invoice->ownership_no }}</td>
                    </tr>
                    <tr>
                        <td class="tdstyle">Alamat</td>
                        <td class="tdstyle">
                            {{ isset($receipt->invoice->company_address1) ? $receipt->invoice->company_address1.', ' : '' }}
                            {{ isset($receipt->invoice->company_address2) ? $receipt->invoice->company_address2.', ' : '' }}
                            {{ isset($receipt->invoice->company_address3) ? $receipt->invoice->company_address3.', ' : '' }}
                            {{ isset($receipt->invoice->company_postcode) ? $receipt->invoice->company_postcode.' ' : '' }}
                            {{ isset($receipt->invoice->company_town) ? $receipt->invoice->company_town.', ' : '' }}
                            {{ isset($receipt->invoice->company_state) ? $receipt->invoice->company_state : '' }}
                        </td>
                        <td class="tdstyle"></td>
                        <td class="tdstyle"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">Tamat Lesen : <span style="font-weight: bold">01/12/2021</span></td>
                        <td style='text-align:right;font-size: 11px; font-family: Arial, Helvetica, sans-serif;'>Muka/s 1/1
                            :</td>
                    </tr>
                </tbody>
            </table>
            <table id="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th style='padding: 5px;text-align:left'>BIL</th>
                        <th style='padding: 5px;text-align:left'>KOD HASIL</th>
                        <th style='padding: 5px;text-align:left'>JENIS LESEN</th>
                        <th style='padding: 5px;text-align:left'>KETERANGAN</th>
                        <th style='padding: 5px;text-align:left' colspan="2"></th>
                        <th style='padding: 5px; text-align:right'>AMAUN</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($receipt->invoice->detail as $detail)
                    <tr>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $loop->iteration }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $detail->hasil_code }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $detail->licence_type }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;'>{{ $detail->compound_status }}</td>
                        <td style='padding: 5px; text-align: left;font-size: 10px;' colspan="2"></td>
                        <td style='padding: 5px; text-align: right;font-size: 10px;'>{{ number_format($detail->amount,2) }}</td>
                    </tr>    
                    @empty @endforelse
                    <tr>
                        <td style='padding: 5px; text-align: left;font-size: 10px;' colspan="5"></td>
                        <td style='padding: 5px; text-align: left;font-size: 10px; font-weight: bold;'>JUMLAH</td>
                        <td style='padding: 5px; text-align: right;font-size:10px;'>{{ number_format($receipt->invoice->detail->sum('amount'), 2) }}</td>
                    </tr>
                    <tr>
                        <td style='padding: 5px; text-align: left;font-size: 10px;' colspan="5"></td>
                        <td style='padding: 5px; text-align: left;font-size: 10px; font-weight: bold;'>JUMLAH BESAR</td>
                        <td style='padding: 5px; text-align: right;font-size: 10px;'>{{ number_format($receipt->invoice->detail->sum('amount'), 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="margin-top:20px">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="tdstyle">TAX INVOICE-(No GST :002051657728)<br>Nota : *Kod Hasil di kenakan GST sebanyak
                            0.00%</td>
                        <td style='text-align:right;font-size: 11px; font-family: Arial, Helvetica, sans-serif;'>LESEN INI
                            TIDAK SAH KECUALI ADA CETAKAN<br>
                            MESIN PENERIMAAN MAJLIS PERBANDARAN KUANTAN<br><span style="font-size: 9px;">Cetakan : Admin {{ date("d/m/Y G:i:s") }}</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
