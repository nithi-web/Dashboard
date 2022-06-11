<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    ​
    ​
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        div.main {
            background-color: lightcyan;
            width: 600px;
            padding: 10px 60px 25px;
            border: 5px solid gray;
            border-radius: 10px;
            font-family: raleway;
            float: left;
            margin-top: 120px;
            margin-left: 220px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            height: 40px;
            padding: 8px;
            margin-bottom: 25px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-size: 16px;
            border-radius: 5px;
        }

        label {
            color: #464646;
            text-shadow: 0 1px 0 #fff;
            font-size: 14px;
            font-weight: bold;
        }

        body {

            /* background-color: lightskyblue; */
            background-size: cover;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            margin: 0;
            color: #666;
        }
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
</head>

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



                <div class="main">
                    <a href="/">Back To Home </a>

                    <form action="/form" method="post" enctype="multipart/form-data">
                        <h1>Demo App</h1>
                        <h3>Please Fill</h3><br>
                        <label for="name"><b>Plant</b></label>
                        <input type="text" value="{{old('plant', '')}}" placeholder="Enter Plant" name="plant">

                        <label for="department"><b>Department</b></label>
                        <input type="text" value="{{old('department', '')}}" placeholder="Enter Department" name="department">

                        <label for="machine"><b>Machine</b></label>
                        <input type="text" value="{{old('machine', '')}}" placeholder="Enter Machine" name="machine">


                        <label for="op_no"><b>Op No</b></label>
                        <input type="text" value="{{old('op_no', '')}}" placeholder="Enter Op No" name="op_no">

                        <label for="complaint"><b>Complaint</b></label>
                        <input type="text" value="{{old('complaint', '')}}" placeholder="Enter Complaint" name="complaint">

                        <label for="date"><b>Date</b></label><br>
                        <input type="date" value="{{old('cause', '')}}" placeholder="Select Date" name="date"><br><br>

                        <label for="cause"><b>Cause</b></label>
                        <input type="text" value="{{old('cause', '')}}" placeholder="Enter Cause" name="cause">


                        @csrf

                        <button type="submit">Sign Submit</button><br>
                    </form><br>



                    <br>


                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>




            </script>

</body>

</html>
