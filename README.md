# Mangosteen

### What is it?

A super lightweight PHP framework to start off any project.

### Who is it for?

Any developer looking to build a dynamic PHP driven service, whether it be a website or an API. It's aimed at medium sized sites that serve dynamic database driven content.

### What libraries are included?

* Smarty (Front end templating)
* MeekroDB (MYSQL interaction)
* SPYC (YAML parser)

### What features are there?

Mangosteen comes with all the basic functions I find myself writing over and over every time I start a PHP project. It's got URL routing built right in so you can have nice URL trees, with '/' separated arguments passed to your functions automatically. Each page can subscribe to multiple stem URIs.

There's a IP whitelist/blacklist built in for testing and development on a per-page basis.

Smarty is integrated to make separating backend and frontend as easy as possible. The YML responder config can be expanded to accomodate more configuration options which you can link to smarty templates, header and footer are default. Templates can be added during handler execution as well of course.

### Development

Mangosteen is WIP, it's constantly under development as I use it for projects and expand it with useful functions. Don't expect feature 'X' to be implemented any time soon, it's meant to be light weight. Feel free to fork it and impement these things yourselves!

If you find a bug please raise an issue, i'll try and fix it ASAP :)