<?php

/**
 * represents a student. contains basic properties about a student like first
 *   name, last name, email addresses, grades, and some methods.
 *
 * @author Eric Tsang
 */
class Student
{
    /**
     * instantiates a Student object, and gives it instance variables.
     */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * adds an email to the student's set of emails.
     *
     * @param {String} $which key used to identify the email.
     * @param {String} $address the actual email address.
     */
    function add_email($which, $address)
    {
        $this->emails[$which] = $address;
    }

    /**
     * adds a grade to the student's set of grades.
     *
     * @param {Number} $grade a grade that the student received.
     */
    function add_grade($grade)
    {
        $this->grades[] = $grade;
    }

    /**
     * calculates, and returns the average grade that this student object has.
     *
     * @return {Number} average grade that this student object has.
     */
    function average()
    {
        $total  =0;
        foreach ($this->grades as $grade)
        {
            $total += $grade;
        }
        return $total / count($this->grades);
    }

    /**
     * returns a fancy string describing the student object, and its properties.
     *
     * @return {String} a fancy string describing the student object, and its
     *   properties.
     */
    function toString()
    {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
        {
            $result .= $which . ': '. $what. "\n";
        }
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}

?>
