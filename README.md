# Symfony micro
Symfony micro application based on ```\Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait```

[Symfony as a Microframework](http://symfony.com/blog/new-in-symfony-2-8-symfony-as-a-microframework)


# What's included
 - Symfony v3.0.*
 - Doctrine 2.5
 - Generator-bundle
 - Uikit
 - FontAwesome

## Small benchmark
```
-> % siege -b -t30S -c 20 http://symfonymicro.local/
** SIEGE 3.0.8
** Preparing 20 concurrent users for battle.
The server is now under siege...
Lifting the server siege...      done.

Transactions:                  11252 hits
Availability:                 100.00 %
Elapsed time:                  29.09 secs
Data transferred:               4.79 MB
Response time:                  0.05 secs
Transaction rate:             386.80 trans/sec
Throughput:                     0.16 MB/sec
Concurrency:                   19.96
Successful transactions:       11252
Failed transactions:               0
Longest transaction:            0.12
Shortest transaction:           0.03
```
