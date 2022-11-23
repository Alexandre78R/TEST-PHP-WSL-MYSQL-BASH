Les functions 
===

Static on stock dans la function 

Global pour dispatch par tous 

## Apelle d'une function dans par une variable :

- Exemple  :

```PHP
    function teacher ()
    {
        echo "I am a Teacher";
    };
    
    function student ($name)
    {
        echo "I am a student and my name is $name";
    };
    $func_teacher = 'teacher';
    $func_student = 'student';
    $func_teacher();
    $func_student("ALex");
```

```PHP
I am a TeacherI am a student and my name is ALex //result
```
## Prédifinir une varaible dans une function par défault 

```PHP
    function say_my_name ($name = "Toto")
    {
        echo "My name is $name !";
    };
```