<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sample Bootstrap Page</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript">var baseUrl = "<?php echo URL::to('/'); ?>";</script>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills float-right">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

    <div class="jumbotron">
        <h1 class="display-3">Add Your Product</h1>
        <div class="container">
            <div class="row">

                <div class="col">
                    {!! Form::open(['method'=>'post','id'=>'addProductForm']) !!}
                    <div class="form-group">
                        <label>Product Name</label>
                        {!! Form::text('product_name','',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        {!! Form::number('quantity','',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        {!! Form::number('price','',['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>


            </div>

        </div>

    </div>
    <div class="container productsContainer">
        <div class="row">
            <div class="col">
            <div class="productsList"></div>
            </div>
        </div>
    </div>


    <script src="{{url('/')}}/js/custom.js"></script>
    <footer class="footer">
        <p>&copy; Company 2017</p>
    </footer>

</div> <!-- /container -->

</body>
</html>