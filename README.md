Li3 Bootstrap Users
============

This library is designed for use with Lithium Bootstrap.
It will provide a basic user system for your application.

It requires MongoDB for the user storage and session handling.
Installation instructions below assume you have MongoDB installed.

### Dependencies

This library relies on li3_access:
https://github.com/tmaiaroto/li3_access

### Quick Installation

Ensure you have Lithium Bootstrap:
https://github.com/tmaiaroto/li3_bootstrap
OR, at least, the core library installed to your app:
https://github.com/tmaiaroto/li3b_core

Run the Lithium console command:
li3 bootstrap install li3b_users

This will clone this repository into your libraries folder
and configure it for use automatically.

### Installation The Hard Way

If you didn't start with the example Lithium Bootstrap project:
https://github.com/tmaiaroto/li3_bootstrap

Then ensure you have Lithium Bootstrap core library:
https://github.com/tmaiaroto/li3b_core

Ensure it is added to your main application.
Also ensure you have all of the dependencies (li3_flash_message, etc.)
and ensure they have been added with Libraries::add() as well.

Clone this repository into your libraries directory (or submodule)
and ensure you also have li3_access:
https://github.com/tmaiaroto/li3_access

Ensure both li3_access and li3b_users have been added to your
main application with Libraries::add().

You should be good to go.
You may want to play around with the routing though.