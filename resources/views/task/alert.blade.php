<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Alert Page</title>
</head>
<body>
  <h1>Todo List</h1>
  <div><span>할일 : </span>{{ $task['task_name'] }}</div>
  <div><span>기한 : </span>{{ $task['due_date'] }}</div>
  <div><span>도구 : </span>{{ $task['comment'] }}</div>
</body>
</html>