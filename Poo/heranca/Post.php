<?php


class Post1
{
    private int  $id;
    private int $likes = 0;


    //set get

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getLikes(): int
    {
        return $this->likes;
    }

    public function setLikes(int $likes): void
    {
        $this->likes = $likes;
    }



}
class Foto extends Post1{
    private $url;

    /**
     * Foto constructor.
     * @param $url
     */
    public function __construct($id)
    {
        $this->setId($id);
    }


    public function getUrl()
    {
        return $this->url;
    }

}
$post = new Foto(2);
//$post->setId(1);
$post->setLikes(11);

echo "Ids: ".$post->getId()." Likees ".$post->getLikes();