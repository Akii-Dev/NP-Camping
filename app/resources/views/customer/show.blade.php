<div>
    <h1>Customer Details</h1>
    <p>{{$customer->user_id}}</p>
    <p>{{$customer->id}}</p>
    <p>{{$customer->user->email}}</p>
    <p>{{$customer->surname}}</p>

    <a href="{{ route('customer.edit', $customer->user_id) }}">Edit</a>
</div>
