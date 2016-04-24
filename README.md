# Symfony Service Traits #

Collection of traits to make injecting standard Symfony services into classes easy


## Usage ##

To use these service traits, simple include them in the top of your class...

    class MyAwesomeClass
    {
        use TranslatorAwareTrait;
        
        // ...
    }
    

## Traits Included ##

The package contains the following traits

* MailerAwareTrait
* TemplatingAwareTrait
* TranslatorAwareTrait
* ...