<!DOCTYPE html>
<html>
<head>
    <title>Edit Drink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<h2 class="text-primary mb-4">✏️ Edit Drink</h2>

<form action="{{ route('drinks.update', $drink->id) }}" method="POST" class="card p-4 shadow">
@csrf
@method('PUT')

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="{{ $drink->name }}" class="form-control">
</div>

<div class="mb-3">
<label>Type</label>
<input type="text" name="type" value="{{ $drink->type }}" class="form-control">
</div>

<div class="mb-3">
<label>Amount</label>
<input type="number" name="amount" value="{{ $drink->amount }}" class="form-control">
</div>

<div class="mb-3">
<label>Calories</label>
<input type="number" name="calories" value="{{ $drink->calories }}" class="form-control">
</div>

<div class="mb-3">
<label>Date</label>
<input type="date" name="date" value="{{ $drink->date }}" class="form-control">
</div>

<button class="btn btn-primary">Update</button>
<a href="{{ route('drinks.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>
</body>
</html>