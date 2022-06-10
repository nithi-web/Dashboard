<!DOCTYPE html>
<html lang="en">
​

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    ​
    ​
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    ​
    ​
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    ​ <style>
        usebody {
            padding-top: 40px;
        }

        ​ .col-sm-6 {
            background: #ccc;
        }

        ​ .other {
            background: #a4a4a4;
        }

        ​ .p {
            text-align: center;
            padding-top: 120px;
        }

        ​ .p a {
            text-decoration: underline;
            color: blue;
        }

        .navsearch {
            margin-left: 600px;
        }

        body {
            margin-top: 0px;
            background-color: #f5f5f5;
        }

        .tableheading {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            font-family: cursive;

        }

        .listofcust {
            font-size: 38px;
            font-weight: bold;
            font-family: Times New Roman", Times, serif;;

        }

        .dropdown {
            margin-right: auto;
        }
    </style>
    ​
</head>
​

<body>


    

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-4 col-md-6">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif

               <h1>Welcome </h1>


              
               


        

                <h2 class="listofcust">Dashboard for Breakdown Analysis</h2> <br>
                <table border="1" class="table table-striped">
                    <tr class="tableheading">

                        <td>Plant</td>

                        <td>Department</td>

                        <td>Machine</td>

                        <td>Op No</td>

                       <td>Complaint</td>

                        <td>Date</td>
                        <td>Cause of Breakdown</td>

                        <td>Time</td>

                        @foreach($datas as $rows)

<tr>

    <td>{{$rows->plant}}</td>
    <td>{{$rows->department}}</td>

    <td>{{$rows->machine}}</td>
    <td>{{$rows->op_no}}</td>

    <td>{{$rows->complaint}}</td>
    <td>{{$rows->date}}</td>

    <td>{{$rows->cause}}</td>
    <td>{{$rows->time}}</td>

   

</tr>
@endforeach



                       


                    </tr>

    

                </table>
             


            </div>
        </div>
    </div>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>

    </script>

</body>

</html>
