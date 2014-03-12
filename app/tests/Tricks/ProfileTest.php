<?php

namespace Tricks;

use Mockery;
use TestCase;

class ProfileTest
extends TestCase
{
  public function tearDown()
  {
      Mockery::close();
  }

  public function testUser()
  {
    $mock = Mockery::mock('Tricks\Profile[belongsTo]');

    $mock
      ->shouldReceive('belongsTo')
      ->atLeast()->once()
      ->with('Tricks\User')
      ->andReturn('mocked');

    $this->assertEquals('mocked', $mock->user());
  }
}