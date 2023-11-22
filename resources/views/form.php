<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/inscription" method="post"> 
    
<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">

@csrf

<div class="form-group">

    <label for="name">Name:</label>

    <input type="text" class="form-control" name="name" />

</div>

<div class="form-group">

    <label for="email">Email:</label>

    <input type="text" class="form-control" name="email" />

</div>

<div class="form-group">

    <label for="phone">Phone:</label>

    <input type="text" class="form-control" name="phone" />

</div>



<div class="form-group">

    <label for="section">Section :</label>



    <select name="section" style="width: 100%;">

        <!-- Les options -->

        <option value="Math">Math</option>

        <option value="Svt">SVT</option>

        <option value="Physique">Physique</option>

        <option value="Informatique">Informatique</option>

    </select>

</div>



<div class="form-group">

    <label for="image">Image :</label>

    <input type="file" name="image" class="form-control">

</div>

<button type="submit" class="btn btn-success" style="float:right; width:300px;">Add Student</button>

</form>
</form>
</body>
</html>