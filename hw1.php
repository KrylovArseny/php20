
<?php
class Product {
public $id; //состояние: Своййства класса: id товара, его картинка, заголовок и описание
public $img;
public $title;
public $content;
function __construct($id, $img, $title, $content){
$this->id = $id;
$this->img = $img;
$this->title = $title;
$this->content = $content;
}
// Метод для вывода товара
function view(){
echo "<div><div><div>$this->img</div><h1>$this->title</h1><p>$this->content</p></div></div><hr>";
}
}

class Sale extends Product{
    public $sale;
    function __construct($id, $img, $sale, $title, $content){
        $this->id = $id;
        $this->img = $img;
        $this->sale = $sale;
        $this->title = $title;
        $this->content = $content;
        }
    function view(){
        echo "<div><div><div>$this->img</div><h1>$this->title</h1><p><b>$this->sale</b></p><p>$this->content</p></div></div><hr>";
        }
}

$a = new Product(1, '1img', 'Новый товар', 'Какой-то текст!');
$a->view();
$b = new Sale(1, '1img', '-20%','Новый товар', 'Какой-то текст!');
$b->view();
