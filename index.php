<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        echo "hello out there ... i live!!";

        $students = array();

        // adding first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email("home","john@doe.com");
        $first->add_email("work","jdoe@mcdonalds.com");
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students["j123"] = $first;

        // adding second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email("home","albert@braniacs.com");
        $second->add_email("work1","a_einstein@bcit.ca");
        $second->add_email("work2","albert@physics.mit.edu");
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students["a456"] = $second;

        $me = new Student();
        $me->surname = "Tsang";
        $me->first_name = "Eric";
        $me->add_email("home","surplus.et@gmail.com");
        $me->add_email("work","EricYingTsang@gmail.com");
        $me->add_grade(88);
        $me->add_grade(90);
        $me->add_grade(87);
        $me->add_grade(95);
        $students["A00841554"] = $me;

        ksort($students);

        foreach($students as $student)
        {
            echo $student->toString();
        }
        ?>
    </body>
</html>
