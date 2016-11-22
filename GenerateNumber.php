<?php

/*
 * Soda In Mind - Full Stack Developer - Challenge
 * 3. In the programming language(for backend) that is specified in this job's description, write simple, commented code for a function (or method) that takes a variable name as parameter.
 * 4. Generate a random number between 6 and 15 and return the result in this format: "Name GeneratedNumber". Eg: "Rahul 11"
 * 5. Commit and push this code to your repository.
 * Author: Jayalakshmi Ramasamy
 * Date: 22/11/2016
 */

// Programming Language: PHP
// GenerateNumber function with variable $name as parameter
// Returns the $name concatenate with random number between 6 and 15. Ex. "Rahul 11" if $name = 'Rahul'
function GenerateNumber($name) {
    // Create random number using rand() php function and concatenate it with $name.
    return $name . ' ' . rand(6, 15);
}

// Call GenerateNumber() for $_GET['name']
if (!empty($name = filter_input(INPUT_GET, 'name')) && preg_match('/^[a-zA-Z ]*$/', $name)) {
    echo GenerateNumber(trim($name));
} else {
    echo "Warning: please give valid name. Ex: GenerateNumber.php?name=Rahul";
}
?>