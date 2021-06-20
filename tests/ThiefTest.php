<?php declare(strict_types=1);

// ThiefTest.php

require_once dirname(__DIR__) . '/lib/character.php';
require_once dirname(__DIR__) . '/lib/prefs.php';
require_once dirname(__DIR__) . '/lib/mins.php';

use PHPUnit\Framework\TestCase;

final class ThiefTest extends TestCase
{
  public function testCanBeCreated(): void
  {
    require dirname(__DIR__) . '/lib/prefs.php';
    require dirname(__DIR__) . '/lib/mins.php';
    $class      = "thief";
    $mode       = 'short';  // $mode can currently be 'full' or 'short'
    $name       = "Sally";
    $race       = 'human';
    $gender     = 'female';
    $character  = new Character($class, $prefs, $mins, $race, $gender, $name);

    $this->assertInstanceOf(Character::class, $character);
  }


  public function testSetAttributes(): void
  {
    require dirname(__DIR__) . '/lib/prefs.php';
    require dirname(__DIR__) . '/lib/mins.php';
    $class      = "thief";
    $mode       = 'short';  // $mode can currently be 'full' or 'short'
    $name       = "Sally";
    $race       = 'human';
    $gender     = 'female';
    $character  = new Character($class, $prefs, $mins, $race, $gender, $name);

    $this->assertEquals('Sally',    $character->name);
    $this->assertEquals('thief',  $character->class);
    $this->assertEquals('human',    $character->race);
    $this->assertEquals('female',   $character->gender);
  }

  public function testSetThiefStats(): void
  {
    require dirname(__DIR__) . '/lib/prefs.php';
    require dirname(__DIR__) . '/lib/mins.php';
    $class      = "thief";
    $mode       = 'short';  // $mode can currently be 'full' or 'short'
    $name       = "Sally";
    $race       = 'human';
    $gender     = 'female';
    $character  = new Character($class, $prefs, $mins, $race, $gender, $name);
    
    $this->assertGreaterThan(6,   $character->stats['Strength']);
    $this->assertGreaterThan(6,   $character->stats['Intelligence']);
    $this->assertGreaterThan(3,   $character->stats['Wisdom']);
    $this->assertGreaterThan(9,   $character->stats['Dexterity']);
    $this->assertGreaterThan(6,   $character->stats['Constitution']);
    $this->assertGreaterThan(6,   $character->stats['Charisma']);
  }


}

?>
