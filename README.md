# PHP Silent Division by Zero

This repository demonstrates a common yet often overlooked error in PHP: silent division by zero.  Division by zero typically results in a fatal error, halting script execution. However, under certain circumstances, PHP might not explicitly throw an error, leading to unpredictable results or crashes.

The `bug.php` file contains a function that divides by zero without error handling.  The `bugSolution.php` demonstrates how to solve this using proper error handling.