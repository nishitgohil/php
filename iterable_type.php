function printIterable(iterable $myIterable)
{
  foreach ($myIterable as $item) {
    echo $item;
  }
}

$arr = ['apple', 'banana', 'cherry'];
printIterable($arr);
