<!doctype html>
<html lang="en">

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }

        table,
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="EditAdminInfo.css">
    <link href="assets/css/animate.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet">
    <link href="font-family.css" rel='stylesheet'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="jquery-2.2.3.min.js"></script>
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js"></script>
    <script src="assets/js/chartist.min.js"></script>
    <style type="text/css">
            #color-bar {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-left: 5px;
            margin-top: 5px;
        }

        @page {
            size: auto;
            margin: 0mm;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            html,
            body {
                width: 210mm;
                height: 287mm;
            }
            html {
                overflow: scroll;
                overflow-x: hidden;
            }
             ::-webkit-scrollbar {
                width: 0px;
                /* remove scrollbar space */
                background: transparent;
                /* optional: just make scrollbar invisible */
            }

    </style>
</head>

<body onload="window.print();">




    <div>
        <h3 align="center">Customer Transactions</h3>
        <form action="{{route('transaction-action')}}" method="post" name="form">
            <div align="center" style="overflow-x:auto;">
                @csrf
                <table>
                    <tr>

                            <td><b>Tid</b></td>
                            <td><b>Transactor name</b></td>
                            <td><b>Transactor phone</b></td>
                            <td><b>Transactor mail</b></td>
                            <td><b>Transaction Type</b></td>
                            <td><b>Transacted to</b></td>
                            <td><b>Amount</b></td>
                            <td><b>Reciever Type</b></td>


                    </tr>
                    @foreach($histories as $history)
                    <tr>
                        <td><b>{{$history->tid}}</b></td>
                        <td><b>{{$user->uname}}</b></td>
                        <td><b>{{$user->phone}}</b></td>
                        <td><b>{{$user->email}}</b></td>
                        <td><b>{{$history->ttype}}</b></td>
                        <td><b>

                            @if($history->ttype=='bank')
                            {{$history->bname}}
                            <br>
                            {{$history->bacc}}
                            @elseif($history->ttype=='topup')
                            {{$history->reciever}}
                            @else
                            {{$history->reciever}}
                            @endif
                        </b></td>
                        <td><b>{{$history->amount}}TK</b></td>
                        <td><b>{{$history->ttype}}</b></td>

                    </tr>
                    @endforeach
                </table>

            </div>
            <br/>

        </form>
    </div>

</body>

</html>
