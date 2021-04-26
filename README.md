# My first PHP
Use your PHP server as storage for your browser-only device. This PHP project is vulnerable to [CWE-434](https://cwe.mitre.org/data/definitions/434.html) and should NOT be run in a server accessible by someone else. You can view, upload and delete files in the project ./uploads directory. The favicon.ico original GIMP file comes inside ./uploads directory.

I did this project because I wanted to know how frontend and backend work together. Now I think the web is the future.

# I just want to run the code
## Easy method
1. Install XAMPP

1. Clone this repository and put the files inside your XAMPP htdocs directory

1. Open XAMPP Control Panel and start Apache. You should be able to access in your browser with http://localhost address.

**Warning:** other users in your local network can access too with default Apache configuration in XAMPP, read the vulnerability.

## The hard way
If you want to use the PHP Development Server, you need to enable the fileinfo extension, and run, for example:

```bash
php -S localhost:4000 -t ~/the/new/directory/after/you/cloned/this
```

# Credits
[@mabel03](https://github.com/mabel03) for `<hr>` tag and Delete button placement in filelist.php