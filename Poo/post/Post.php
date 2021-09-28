<?php

class Post{

    //atribustos
    public int $likes = 0;
    public array $comentario = [];
    public string $author;

    //construtor

    // methodos
    /**
     * Post constructor.
     * @param int $likes
     * @param array $comentario
     * @param string $author
     */
    public function __construct(int $likes, array $comentario, string $author)
    {
        $this->likes = $likes;
        $this->comentario = $comentario;
        $this->author = $author;
    }

    public function aumentarLikes()    {
        echo "abc";
        $this->likes++;
    }

    /**
     * @param int $likes
     */
    public function setLikes(int $likes): void
    {
        $this->likes = $likes;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @param array $comentario
     */
    public function setComentario(array $comentario): void
    {
        $this->comentario = $comentario;
    }

}
//estciar objetos
$post1 = new Post(25,['assakdlkdffldklf'],'Jose');
$post2 = new Post(10,['afkjakljflkfaklfmjlak'],'filho');

echo "Post 1 : ".$post1->likes." Autho ".$post1->author."<hr>";
echo "Post 1 : ".$post2->likes;
//var_dump($post1);