nmDoctrineGuardStuffPlugin
==========================

nmDoctrineGuardStuffPlugin is yet another plugin extending sfDoctrineGuardPlugin.

This is the code that I use, know and like. It was initially based on the code of [symfonians](http://symfonians.org).

New versions may not be backwards compatible.

Installation
------------

If you are not using git in your project:

    $ cd /path/to/symfony/project
    $ git clone git://github.com/nacmartin/nmDoctrineGuardStuffPlugin.git plugins/nmDoctrineGuardStuffPlugin.git

If you are already using git:

    $ cd /path/to/symfony/project
    $ git submodule add git://github.com/nacmartin/nmDoctrineGuardStuffPlugin.git plugins/nmDoctrineGuardStuffPlugin.git
    $ git submodule update --init
    $ git commit -a -m "added nmDoctrineGuardStuffPlugin submodule"

Configuration
-------------

Enable it in your `ProjectConfiguration.class.php`:

    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('nmDoctrineGuardStuffPlugin');

And in `app/APPNAME/config/setting.yml`:
    all:
      .setting:
        enabled_modules:        [default, sfGuardAuth, nmGuardStuff]
        login_module:           nmGuardStuff
        login_action:           signin  

in `lib/model/doctrine/sfDoctrineGuardPlugin/sfGuardUser.class.php`, make the class inherit from `nmGuardStuffUser`
    class sfGuardUser extends nmGuardStuffUser

cross your fingers

License
-------

nmDoctrineGuardStuffPlugin is licensed under [CC-by-sa-3.0](http://creativecommons.org/licenses/by-sa/3.0/) license.

