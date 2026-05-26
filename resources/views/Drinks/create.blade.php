<!DOCTYPE html>
<html>
<head>
    <title>Add Drink</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

<h2 class="text-primary mb-4">➕ Add Drink</h2>

<form action="{{ route('drinks.store') }}" method="POST" class="card p-4 shadow">
@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Type</label>
<input type="text" name="type" class="form-control">
</div>

<div class="mb-3">
<label>Amount (ml)</label>
<input type="number" name="amount" class="form-control">
</div>

<div class="mb-3">
<label>Calories</label>
<input type="number" name="calories" class="form-control">
</div>

<div class="mb-3">
<label>Date</label>
<input type="date" name="date" class="form-control">
</div>

<button class="btn btn-primary">Save</button>
<a href="{{ route('drinks.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>
</body>
</html>