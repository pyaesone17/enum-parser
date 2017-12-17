The repository to explain how enum parser object work

Array Style enum url

/array/form
/array/show
/array/jobs

Config Style enum url

/config/form
/config/show
/config/jobs


Enum Parser Style  url

/object/form
/object/show
/object/jobs


Api

http://api.enum-parser.test/arrays/user
http://api.enum-parser.test/config/user
http://api.enum-parser.test/object/user


All of the Api transformation Object

app/Http/Resources/


All of the enum class

app/Enums/


All of the enum parser

app/EnumParser/


Validation file

app/Rules/ExperienceLevelValidation


Run test for validation

vendor/bin/phpunit


Test File

tests/Feature/EnumValidationTest