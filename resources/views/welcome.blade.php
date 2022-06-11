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
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="/form">Insert Data <span class="sr-only">(current)</span></a>
                  </li>
                  &nbsp;
                  <li class="nav-item active">
                      <a class="nav-link" href="/#">Gallery <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="/#">About Us <span class="sr-only">(current)</span></a>
                  </li>
               


                  <li class="nav-item form-inline my-2 my-lg-0">
                      <div class="navsearch">
               
                  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                  <form method="get" action="/search">
                      <div class="input-group stylish-input-group">
                          <input type="text" id="Search" name="text" class="form-control" placeholder="Search(name,place,vehicle)">
                          <span class="input-group-addon">
                              <button type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                              </button>
                          </span>
                      </div>

                  </form>
          </div>
          </li>



          </ul>


      </nav>

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
