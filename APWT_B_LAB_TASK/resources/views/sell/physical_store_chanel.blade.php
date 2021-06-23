<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Store Chanel</title>
</head>

<body>
    <p> Sold products at Current Date : {{session('current_date')}}</p>
    <p> Sold products at Last seven days : {{session('last_seven_days')}}</p>
    <p> Avg. Sales : {{session('avg_sales')}}</p>
    <p> Max. Sales : {{session('max_sold')}}</p>
    <a href="/system/sales/physical_store/sales_log">View Sales Log</a>
</body>

</html>