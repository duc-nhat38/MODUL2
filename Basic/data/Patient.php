<?php


class Queue
{
    public $list = [];

    public function isEmpty()
    {
        if (count($this->list) === 0) {
            return true;
        }
        return false;
    }
    public function enqueue($name, $code)
    {
        array_push($this->list, ['name' => $name, 'code' => $code]);
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return 'Rỗng';
        } else {
            $result = array_shift($this->list);
            for ($i = 0; $i < count($this->list); $i++) {
                if ($this->list[$i]['code'] < $result['code']) {
                    $this->enqueue($result['name'], $result['code']);
                    $result = array_shift($this->list);
                }
            }
            return "Họ & Tên : ".$result['name']." "."Số ưu tiên : ".$result['code']."<br>";
        }
    }
    public function __toString()
    {
        if ($this->isEmpty()) {
            return 'Đã hết.';
        } else {
            $str = 'Bệnh nhân còn lại :'."<br>";
            foreach ($this->list as $value) {
                $str .= "Họ & Tên : ".$value['name'] ." ". "Số ưu tiên : ".$value['code'] . "<br>";
                
            }
            return $str;
        }
    }
}


$a = new Queue();
$a->enqueue('smith', 5);
$a->enqueue('smath', 3);
$a->enqueue('smeth', 4);
$a->enqueue('smoth', 1);
$a->enqueue('a', 4);
$a->enqueue('b', 1);
echo $a->dequeue();
echo "<br>";
echo $a;
echo "<br>";
echo $a->dequeue();
echo "<br>";
echo $a;