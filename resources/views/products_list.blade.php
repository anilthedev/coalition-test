@if(count($products)>0)
    <table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Product name</th>
        <th>Quantity in stock</th>
        <th>Price per item</th>
        <th>Datetime submitted</th>
        <th>Total value number</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $pr)
    <tr>
        <th scope="row">{{$pr->id}}</th>
        <td>{{$pr->product_name}}</td>
        <td>{{$pr->quantity}}</td>
        <td>{{$pr->price}}</td>
        <td>{{$pr->created_at}}</td>
        <td>{{$pr->price*$pr->quantity}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
    @else
    echo 'No Products Found';
    @endif