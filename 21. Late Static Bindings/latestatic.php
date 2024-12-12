<?php 

class StringMutator{
    public static function bold(string $word) : string{
        return sprintf("<b>%s</b>",$word);
    }
    public static function italic(string $word) : string{
        return sprintf("<b>%s</b>",$word);
    }
    public static function boldItalic(string $word) : string{
        return static::bold(static::italic($word));
    }
}

class ChildStringMutator extends StringMutator{
    public static function bold(string $word) : string{
        return sprintf("<b>LATE STATIC BINDINS</b>",$word);
    }
}

echo ChildStringMutator::boldItalic("Belajar"); echo PHP_EOL;
echo StringMutator::boldItalic("Belajar");