<!DOCTYPE html>
<html>
<head>
    <title>Daily Drink Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<h1 class="text-primary mb-4">🧃 Daily Drink Tracker</h1>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('drinks.create') }}" class="btn btn-primary mb-3">+ Add Drink</a>

<table class="table table-bordered table-striped">
<thead class="table-primary">
<tr>
<th>Name</th>
<th>Type</th>
<th>Amount (ml)</th>
<th>Calories</th>
<th>Date</th>
<th>Actions</th>
</tr>
</thead>

<tbody>
@foreach($drinks as $drink)
<tr>
<td>{{ $drink->name }}</td>
<td>{{ $drink->type }}</td>
<td>{{ $drink->amount }}</td>
<td>{{ $drink->calories }}</td>
<td>{{ $drink->date }}</td>
<td>

<a href="{{ route('drinks.show', $drink->id) }}" class="btn btn-info btn-sm">View</a>

<a href="{{ route('drinks.edit', $drink->id) }}" class="btn btn-warning btn-sm">Edit</a>

<form action="{{ route('drinks.destroy', $drink->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')
<button class="btn btn-danger btn-sm">Delete</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>

{{ $drinks->links() }}

</div>
</body>
</html>