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
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customer_name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td>Product Id</td>
                <td><input type="text" name="product_id"></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td>Unit Price</td>
                <td><input type="number" name="unit_price"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
                <td>Total Price</td>
                <td><input type="number" name="total_price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
    </form>
    </center>
    {{session('msg')}}
    <br>
    @foreach ($errors->all() as $err)
    {{$err}}
    </br>
    @endforeach
    <a href="/system/sales/physical_store/sales_log">View Sales Log</a>
</body>

</html>