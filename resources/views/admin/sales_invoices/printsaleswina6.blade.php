<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> طباعة فاتورة مبيعات </title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}">
        <style>
            td {
                font-size: 15px !important;
                text-align: center;
            }
        </style>
    </head>
    <body style="padding-top: 10px;font-family: tahoma;">

        <div class="container">

            <!--start invoice header-->
            <div class="row" style="margin-top: 10px;  border: 1px solid black; border-radius: 10px;">

                <!--left details-->
                <div class="col-4 text-center" style="margin-left: 30px; margin-top: 30px;">
                    <p style="direction: ltr; font-size: 1.6em">{{ $systemData['system_name'] }}</p>
                    <p style="direction: ltr; font-size: 1.6em">{{ $systemData['phone'] }}</p>
                </div>

                <!--logo-->
                <div class="col-3">
                    <img style=" margin-top: -50px; width: 250px; height: 170px;" src="{{ asset('admin/uploads') . '/' . $systemData['photo'] }}">
                    {{-- <p>{{ $systemData['system_name'] }}</p> --}}
                </div>

                <!--right details-->
                <div class="col-4 text-center" cellspacing="0" style="margin-left: 30px; margin-top: 30px;">
                    <p style="direction: rtl; font-size: 1.6em">{{ $systemData['system_name'] }}</p>
                </div>
            </div>
            <!--end invoice header-->

            <br>

            <div class="row">
                <div class="col-6">
                    <span style="float: left">
                        Keep rcpt for refund / exchange
                    </span>
                    <br>
                    <span style="float: left">
                        1 day fresh food, 30 days others
                    </span>
                </div>
                <div class="col-6 text-center">
                    <span style="float: right">
                        احتفظ بالإيصال للإسترجاع أو التبديل خلال 30 يوم
                    </span>
                    <br>
                    <span style="float: right">
                        الأغذية الطازجة الإسترجاع خلال 24 ساعة فقط
                    </span>
                </div>
            </div>



            {{-- <table style="width: 30%;float: right;  margin-right: 5px;" dir="rtl">
                <tr>
                    <td style="text-align: center;padding: 5px;font-weight: bold;">
                        <span style=" display: inline-block; width: 200px; height: 30px; text-align: center; color: red; border: 1px solid black;">
                            رقم : {{ $data['auto_serial'] }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;padding: 5px;">
                        <span style=" display: inline-block; width: 200px; height: 30px; text-align: center; color: blue; border: 1px solid blue;font-weight: bold;">
                            @if ($data['pill_type'] == 1)
                                Cach
                            @else
                                Delayed
                            @endif
                        </span>
                    </td>
                </tr>
            </table> --}}

            <br>
            <br>
            <br>

            <!--start invoice details-->
            <div class="row" style="padding-bottom: 30px; border-bottom: 1px dashed black; ">
                <div class="col-1"></div>
                <div class="col-9">
                    <table style="width: 100%; margin: 0 auto;">
                        <thead>
                            <tr style="background-color: gainsboro">
                                <td style="font-weight: bold;">co.</td>
                                <td style="font-weight: bold;">type</td>
                                <td style="font-weight: bold;">count</td>
                                <td style="font-weight: bold;">unit</td>
                                <td style="font-weight: bold;">price</td>
                                <td style="font-weight: bold;">total</td>
                            </tr>
                        </thead>

                        @if (!@empty($sales_invoices_details) and count($sales_invoices_details) > 0)
                            @php
                                $i = 1;
                                $totalItems = 0;
                            @endphp
                            <tbody>
                                @foreach ($sales_invoices_details as $info)
                                    <tr>
                                        <td>
                                            {{ $info->item_code }}
                                        </td>
                                        <td>
                                            {{ $info->item_name }}
                                            @if ($info->is_normal_orOther > 1):?>
                                                ( ملاحظة هذا
                                                @if ($info->is_normal_orOther == 2)
                                                    بونص
                                                @elseif($info->is_normal_orOther == 3)
                                                    دعاية
                                                @elseif($info->is_normal_orOther == 4)
                                                    هالك
                                                @else
                                                    لم يحدد
                                                @endif?>
                                                )
                                            @endif
                                        </td>
                                        <td>
                                            {{ $info->quantity * 1 }}
                                        </td>
                                        <td>
                                            {{ $info->uom_name }}
                                        </td>
                                        <td>
                                            {{ $info->unit_price * 1 }}
                                        </td>
                                        <td>
                                            {{ $info->total_price * 1 }}
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
                <div class="col-1"></div>
                <br>
            </div>
            <!--end invoice details-->

            <br>

            <!--start invoice summary-->
            <div class="row">
                <div class="col-8"></div>
                <div class="col-2">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">TOTAL:</td>
                    </table>
                </div>
                <div class="col-1">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">{{ $data['total_befor_discount'] * 1 }}</td>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>

            {{-- <div class="row">
                <div class="col-8"></div>
                <div class="col-3">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">Discount Value</td>
                    </table>
                </div>
                <div class="col-1">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">{{ $data['discount_value'] * 1 }}</td>
                    </table>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-8"></div>
                <div class="col-2">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">CHANGE:</td>
                    </table>
                </div>
                <div class="col-1">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">{{ $data['tax_value'] * 1 }}</td>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="row">
                <div class="col-8"></div>
                <div class="col-2">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">CACH:</td>
                    </table>
                </div>
                <div class="col-1">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">{{ $data['total_cost'] * 1 }}</td>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>

            {{-- <div class="row">
                <div class="col-8"></div>
                <div class="col-3">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">Total Paid</td>
                    </table>
                </div>
                <div class="col-1">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">{{ $data['what_paid'] * 1 }}</td>
                    </table>
                </div>
            </div> --}}

            {{-- <div class="row">
                <div class="col-8"></div>
                <div class="col-3 ">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">Total Remain</td>
                    </table>
                </div>
                <div class="col-3">
                    <table class="text-center">
                        <td class="text-center" style="font-weight: bold;">{{$data['what_remain'] * 1 }}</td>
                    </table>
                </div>
            </div> --}}
            <!--end invoice summary-->


            <!--start some other details-->
            <div class="row" style="float:left">
                <div class="col-12">
                    <span style="float:left"> SERVED BY: {{ auth()->user()->name }} </span>
                    <br>
                    <span style="float:left"> TOTAL NUMBER OF ITEMS SOLD = {{ count($sales_invoices_details) }} </span>
                    <br>
                    <span style="float:left"> INVOICE DATE: {{ $data['created_at'] }} </span>
                    <br>
                    <span style="float:left"> INVOICE Number: {{ $data['auto_serial'] }} </span>
                </div>
            </div>
            <!--end some other details-->

            <!--start about invoice-->
            <div class="row">
                <div class="col-12">
                    <p>Prices Include VAT</p>
                    <p>On Subjected Items Only</p>
                    <p style="font-weight: bold;">Tax Card Number 200 - 185 - 128</p>
                    <p style="font-weight: bold;">Brought to you by ESLAM</p>
                </div>
            </div>
            <!--end about invoice-->

            <!--start invoice footer-->
            <p style="position: fixed; padding: 10px 10px 0px 10px; bottom: 30px; width: 100%; /* Height of the footer*/ text-align: center;font-size: 16px; font-weight: bold;">
                {{ $systemData['system_name'] }}
            </p>
            <p style="position: fixed; padding: 10px 10px 0px 10px; bottom: 0; width: 100%; /* Height of the footer*/ text-align: center;font-size: 16px; font-weight: bold;">
                {{ $systemData['address'] }} - {{ $systemData['phone'] }}
            </p>
            <!--end invoice footer-->

            <script>
                window.print();
            </script>

        </div>
    </body>

</html>
