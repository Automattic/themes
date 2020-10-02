<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/index.php';

use PHPUnit\Framework\TestCase;
use PhpcsChanged\DiffLineMap;

final class DiffLineMapTest extends TestCase {
	public function testGetFileNameFromDiff() {
		$diff = <<<EOF
Index: review-stuck-orders.php
===================================================================
--- bin/review-stuck-orders.php	(revision 183265)
+++ bin/review-stuck-orders.php	(working copy)
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$name = DiffLineMap::getFileNameFromDiff($diff);
		$this->assertEquals('bin/review-stuck-orders.php', $name);
	}

	public function testGetLineNumberForSimpleAdd() {
		$diff = <<<EOF
Index: review-stuck-orders.php
===================================================================
--- bin/review-stuck-orders.php	(revision 183265)
+++ bin/review-stuck-orders.php	(working copy)
@@ -17,6 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$map = DiffLineMap::fromUnifiedDiff($diff);
		$this->assertNull($map->getOldLineNumberForLine(20));
		$this->assertEquals(17, $map->getOldLineNumberForLine(17));
		$this->assertEquals(20, $map->getOldLineNumberForLine(21));
		$this->assertEquals(21, $map->getOldLineNumberForLine(22));
	}

	public function testGetLineNumberForAllRemovalDiff() {
		$diff = <<<EOF
--- group.orig	2014-02-04 19:38:20.800277081 +0100
+++ group	2014-02-04 19:38:33.366452009 +0100
@@ -1,5 +1,4 @@
 root:x:0:root
-bin:x:1:root,bin,daemon
 daemon:x:2:root,bin,daemon
 sys:x:3:root,bin,user1
 adm:x:4:root,daemon
@@ -7,8 +6,6 @@
 disk:x:6:root
 lp:x:7:daemon,user1,user2
 mem:x:8:
-kmem:x:9:
-wheel:x:10:root,user1
 ftp:x:11:
 mail:x:12:
 uucp:x:14:
@@ -17,8 +14,6 @@
 locate:x:21:
 rfkill:x:24:
 smmsp:x:25:
-http:x:33:
-games:x:50:user1,user2
 lock:x:54:
 uuidd:x:68:
 network:x:90:user1,user2
EOF;
		$map = DiffLineMap::fromUnifiedDiff($diff);
		$this->assertEquals(1, $map->getOldLineNumberForLine(1));
		$this->assertEquals(3, $map->getOldLineNumberForLine(2));
		$this->assertEquals(4, $map->getOldLineNumberForLine(3));
		$this->assertEquals(7, $map->getOldLineNumberForLine(6));
		$this->assertEquals(12, $map->getOldLineNumberForLine(9));
		$this->assertEquals(14, $map->getOldLineNumberForLine(11));
		$this->assertEquals(22, $map->getOldLineNumberForLine(17));
	}

	public function testGetLineNumberForMixedDiff() {
		$diff = <<<EOF
--- lao	2002-02-21 23:30:39.942229878 -0800
+++ tzu	2002-02-21 23:30:50.442260588 -0800
@@ -1,7 +1,6 @@
-The Way that can be told of is not the eternal Way;
-The name that can be named is not the eternal name.
 The Nameless is the origin of Heaven and Earth;
-The Named is the mother of all things.
+The named is the mother of all things.
+
 Therefore let there always be non-being,
   so we may see their subtlety,
 And let there always be being,
@@ -9,3 +8,6 @@
 The two are the same,
 But after they are produced,
   they have different names.
+They both may be called deep and profound.
+Deeper and more profound,
+The door of all subtleties!
EOF;
		$map = DiffLineMap::fromUnifiedDiff($diff);
		$this->assertEquals(3, $map->getOldLineNumberForLine(1));
		$this->assertNull($map->getOldLineNumberForLine(2));
		$this->assertNull($map->getOldLineNumberForLine(3));
		$this->assertEquals(5, $map->getOldLineNumberForLine(4));
		$this->assertEquals(6, $map->getOldLineNumberForLine(5));
		$this->assertEquals(9, $map->getOldLineNumberForLine(8));
		$this->assertEquals(10, $map->getOldLineNumberForLine(9));
		$this->assertNull($map->getOldLineNumberForLine(11));
		$this->assertNull($map->getOldLineNumberForLine(12));
		$this->assertNull($map->getOldLineNumberForLine(13));
	}

	public function testGetLineNumberForDiffWithOriginalAndNewErrorsOnSameLines() {
		$diff = <<<EOF
Index: review-stuck-orders.php
===================================================================
--- bin/review-stuck-orders.php	(revision 183265)
+++ bin/review-stuck-orders.php	(working copy)
@@ -17,7 +17,7 @@
 use Billing\Purchases\Order;
 use Billing\Services;
 use Billing\Ebanx;
-use Barfoo;
+use Foobar;
 use Billing\Emergent;
 use Billing\Monetary_Amount;
 use Stripe\Error;
EOF;
		$map = DiffLineMap::fromUnifiedDiff($diff);
		$this->assertNull($map->getOldLineNumberForLine(20));
	}

	public function testGetLineNumberOutsideOfHunks() {
		$diff = <<<EOF
--- lao	2002-02-21 23:30:39.942229878 -0800
+++ tzu	2002-02-21 23:30:50.442260588 -0800
@@ -1,7 +1,6 @@
-The Way that can be told of is not the eternal Way;
-The name that can be named is not the eternal name.
 The Nameless is the origin of Heaven and Earth;
-The Named is the mother of all things.
+The named is the mother of all things.
+
 Therefore let there always be non-being,
   so we may see their subtlety,
 And let there always be being,
@@ -9,3 +8,6 @@
 The two are the same,
 But after they are produced,
   they have different names.
+They both may be called deep and profound.
+Deeper and more profound,
+The door of all subtleties!
EOF;
		$map = DiffLineMap::fromUnifiedDiff($diff);
		$this->assertEquals(8, $map->getOldLineNumberForLine(7));
		$this->assertEquals(12, $map->getOldLineNumberForLine(14));
		$this->assertEquals(13, $map->getOldLineNumberForLine(15));
		$this->assertEquals(15, $map->getOldLineNumberForLine(17));
	}
}
