<?php

class Post
{
	private $title; 
	private $content;

	public function __construct(string $title, string $content)
	{
		$this->title = $title;
		$this->content = $content;
	}

	public function getTitle(): string
	{
		return $this->title;
	}

	public function getContent(): string
	{
		return $this->content;
	}
}

trait StringMutator
{
	public function bold(string $word): string
	{
		return sprintf('<b>%s</b>', $word);
	}

	public function italic(string $word): string
	{
		return sprintf('<i>%s</i>', $word);
	}

	public function boldItalic(string $word): string
	{
		return $this->italic($this->bold($word));
	}
}

trait StringMutatorUnderline {
    public function underlineText(string $word): string{
        return sprintf("<u>%s</u>",$word);
    }
}

trait StringMutatorParagraph{
    public function paragraph(string $word): string{
        return sprintf("<p>%s</p>",$word);
    }
}

class PostMutator
{

	use StringMutator;
    use StringMutatorParagraph;
    use StringMutatorUnderline;

    private $post;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function boldTitle(): string
	{
		return $this->bold($this->post->getTitle());
	}

    public function underlininAJa():string{
        return $this->underlineText($this->post->getContent());
    }
}

$postMutator = new PostMutator(new Post('Judul', 'Ini contoh content dari berita.'));
echo $postMutator->underlineText("Hellow rizal");
echo $postMutator->paragraph("Helloo rizal lagi");
echo $postMutator->underlininAJa();
echo $postMutator->boldTitle();