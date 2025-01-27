--TEST--
phpunit --log-junit php://stdout _files/StatusTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--log-junit';
$_SERVER['argv'][] = 'php://stdout';
$_SERVER['argv'][] = \realpath(__DIR__ . '/../../basic/unit/StatusTest.php');

require_once __DIR__ . '/../../bootstrap.php';

PHPUnit\TextUI\Application::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.FEISRW.FEISRW                                                    14 / 14 (100%)

Time: %s, Memory: %s

There were 2 errors:

1) PHPUnit\SelfTest\Basic\StatusTest::testError
RuntimeException:%w

%sStatusTest.php:%d

2) PHPUnit\SelfTest\Basic\StatusTest::testErrorWithMessage
RuntimeException: error with custom message

%sStatusTest.php:%d

--

There were 2 warnings:

1) PHPUnit\SelfTest\Basic\StatusTest::testWarning

%sStatusTest.php:%d

2) PHPUnit\SelfTest\Basic\StatusTest::testWarningWithMessage
warning with custom message

%sStatusTest.php:%d

--

There were 2 failures:

1) PHPUnit\SelfTest\Basic\StatusTest::testFailure
Failed asserting that false is true.

%sStatusTest.php:%d

2) PHPUnit\SelfTest\Basic\StatusTest::testFailureWithMessage
failure with custom message
Failed asserting that false is true.

%sStatusTest.php:%d

--

There were 2 risky tests:

1) PHPUnit\SelfTest\Basic\StatusTest::testRisky
This test did not perform any assertions

%sStatusTest.php:%d

2) PHPUnit\SelfTest\Basic\StatusTest::testRiskyWithMessage
This test did not perform any assertions

%sStatusTest.php:%d

ERRORS!
Tests: 14, Assertions: 4, Errors: 2, Failures: 2, Warnings: 2, Skipped: 2, Incomplete: 2, Risky: 2.
<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="PHPUnit\SelfTest\Basic\StatusTest" file="%sStatusTest.php" tests="14" assertions="4" errors="4" warnings="2" failures="2" skipped="4" time="%f">
    <testcase name="testSuccess" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f"/>
    <testcase name="testFailure" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f">
      <failure type="PHPUnit\Framework\ExpectationFailedException">PHPUnit\SelfTest\Basic\StatusTest::testFailure%A
Failed asserting that false is true.
%A
%sStatusTest.php:%d</failure>
    </testcase>
    <testcase name="testError" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <error type="RuntimeException">PHPUnit\SelfTest\Basic\StatusTest::testError%A
RuntimeException:%w
%A
%sStatusTest.php:%d</error>
    </testcase>
    <testcase name="testIncomplete" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testSkipped" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testRisky" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <error type="PHPUnit\Framework\RiskyTestError">PHPUnit\SelfTest\Basic\StatusTest::testRisky%A
This test did not perform any assertions
%A
%sStatusTest.php:%d</error>
    </testcase>
    <testcase name="testWarning" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <warning type="PHPUnit\Framework\Warning">PHPUnit\SelfTest\Basic\StatusTest::testWarning%A
%sStatusTest.php:%d</warning>
    </testcase>
    <testcase name="testSuccessWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f"/>
    <testcase name="testFailureWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f">
      <failure type="PHPUnit\Framework\ExpectationFailedException">PHPUnit\SelfTest\Basic\StatusTest::testFailureWithMessage%A
failure with custom message
Failed asserting that false is true.
%A
%sStatusTest.php:%d</failure>
    </testcase>
    <testcase name="testErrorWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <error type="RuntimeException">PHPUnit\SelfTest\Basic\StatusTest::testErrorWithMessage%A
RuntimeException: error with custom message
%A
%sStatusTest.php:%d</error>
    </testcase>
    <testcase name="testIncompleteWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testSkippedWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testRiskyWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <error type="PHPUnit\Framework\RiskyTestError">PHPUnit\SelfTest\Basic\StatusTest::testRiskyWithMessage%A
This test did not perform any assertions
%A
%sStatusTest.php:%d</error>
    </testcase>
    <testcase name="testWarningWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <warning type="PHPUnit\Framework\Warning">PHPUnit\SelfTest\Basic\StatusTest::testWarningWithMessage%A
warning with custom message
%A
%sStatusTest.php:%d</warning>
    </testcase>
  </testsuite>
</testsuites>
