<?php
class Article {

    // Создадим свойства

    public $title;
    public $text;

// Конструктор родительского класса

    public function __construct($title, $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

}

class News extends Article {

    // Создадим свойство в дочернем классе

    public $news;

    // Конструктор дочернего класса

    public function __construct($title, $text, $news)
    {
        parent::__construct($title, $text);
        $this->news=$news;
    }

// Создадим метод

    public function vieww()
    {
        echo $this->title . $this->text . $this->news;
    }

}

// Конструктор вызывается автоматически при создании объекта

$art = new News('Хорошие ', 'новости, ', 'товарищи!');
$art->vieww();
?>