function foo(callable $callback)
{
  $callback();
}

function bar()
{
  echo 'Hello World';
}

foo('bar');
