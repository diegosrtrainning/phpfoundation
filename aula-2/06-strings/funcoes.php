<?php
    echo strlen("Hello world!"); // 12

    echo str_word_count("Hello world!"); // 2

    echo strrev("Hello world!"); // !dlrow olleH

    echo var_dump(strpos("Hello world!", "Hello")); // 0
    echo var_dump(strpos("Hello world!", "hello")); // false
    echo var_dump(strpos("Hello world!", "world")); // 6

    echo var_dump(strpos("Hello world!", "ffff")); // false

    echo str_replace("world", "Dolly", "Hello world!"); // Hello Dolly!
    echo str_replace("world", "Dolly", "Hello world world world!"); // Hello Dolly Dolly Dolly!
    echo str_replace("World", "Dolly", "Hello world world world!"); // Hello world world world!
?>