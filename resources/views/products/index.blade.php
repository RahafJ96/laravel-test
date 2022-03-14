<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Products</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="background-color: #F8F8F8;">
<nav class="text-center" style="background-color:white;">
	<h1 style="color:#1E22A1; font-weight:bold;" >Header</h1>
	<hr style="width:70%;margin-left:15%">
	<br>
	
</nav>
  <div class="row page-container">
    <div class="col-sm-1">
    <ul class="sidebar-nav shadow">
            <li><a href="#">Dashboard</a></li>
            <li><a href="{{ url('api/products') }}">Product</a></li>
            <li><a href="{{ url('api/orders') }}">Order</a></li>
            <li><a href="#">Chat</a></li>
            <li><a href="#">Special Pages</a></li>
            <li><a href="#">Documentation</a></li>
        </ul>
    </div>
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- content of page -->
          <form class="form-inline">
            <div class="form-group">
              <label>From</label>
              <input type="date" value="<?php echo date('Y-m-d'); ?>" class="mx-sm-3">
              <label>To</label>
              <input type="date" value="<?php echo date('Y-m-d', strtotime('tomorrow')); ?>" class="mx-sm-3">
              <label>Day</label>
              <div class="mx-sm-3">
                <select name="location" required class="form-control" style="border-radius:20px;width:20rem;">
                  <option selected value="sun">Sunday</option>
                  <option value="mon">Monday</option>
                  <option value="tue">Tuesday</option>
                  <option value="wed">Wednesday</option>
                  <option value="thu">Thursday</option>
                  <option value="fri">Friday</option>
                  <option value="sat">Saturday</option>
                </select>
              </div>
              <div class="mx-sm-2">
                <input type="submit" value="Generate" name="submit" class="btn" style="border-radius: 20px; background-color:#1E22A1;color:white">
              </div>
              <div class="mx-sm-5">
                <input type="submit" value="Export" name="export" class="btn" style="border-radius: 20px; background-color:#FF8316;color:white">
              </div>

            </div>
          </form>
        </div>
      </div>
      <br>
      <div class="row">
          <table class="table table-borderless">
              <thead>
                  <tr>
                      <th scope="col">Product Name</th>
                      <th scope="col">Product Price</th>
                      <th scope="col">Times been ordered</th>
                      <th scope="col">Merchant Name</th>
                    </tr>
                </thead>
                @foreach($products as $product)
          <tbody style="color:rgb(92, 91, 91);">
          <tr>
              <td>{{$product->name}}</td>
              <td>{{$product->price}} $</td>
              <td>{{$product->created_at}}</td>
              <td>{{$product->status}}</td>
          </tr>
        </tbody>
        @endforeach
    </table>
</div>
    </div>
  </div>
  </div>

  </div>
  <footer class="sticky-footer" style="background-color:#EBEBEB; padding-top:20px;padding-bottom:10px">
        	<p class="text-center" style="font-size:large;">Footer</p>
        </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</html>