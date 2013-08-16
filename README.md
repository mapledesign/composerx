# ComposerX

Author: Peter Bowyer <peter@mapledesign.co.uk>
Home: http://github.com/mapledesign/composerx
Install: Via the MODX Package manager
Version: 1.0 beta1

# What does it do?
This Extra allows you to use any of the lovely libraries packaged using [Composer](http://getcomposer.org/) in your MODX project.

# How does it do that?
It integrates Composer's autoloader into MODX via a plugin.

# Why is it useful?
It's useful if you're familiar with a 3rd-party system you want to use within MODX or if you're integrating existing code.

Other extra authors will bind it useful to use as a sub-package (needs more work)

Until we've used it more we aren't entirely sure :) Consider it a proof of concept for now.

*Do show us how you're using it!*

# How to use
Install via the Package Manager, which will set up the plugin for you.

Afterwards, navigate to `core/components/composerx` and edit `composer.json` to include the modules you want to install ([Packagist](https://packagist.org/) is a great source of Composer packages). You can delete the existing (sample) contents of this file.

Then from the command-line run:

    $ php composer.phar update

To use libraries installed using Composer in your snippets/plugins, you need to apply [this patch](https://github.com/modxcms/revolution/pull/557) to MODX. Hopefully it will be included in Revolution 2.3.

# Notes

  * I'd like to put the `vendor` directory in `core/` elsewhere and `composer.json` in the root of the MODX site. This however needs both locations to be writeable, which is not common (or good security practice)
  * The plugin uses the `OnInitCulture` hook, which is the earliest hook I could find in the system.
