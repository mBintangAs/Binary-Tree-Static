<?php

$jumlahBtree = $_POST['jumlah'];
$level = $_POST['level'];
$btree = new btree($level);
$data = [];
for ($i = 1; $i <= $jumlahBtree; $i++) {
    $data[$i] = $_POST["data$i"];
    $btree->insert($_POST["data$i"]);
}
class  btree
{
    public $maxsize, $level, $size;
    public $data = [];

    public function __construct($maxlevel)
    {
        $size = 0;
        for ($i = 0; $i <= $maxlevel; $i++) {
            $size += pow(2, $i);
        }
        $this->size = 0;
        $this->level = $maxlevel;
        $this->maxsize = $size;

        for ($i = 0; $i < $size; $i++) {
            $this->data[$i] = 0;
        }
    }
    public function isFull()
    {
        return $this->size >= $this->maxsize;
    }

    public function insert($info)
    {
        if ($this->isFull()) {

            return;
        }
        if ($this->data[0] == 0) {
            $this->data[0] = $info;
            $this->size++;
        } else {
            for ($i = 0; $i < $this->maxsize; $i++) {
                if ($this->data[$i] < $info && $this->data[$i] != 0) {
                    $tes = ($i * 2) + 2;
                    if ($this->data[$tes] == 0) {
                        $this->data[$tes] = $info;
                        $this->size++;
                        return;
                    }
                } else if ($this->data[$i] > $info && $this->data[$i] != 0) {
                    $tes = ($i * 2) + 1;
                    if ($tes > $this->maxsize) {
                        return;
                    }
                    if ($this->data[$tes] == 0) {
                        $this->data[$tes] = $info;
                        $this->size++;
                        return;
                    }
                }
            }
        }
    }

    public function preOrder($item)
    {
        if ($item < $this->maxsize) {
            echo '<td><h3>' . $this->data[$item] . '</h3></td>';
            if ($this->data[$item] != 0) {
                $this->preOrder($item * 2 + 1);
                $this->preOrder(($item * 2) + 2);
            }
        }
    }

    public function inOrder1($item)
    {
        if ($item < $this->maxsize) {
            $this->inOrder1($item * 2 + 1);
            if ($this->data[$item] != 0) {
                echo '<td><h3>' . $this->data[$item] . '</h3></td>';
                $this->inOrder1(($item * 2) + 2);
            }
        }
    }


    public function postOrder($item)
    {
        if ($item >= $this->maxsize) {
            return;
        }
        if ($this->data[$item] != 0) {
            # code...
            $this->postOrder($item * 2 + 1);
            $this->postOrder(($item * 2) + 2);
            echo '<td><h3>' . $this->data[$item] . '</h3></td>';
        }
    }
    public function in_order()
    {
        if ($this->data[0] != 0) {
            $this->inOrder1(0);
        }
    }

    public function pre_order()
    {
        if ($this->data[0] != 0) {
            $this->preOrder(0);
        }
    }
    public function post_order()
    {
        if ($this->data[0] != 0) {
            $this->postOrder(0);
        }
    }

    public function display()
    {
        for ($i = 0; $i < $this->maxsize; $i++) {
            return $this->data[$i];
        }
    }
}



?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Binary tree demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col ">
                <h1>Normal Display input : <?php foreach ($data as $item) echo $item . ' '; ?> </h1>

            </div>

        </div>
        <table class="table  table-bordered"><?php $no = 0; ?>
            <tr>
                <?php foreach ($btree->data as $item) { ?>
                    <td><?= $no++ ?></td>
                <?php } ?>
            </tr>
            <tr>
                <?php for ($i = 0; $i < $btree->maxsize; $i++) {
                ?>
                    <td>
                        <h3><?= $btree->data[$i]; ?></h3>
                    </td>
                <?php } ?>
            </tr>

        </table>
        <div class="col ">
            <h1>inorder Display </h1>

        </div>


        <table class="table table-bordered"><?php $no = 0; ?>
            <tr>
                <?php foreach ($data as $item) { ?>
                    <td><?= $no++ ?></td>
                <?php } ?>
            </tr>
            <tr>
                <?php $btree->in_order() ?>
            </tr>

        </table>
        <div class="col ">
            <h1>preorder Display </h1>

        </div>


        <table class="table table-bordered"><?php $no = 0; ?>
            <tr>
                <?php for ($i = 0; $i < $jumlahBtree; $i++) { ?>
                    <td><?= $no++ ?></td>
                <?php } ?>
            </tr>
            <tr>
                <?php $btree->pre_order() ?>
            </tr>

        </table>
        <div class="col ">
            <h1>postorder Display </h1>

        </div>


        <table class="table table-bordered"><?php $no = 0; ?>
            <tr>
                <?php for ($i = 0; $i < $jumlahBtree; $i++) { ?>
                    <td><?= $no++ ?></td>
                <?php } ?>
            </tr>
            <tr>
                <?php $btree->post_order() ?>
            </tr>

        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>