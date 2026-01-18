<!DOCTYPE html>
<html>

<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 70%;
            margin: auto;
            text-align: center;
            font-family: arial;
            padding: 10px;
            border-radius: 10px;
            overflow: hidden;
            background: #33475b;
        }

        .card h2,
        .card p, p {
            color: white;
        }

        .card h4 {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #dc3545;
            text-align: center;
            font-size: 18px;
            border-radius: 10px 0 10px 0;
        }

        #customers tr th {
            border-radius: 10px;
        }

        #customers tr th a {
            color: white;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid white;
            padding: 8px;
        }


        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            color: white;
        }

    </style>
</head>

<body>

    <div class="card">
        <h2>Your Package Registration Details</h2>
        <table id="customers">
            <tr>
                <th>Name: {{ $buy->name }}</th>
            </tr>
            <tr>
                <th>Package: {{ $buy->en_package_name }}</th>
            </tr>
            <tr>
                <th>Mbps: {{ $buy->en_mbps_value }}</th>
            </tr>
            <tr>
                <th>Phone: {{ $buy->phone }}</th>
            </tr>

        </table>
        <h4>Terms & Conditions you agreed during registration</h4>
        <p>
            {!! $tc->en_payment_mode !!} <br>
            {!! $tc->en_documentation !!} <br>
            {!! $tc->en_after_sales_service !!} <br>
            {!! $tc->en_client_responsibility !!} <br>
            {!! $tc->en_others !!} <br>
            {!! $tc->en_contact_termination !!} <br>
        </p>
    </div>

</body>

</html>
