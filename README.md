# LAMP Stack

*Web development like it's 1999: the lost legacy*

Some techniques:

- `<a href="..." target="frame">` for a poor man's SPA
- `<meta http-equiv="refresh" content="30">` for continuously updating content
- link/redirect to anchor tag, to scroll to the right position (e.g. after editing a message)
    - usable with :focus CSS pseudo-class
- pagination instead of infinite scrolling (with anchor link to scroll to the right position)
- redirect after form post
    - https://en.wikipedia.org/wiki/Post/Redirect/Get
- form submit buttons can have a name & value
    - https://www.w3schools.com/tags/att_button_name.asp
- onclick etc. inline event handler
    - https://html.spec.whatwg.org/multipage/webappapis.html#handler-onclick
    - https://htmx.org/essays/right-click-view-source/

Related:

- [HTML First](https://html-first.com/)
- [Philip and Alex's Guide to Web Publishing](https://philip.greenspun.com/panda/)

## Commmands

[Install ddev](https://ddev.com/get-started/) and configure a new project

    brew install ddev/ddev/ddev
    ddev config

Running the project

    ddev start
    open http://lamp-stack.ddev.site
    ddev stop
    ddev poweroff

Show project details

    ddev describe

Go inside image

    ddev ssh

