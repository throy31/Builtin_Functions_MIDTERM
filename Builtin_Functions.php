<?php
$string = "Holy Angel University";
$name = "Paolo Garcia";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Built-in Functions</title>
</head>
<body>
    <table>
        <tr>
            <th>Functions</th>
            <th>Result</th>
        </tr>

        <tr>
            <th colspan="2">Changing the case of characters</th>
        </tr>
        <tr>
            <td>Lowercase</td>
            <td><?php echo strtolower($string); ?></td>
        </tr>
        <tr>
            <td>Uppercase</td>
            <td><?php echo strtoupper($string); ?></td>
        </tr>
        <tr>
            <td>Capitalize</td>
            <td><?php echo ucwords($string); ?></td>
        </tr>

        <tr>
            <th colspan="2">Counting Characters and Words</th>
        </tr>
        <tr>
            <td>Number of Characters</td>
            <td><?php echo strlen($name); ?></td>
        </tr>
        <tr>
            <td>Number of Words</td>
            <td><?php echo str_word_count($name); ?></td>
        </tr>

        <tr>
            <th colspan="2">Removing and Replacing Characters</th>
        </tr>
        <tr>
            <td>Remove Whitespace from left</td>
            <td><?php echo ltrim($string); ?></td>
        </tr>
        <tr>
            <td>Remove Whitespace from right</td>
            <td><?php echo rtrim($string); ?></td>
        </tr>
        <tr>
            <td>Remove Whitespace from left and right</td>
            <td><?php echo trim($string); ?></td>
        </tr>
        <tr>
            <td>String replace</td>
            <td><?php echo str_replace("Angel", "Holy", $string); ?></td>
        </tr>
        <tr>
            <td>String ireplace</td>
            <td><?php echo str_ireplace("angel", "Holy", $string); ?></td>
        </tr>
        <tr>
            <td>String repeat</td>
            <td><?php echo str_repeat($string . " ", 2); ?></td>
        </tr>

        <tr>
            <th colspan="2">Other built-in functions</th>
        </tr>
        <tr>
            <td>Substring</td>
            <td><?php echo substr($string, 0, 5); ?></td>
        </tr>
        <tr>
            <td>Position of 'Angel'</td>
            <td><?php echo strpos($string, "Angel"); ?></td>
        </tr>
        <tr>
            <td>Contains 'University'</td>
            <td><?php echo str_contains($string, "University") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <td>Reverse String</td>
            <td><?php echo strrev($string); ?></td>
        </tr>
        <tr>
            <td>Shuffle String</td>
            <td><?php echo str_shuffle($string); ?></td>
        </tr>
        <tr>
            <td>First Character Uppercase</td>
            <td><?php echo ucfirst($string); ?></td>
        </tr>
        <tr>
            <td>Starts With</td>
            <td><?php echo str_starts_with($string, "Holy") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <td>Ends With</td>
            <td><?php echo str_ends_with($string, "University") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <td>Ends With</td>
            <td><?php echo str_ends_with($string, "University") ? "True" : "False"; ?></td>
        </tr>
        <tr>
            <td>Compare Strings</td>
            <td><?php echo strcmp("HAU", "HAU"); ?></td>
        </tr>
    </table>
</body>
</html> 