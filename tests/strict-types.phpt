--TEST--
https://github.com/antecedent/patchwork/issues/79

--SKIPIF--
<?php version_compare(PHP_VERSION, "7.0", ">=")
      or die("skip because strict types were only introduced in PHP 7") ?>

--FILE--
<?php

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);
error_reporting(E_ALL | E_STRICT);

require __DIR__ . "/../Patchwork.php";
require __DIR__ . "/includes/StrictTypes.php";

?>
===DONE===

--EXPECT--
===DONE===
