# Laravel Alpha Test

This project is to ensure anyone working is having basic idea about testing and phpunit. In order to do the same you simply need to:
1. Clone the project
2. Run ```composer install```
3. Run ```php artisan test```


Once you run the **test** it will show that there are certain cases failing.
- LevelZeroTest (tests/Feature/LevelZeroTest.php)
  - test_example
- LevelOneTest (tests/Feature/LevelOneTest.php)
  - test_standard_user_signature
  - test_user_signature

> So these needs to pass by changing the code not the test cases.
