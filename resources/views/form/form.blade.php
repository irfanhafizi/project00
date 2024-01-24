<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form action="{{route('form.submit')}}" method="post">
  @csrf

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" >

  <br>
  <br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" >

  <br>
  <br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" >

  <br>
  <br>

  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
  </select>

  <br>
  <br>

  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="dd/mm/yyyy" >

  <br>
  <br>

  <label for="status">Status:</label>
  <input type="checkbox" id="status" name="status" value="1">
  <label for="status">Active</label>

  <br>
  <br>

  <button type="submit">Submit</button>
</form>


<br>
<br>
<a href="{{route('table.index')}}">Go to table</a>

</body>
</html>