<?php

if (isset($_POST['submit'])) {
    
$uname = $_POST['user'];
$pass = $_POST['password'];

if ($uname=="admin" && $pass=="admin1234") {
    header("Location: app.html");
}
else {
    echo "Error While Loging in";
}
}
?>

<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
 
  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">

  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/form.js"></script>
  <script src="../dist/components/transition.js"></script>

  <style type="text/css">
    body {
        background-position: center;
  background-size: cover;
  background-image: url("https://cdn.wallpapersafari.com/22/83/9eSKJX.jpg");
  min-height: 100%;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
    i.icon.linkedin.in:before {
  content: "\f0e1";
}
i.icon.zoom.in:before {
  content: "\f00e";
}
i.icon.zoom.out:before {
  content: "\f010";
}
i.icon.sign.in:before {
  content: "\f2f6";
}
i.icon.in.cart:before {
  content: "\f218";
}
i.icon.log.out:before {
  content: "\f2f5";
}
i.icon.sign.out:before {
  content: "\f2f5";
}

/* Icons */
i.icon.\35 00px:before {
  content: "\f26e";
}
i.icon.accessible.icon:before {
  content: "\f368";
}
i.icon.accusoft:before {
  content: "\f369";
}
i.icon.address.book:before {
  content: "\f2b9";
}
i.icon.address.card:before {
  content: "\f2bb";
}
i.icon.adjust:before {
  content: "\f042";
}
i.icon.adn:before {
  content: "\f170";
}
i.icon.adversal:before {
  content: "\f36a";
}
i.icon.affiliatetheme:before {
  content: "\f36b";
}
i.icon.algolia:before {
  content: "\f36c";
}
i.icon.align.center:before {
  content: "\f037";
}
i.icon.align.justify:before {
  content: "\f039";
}
i.icon.align.left:before {
  content: "\f036";
}
i.icon.align.right:before {
  content: "\f038";
}
i.icon.amazon:before {
  content: "\f270";
}
i.icon.amazon.pay:before {
  content: "\f42c";
}
i.icon.ambulance:before {
  content: "\f0f9";
}
i.icon.american.sign.language.interpreting:before {
  content: "\f2a3";
}
i.icon.amilia:before {
  content: "\f36d";
}
i.icon.anchor:before {
  content: "\f13d";
}
i.icon.android:before {
  content: "\f17b";
}
i.icon.angellist:before {
  content: "\f209";
}
i.icon.angle.double.down:before {
  content: "\f103";
}
i.icon.angle.double.left:before {
  content: "\f100";
}
i.icon.angle.double.right:before {
  content: "\f101";
}
i.icon.angle.double.up:before {
  content: "\f102";
}
i.icon.angle.down:before {
  content: "\f107";
}
i.icon.angle.left:before {
  content: "\f104";
}
i.icon.angle.right:before {
  content: "\f105";
}
i.icon.angle.up:before {
  content: "\f106";
}
i.icon.angrycreative:before {
  content: "\f36e";
}
i.icon.angular:before {
  content: "\f420";
}
i.icon.app.store:before {
  content: "\f36f";
}
i.icon.app.store.ios:before {
  content: "\f370";
}
i.icon.apper:before {
  content: "\f371";
}
i.icon.apple:before {
  content: "\f179";
}
i.icon.apple.pay:before {
  content: "\f415";
}
i.icon.archive:before {
  content: "\f187";
}
i.icon.arrow.alternate.circle.down:before {
  content: "\f358";
}
i.icon.arrow.alternate.circle.left:before {
  content: "\f359";
}
i.icon.arrow.alternate.circle.right:before {
  content: "\f35a";
}
i.icon.arrow.alternate.circle.up:before {
  content: "\f35b";
}
i.icon.arrow.circle.down:before {
  content: "\f0ab";
}
i.icon.arrow.circle.left:before {
  content: "\f0a8";
}
i.icon.arrow.circle.right:before {
  content: "\f0a9";
}
i.icon.arrow.circle.up:before {
  content: "\f0aa";
}
i.icon.arrow.down:before {
  content: "\f063";
}
i.icon.arrow.left:before {
  content: "\f060";
}
i.icon.arrow.right:before {
  content: "\f061";
}
i.icon.arrow.up:before {
  content: "\f062";
}
i.icon.arrows.alternate:before {
  content: "\f0b2";
}
i.icon.arrows.alternate.horizontal:before {
  content: "\f337";
}
i.icon.arrows.alternate.vertical:before {
  content: "\f338";
}
i.icon.assistive.listening.systems:before {
  content: "\f2a2";
}
i.icon.asterisk:before {
  content: "\f069";
}
i.icon.asymmetrik:before {
  content: "\f372";
}
i.icon.at:before {
  content: "\f1fa";
}
i.icon.audible:before {
  content: "\f373";
}
i.icon.audio.description:before {
  content: "\f29e";
}
i.icon.autoprefixer:before {
  content: "\f41c";
}
i.icon.avianex:before {
  content: "\f374";
}
i.icon.aviato:before {
  content: "\f421";
}
i.icon.aws:before {
  content: "\f375";
}
i.icon.backward:before {
  content: "\f04a";
}
i.icon.balance.scale:before {
  content: "\f24e";
}
i.icon.ban:before {
  content: "\f05e";
}
i.icon.band.aid:before {
  content: "\f462";
}
i.icon.bandcamp:before {
  content: "\f2d5";
}
i.icon.barcode:before {
  content: "\f02a";
}
i.icon.bars:before {
  content: "\f0c9";
}
i.icon.baseball.ball:before {
  content: "\f433";
}
i.icon.basketball.ball:before {
  content: "\f434";
}
i.icon.bath:before {
  content: "\f2cd";
}
i.icon.battery.empty:before {
  content: "\f244";
}
i.icon.battery.full:before {
  content: "\f240";
}
i.icon.battery.half:before {
  content: "\f242";
}
i.icon.battery.quarter:before {
  content: "\f243";
}
i.icon.battery.three.quarters:before {
  content: "\f241";
}
i.icon.bed:before {
  content: "\f236";
}
i.icon.beer:before {
  content: "\f0fc";
}
i.icon.behance:before {
  content: "\f1b4";
}
i.icon.behance.square:before {
  content: "\f1b5";
}
i.icon.bell:before {
  content: "\f0f3";
}
i.icon.bell.slash:before {
  content: "\f1f6";
}
i.icon.bicycle:before {
  content: "\f206";
}
i.icon.bimobject:before {
  content: "\f378";
}
i.icon.binoculars:before {
  content: "\f1e5";
}
i.icon.birthday.cake:before {
  content: "\f1fd";
}
i.icon.bitbucket:before {
  content: "\f171";
}
i.icon.bitcoin:before {
  content: "\f379";
}
i.icon.bity:before {
  content: "\f37a";
}
i.icon.black.tie:before {
  content: "\f27e";
}
i.icon.blackberry:before {
  content: "\f37b";
}
i.icon.blind:before {
  content: "\f29d";
}
i.icon.blogger:before {
  content: "\f37c";
}
i.icon.blogger.b:before {
  content: "\f37d";
}
i.icon.bluetooth:before {
  content: "\f293";
}
i.icon.bluetooth.b:before {
  content: "\f294";
}
i.icon.bold:before {
  content: "\f032";
}
i.icon.bolt:before {
  content: "\f0e7";
}
i.icon.bomb:before {
  content: "\f1e2";
}
i.icon.book:before {
  content: "\f02d";
}
i.icon.bookmark:before {
  content: "\f02e";
}
i.icon.bowling.ball:before {
  content: "\f436";
}
i.icon.box:before {
  content: "\f466";
}
i.icon.boxes:before {
  content: "\f468";
}
i.icon.braille:before {
  content: "\f2a1";
}
i.icon.briefcase:before {
  content: "\f0b1";
}
i.icon.btc:before {
  content: "\f15a";
}
i.icon.bug:before {
  content: "\f188";
}
i.icon.building:before {
  content: "\f1ad";
}
i.icon.bullhorn:before {
  content: "\f0a1";
}
i.icon.bullseye:before {
  content: "\f140";
}
i.icon.buromobelexperte:before {
  content: "\f37f";
}
i.icon.bus:before {
  content: "\f207";
}
i.icon.buysellads:before {
  content: "\f20d";
}
i.icon.calculator:before {
  content: "\f1ec";
}
i.icon.calendar:before {
  content: "\f133";
}
i.icon.calendar.alternate:before {
  content: "\f073";
}
i.icon.calendar.check:before {
  content: "\f274";
}
i.icon.calendar.minus:before {
  content: "\f272";
}
i.icon.calendar.plus:before {
  content: "\f271";
}
i.icon.calendar.times:before {
  content: "\f273";
}
i.icon.camera:before {
  content: "\f030";
}
i.icon.camera.retro:before {
  content: "\f083";
}
i.icon.car:before {
  content: "\f1b9";
}
i.icon.caret.down:before {
  content: "\f0d7";
}
i.icon.caret.left:before {
  content: "\f0d9";
}
i.icon.caret.right:before {
  content: "\f0da";
}
i.icon.caret.square.down:before {
  content: "\f150";
}
i.icon.caret.square.left:before {
  content: "\f191";
}
i.icon.caret.square.right:before {
  content: "\f152";
}
i.icon.caret.square.up:before {
  content: "\f151";
}
i.icon.caret.up:before {
  content: "\f0d8";
}
i.icon.cart.arrow.down:before {
  content: "\f218";
}
i.icon.cart.plus:before {
  content: "\f217";
}
i.icon.cc.amazon.pay:before {
  content: "\f42d";
}
i.icon.cc.amex:before {
  content: "\f1f3";
}
i.icon.cc.apple.pay:before {
  content: "\f416";
}
i.icon.cc.diners.club:before {
  content: "\f24c";
}
i.icon.cc.discover:before {
  content: "\f1f2";
}
i.icon.cc.jcb:before {
  content: "\f24b";
}
i.icon.cc.mastercard:before {
  content: "\f1f1";
}
i.icon.cc.paypal:before {
  content: "\f1f4";
}
i.icon.cc.stripe:before {
  content: "\f1f5";
}
i.icon.cc.visa:before {
  content: "\f1f0";
}
i.icon.centercode:before {
  content: "\f380";
}
i.icon.certificate:before {
  content: "\f0a3";
}
i.icon.chart.area:before {
  content: "\f1fe";
}
i.icon.chart.bar:before {
  content: "\f080";
}
i.icon.chart.line:before {
  content: "\f201";
}
i.icon.chart.pie:before {
  content: "\f200";
}
i.icon.check:before {
  content: "\f00c";
}
i.icon.check.circle:before {
  content: "\f058";
}
i.icon.check.square:before {
  content: "\f14a";
}
i.icon.chess:before {
  content: "\f439";
}
i.icon.chess.bishop:before {
  content: "\f43a";
}
i.icon.chess.board:before {
  content: "\f43c";
}
i.icon.chess.king:before {
  content: "\f43f";
}
i.icon.chess.knight:before {
  content: "\f441";
}
i.icon.chess.pawn:before {
  content: "\f443";
}
i.icon.chess.queen:before {
  content: "\f445";
}
i.icon.chess.rook:before {
  content: "\f447";
}
i.icon.chevron.circle.down:before {
  content: "\f13a";
}
i.icon.chevron.circle.left:before {
  content: "\f137";
}
i.icon.chevron.circle.right:before {
  content: "\f138";
}
i.icon.chevron.circle.up:before {
  content: "\f139";
}
i.icon.chevron.down:before {
  content: "\f078";
}
i.icon.chevron.left:before {
  content: "\f053";
}
i.icon.chevron.right:before {
  content: "\f054";
}
i.icon.chevron.up:before {
  content: "\f077";
}
i.icon.child:before {
  content: "\f1ae";
}
i.icon.chrome:before {
  content: "\f268";
}
i.icon.circle:before {
  content: "\f111";
}
i.icon.circle.notch:before {
  content: "\f1ce";
}
i.icon.clipboard:before {
  content: "\f328";
}
i.icon.clipboard.check:before {
  content: "\f46c";
}
i.icon.clipboard.list:before {
  content: "\f46d";
}
i.icon.clock:before {
  content: "\f017";
}
i.icon.clone:before {
  content: "\f24d";
}
i.icon.closed.captioning:before {
  content: "\f20a";
}
i.icon.cloud:before {
  content: "\f0c2";
}
i.icon.cloudscale:before {
  content: "\f383";
}
i.icon.cloudsmith:before {
  content: "\f384";
}
i.icon.cloudversify:before {
  content: "\f385";
}
i.icon.code:before {
  content: "\f121";
}
i.icon.code.branch:before {
  content: "\f126";
}
i.icon.codepen:before {
  content: "\f1cb";
}
i.icon.codiepie:before {
  content: "\f284";
}
i.icon.coffee:before {
  content: "\f0f4";
}
i.icon.cog:before {
  content: "\f013";
}
i.icon.cogs:before {
  content: "\f085";
}
i.icon.columns:before {
  content: "\f0db";
}
i.icon.comment:before {
  content: "\f075";
}
i.icon.comment.alternate:before {
  content: "\f27a";
}
i.icon.comments:before {
  content: "\f086";
}
i.icon.compass:before {
  content: "\f14e";
}
i.icon.compress:before {
  content: "\f066";
}
i.icon.connectdevelop:before {
  content: "\f20e";
}
i.icon.contao:before {
  content: "\f26d";
}
i.icon.copy:before {
  content: "\f0c5";
}
i.icon.copyright:before {
  content: "\f1f9";
}
i.icon.cpanel:before {
  content: "\f388";
}
i.icon.creative.commons:before {
  content: "\f25e";
}
i.icon.credit.card:before {
  content: "\f09d";
}
i.icon.crop:before {
  content: "\f125";
}
i.icon.crosshairs:before {
  content: "\f05b";
}
i.icon.css3:before {
  content: "\f13c";
}
i.icon.css3.alternate:before {
  content: "\f38b";
}
i.icon.cube:before {
  content: "\f1b2";
}
i.icon.cubes:before {
  content: "\f1b3";
}
i.icon.cut:before {
  content: "\f0c4";
}
i.icon.cuttlefish:before {
  content: "\f38c";
}
i.icon.d.and.d:before {
  content: "\f38d";
}
i.icon.dashcube:before {
  content: "\f210";
}
i.icon.database:before {
  content: "\f1c0";
}
i.icon.deaf:before {
  content: "\f2a4";
}
i.icon.delicious:before {
  content: "\f1a5";
}
i.icon.deploydog:before {
  content: "\f38e";
}
i.icon.deskpro:before {
  content: "\f38f";
}
i.icon.desktop:before {
  content: "\f108";
}
i.icon.deviantart:before {
  content: "\f1bd";
}
i.icon.digg:before {
  content: "\f1a6";
}
i.icon.digital.ocean:before {
  content: "\f391";
}
i.icon.discord:before {
  content: "\f392";
}
i.icon.discourse:before {
  content: "\f393";
}
i.icon.dna:before {
  content: "\f471";
}
i.icon.dochub:before {
  content: "\f394";
}
i.icon.docker:before {
  content: "\f395";
}
i.icon.dollar.sign:before {
  content: "\f155";
}
i.icon.dolly:before {
  content: "\f472";
}
i.icon.dolly.flatbed:before {
  content: "\f474";
}
i.icon.dot.circle:before {
  content: "\f192";
}
i.icon.download:before {
  content: "\f019";
}
i.icon.draft2digital:before {
  content: "\f396";
}
i.icon.dribbble:before {
  content: "\f17d";
}
i.icon.dribbble.square:before {
  content: "\f397";
}
i.icon.dropbox:before {
  content: "\f16b";
}
i.icon.drupal:before {
  content: "\f1a9";
}
i.icon.dyalog:before {
  content: "\f399";
}
i.icon.earlybirds:before {
  content: "\f39a";
}
i.icon.edge:before {
  content: "\f282";
}
i.icon.edit:before {
  content: "\f044";
}
i.icon.eject:before {
  content: "\f052";
}
i.icon.elementor:before {
  content: "\f430";
}
i.icon.ellipsis.horizontal:before {
  content: "\f141";
}
i.icon.ellipsis.vertical:before {
  content: "\f142";
}
i.icon.ember:before {
  content: "\f423";
}
i.icon.empire:before {
  content: "\f1d1";
}
i.icon.envelope:before {
  content: "\f0e0";
}
i.icon.envelope.open:before {
  content: "\f2b6";
}
i.icon.envelope.square:before {
  content: "\f199";
}
i.icon.envira:before {
  content: "\f299";
}
i.icon.eraser:before {
  content: "\f12d";
}
i.icon.erlang:before {
  content: "\f39d";
}
i.icon.ethereum:before {
  content: "\f42e";
}
i.icon.etsy:before {
  content: "\f2d7";
}
i.icon.euro.sign:before {
  content: "\f153";
}
i.icon.exchange.alternate:before {
  content: "\f362";
}
i.icon.exclamation:before {
  content: "\f12a";
}
i.icon.exclamation.circle:before {
  content: "\f06a";
}
i.icon.exclamation.triangle:before {
  content: "\f071";
}
i.icon.expand:before {
  content: "\f065";
}
i.icon.expand.arrows.alternate:before {
  content: "\f31e";
}
i.icon.expeditedssl:before {
  content: "\f23e";
}
i.icon.external.alternate:before {
  content: "\f35d";
}
i.icon.external.square.alternate:before {
  content: "\f360";
}
i.icon.eye:before {
  content: "\f06e";
}
i.icon.eye.dropper:before {
  content: "\f1fb";
}
i.icon.eye.slash:before {
  content: "\f070";
}
i.icon.facebook:before {
  content: "\f09a";
}
i.icon.facebook.f:before {
  content: "\f39e";
}
i.icon.facebook.messenger:before {
  content: "\f39f";
}
i.icon.facebook.square:before {
  content: "\f082";
}
i.icon.fast.backward:before {
  content: "\f049";
}
i.icon.fast.forward:before {
  content: "\f050";
}
i.icon.fax:before {
  content: "\f1ac";
}
i.icon.female:before {
  content: "\f182";
}
i.icon.fighter.jet:before {
  content: "\f0fb";
}
i.icon.file:before {
  content: "\f15b";
}
i.icon.file.alternate:before {
  content: "\f15c";
}
i.icon.file.archive:before {
  content: "\f1c6";
}
i.icon.file.audio:before {
  content: "\f1c7";
}
i.icon.file.code:before {
  content: "\f1c9";
}
i.icon.file.excel:before {
  content: "\f1c3";
}
i.icon.file.image:before {
  content: "\f1c5";
}
i.icon.file.pdf:before {
  content: "\f1c1";
}
i.icon.file.powerpoint:before {
  content: "\f1c4";
}
i.icon.file.video:before {
  content: "\f1c8";
}
i.icon.file.word:before {
  content: "\f1c2";
}
i.icon.film:before {
  content: "\f008";
}
i.icon.filter:before {
  content: "\f0b0";
}
i.icon.fire:before {
  content: "\f06d";
}
i.icon.fire.extinguisher:before {
  content: "\f134";
}
i.icon.firefox:before {
  content: "\f269";
}
i.icon.first.aid:before {
  content: "\f479";
}
i.icon.first.order:before {
  content: "\f2b0";
}
i.icon.firstdraft:before {
  content: "\f3a1";
}
i.icon.flag:before {
  content: "\f024";
}
i.icon.flag.checkered:before {
  content: "\f11e";
}
i.icon.flask:before {
  content: "\f0c3";
}
i.icon.flickr:before {
  content: "\f16e";
}
i.icon.flipboard:before {
  content: "\f44d";
}
i.icon.fly:before {
  content: "\f417";
}
i.icon.folder:before {
  content: "\f07b";
}
i.icon.folder.open:before {
  content: "\f07c";
}
i.icon.font:before {
  content: "\f031";
}
i.icon.font.awesome:before {
  content: "\f2b4";
}
i.icon.font.awesome.alternate:before {
  content: "\f35c";
}
i.icon.font.awesome.flag:before {
  content: "\f425";
}
i.icon.fonticons:before {
  content: "\f280";
}
i.icon.fonticons.fi:before {
  content: "\f3a2";
}
i.icon.football.ball:before {
  content: "\f44e";
}
i.icon.fort.awesome:before {
  content: "\f286";
}
i.icon.fort.awesome.alternate:before {
  content: "\f3a3";
}
i.icon.forumbee:before {
  content: "\f211";
}
i.icon.forward:before {
  content: "\f04e";
}
i.icon.foursquare:before {
  content: "\f180";
}
i.icon.free.code.camp:before {
  content: "\f2c5";
}
i.icon.freebsd:before {
  content: "\f3a4";
}
i.icon.frown:before {
  content: "\f119";
}
i.icon.futbol:before {
  content: "\f1e3";
}
i.icon.gamepad:before {
  content: "\f11b";
}
i.icon.gavel:before {
  content: "\f0e3";
}
i.icon.gem:before {
  content: "\f3a5";
}
i.icon.genderless:before {
  content: "\f22d";
}
i.icon.get.pocket:before {
  content: "\f265";
}
i.icon.gg:before {
  content: "\f260";
}
i.icon.gg.circle:before {
  content: "\f261";
}
i.icon.gift:before {
  content: "\f06b";
}
i.icon.git:before {
  content: "\f1d3";
}
i.icon.git.square:before {
  content: "\f1d2";
}
i.icon.github:before {
  content: "\f09b";
}
i.icon.github.alternate:before {
  content: "\f113";
}
i.icon.github.square:before {
  content: "\f092";
}
i.icon.gitkraken:before {
  content: "\f3a6";
}
i.icon.gitlab:before {
  content: "\f296";
}
i.icon.gitter:before {
  content: "\f426";
}
i.icon.glass.martini:before {
  content: "\f000";
}
i.icon.glide:before {
  content: "\f2a5";
}
i.icon.glide.g:before {
  content: "\f2a6";
}
i.icon.globe:before {
  content: "\f0ac";
}
i.icon.gofore:before {
  content: "\f3a7";
}
i.icon.golf.ball:before {
  content: "\f450";
}
i.icon.goodreads:before {
  content: "\f3a8";
}
i.icon.goodreads.g:before {
  content: "\f3a9";
}
i.icon.google:before {
  content: "\f1a0";
}
i.icon.google.drive:before {
  content: "\f3aa";
}
i.icon.google.play:before {
  content: "\f3ab";
}
i.icon.google.plus:before {
  content: "\f2b3";
}
i.icon.google.plus.g:before {
  content: "\f0d5";
}
i.icon.google.plus.square:before {
  content: "\f0d4";
}
i.icon.google.wallet:before {
  content: "\f1ee";
}
i.icon.graduation.cap:before {
  content: "\f19d";
}
i.icon.gratipay:before {
  content: "\f184";
}
i.icon.grav:before {
  content: "\f2d6";
}
i.icon.gripfire:before {
  content: "\f3ac";
}
i.icon.grunt:before {
  content: "\f3ad";
}
i.icon.gulp:before {
  content: "\f3ae";
}
i.icon.h.square:before {
  content: "\f0fd";
}
i.icon.hacker.news:before {
  content: "\f1d4";
}
i.icon.hacker.news.square:before {
  content: "\f3af";
}
i.icon.hand.lizard:before {
  content: "\f258";
}
i.icon.hand.paper:before {
  content: "\f256";
}
i.icon.hand.peace:before {
  content: "\f25b";
}
i.icon.hand.point.down:before {
  content: "\f0a7";
}
i.icon.hand.point.left:before {
  content: "\f0a5";
}
i.icon.hand.point.right:before {
  content: "\f0a4";
}
i.icon.hand.point.up:before {
  content: "\f0a6";
}
i.icon.hand.pointer:before {
  content: "\f25a";
}
i.icon.hand.rock:before {
  content: "\f255";
}
i.icon.hand.scissors:before {
  content: "\f257";
}
i.icon.hand.spock:before {
  content: "\f259";
}
i.icon.handshake:before {
  content: "\f2b5";
}
i.icon.hashtag:before {
  content: "\f292";
}
i.icon.hdd:before {
  content: "\f0a0";
}
i.icon.heading:before {
  content: "\f1dc";
}
i.icon.headphones:before {
  content: "\f025";
}
i.icon.heart:before {
  content: "\f004";
}
i.icon.heartbeat:before {
  content: "\f21e";
}
i.icon.hips:before {
  content: "\f452";
}
i.icon.hire.a.helper:before {
  content: "\f3b0";
}
i.icon.history:before {
  content: "\f1da";
}
i.icon.hockey.puck:before {
  content: "\f453";
}
i.icon.home:before {
  content: "\f015";
}
i.icon.hooli:before {
  content: "\f427";
}
i.icon.hospital:before {
  content: "\f0f8";
}
i.icon.hospital.symbol:before {
  content: "\f47e";
}
i.icon.hotjar:before {
  content: "\f3b1";
}
i.icon.hourglass:before {
  content: "\f254";
}
i.icon.hourglass.end:before {
  content: "\f253";
}
i.icon.hourglass.half:before {
  content: "\f252";
}
i.icon.hourglass.start:before {
  content: "\f251";
}
i.icon.houzz:before {
  content: "\f27c";
}
i.icon.html5:before {
  content: "\f13b";
}
i.icon.hubspot:before {
  content: "\f3b2";
}
i.icon.i.cursor:before {
  content: "\f246";
}
i.icon.id.badge:before {
  content: "\f2c1";
}
i.icon.id.card:before {
  content: "\f2c2";
}
i.icon.image:before {
  content: "\f03e";
}
i.icon.images:before {
  content: "\f302";
}
i.icon.imdb:before {
  content: "\f2d8";
}
i.icon.inbox:before {
  content: "\f01c";
}
i.icon.indent:before {
  content: "\f03c";
}
i.icon.industry:before {
  content: "\f275";
}
i.icon.info:before {
  content: "\f129";
}
i.icon.info.circle:before {
  content: "\f05a";
}
i.icon.instagram:before {
  content: "\f16d";
}
i.icon.internet.explorer:before {
  content: "\f26b";
}
i.icon.ioxhost:before {
  content: "\f208";
}
i.icon.italic:before {
  content: "\f033";
}
i.icon.itunes:before {
  content: "\f3b4";
}
i.icon.itunes.note:before {
  content: "\f3b5";
}
i.icon.jenkins:before {
  content: "\f3b6";
}
i.icon.joget:before {
  content: "\f3b7";
}
i.icon.joomla:before {
  content: "\f1aa";
}
i.icon.js:before {
  content: "\f3b8";
}
i.icon.js.square:before {
  content: "\f3b9";
}
i.icon.jsfiddle:before {
  content: "\f1cc";
}
i.icon.key:before {
  content: "\f084";
}
i.icon.keyboard:before {
  content: "\f11c";
}
i.icon.keycdn:before {
  content: "\f3ba";
}
i.icon.kickstarter:before {
  content: "\f3bb";
}
i.icon.kickstarter.k:before {
  content: "\f3bc";
}
i.icon.korvue:before {
  content: "\f42f";
}
i.icon.language:before {
  content: "\f1ab";
}
i.icon.laptop:before {
  content: "\f109";
}
i.icon.laravel:before {
  content: "\f3bd";
}
i.icon.lastfm:before {
  content: "\f202";
}
i.icon.lastfm.square:before {
  content: "\f203";
}
i.icon.leaf:before {
  content: "\f06c";
}
i.icon.leanpub:before {
  content: "\f212";
}
i.icon.lemon:before {
  content: "\f094";
}
i.icon.less:before {
  content: "\f41d";
}
i.icon.level.down.alternate:before {
  content: "\f3be";
}
i.icon.level.up.alternate:before {
  content: "\f3bf";
}
i.icon.life.ring:before {
  content: "\f1cd";
}
i.icon.lightbulb:before {
  content: "\f0eb";
}
i.icon.linechat:before {
  content: "\f3c0";
}
i.icon.linkify:before {
  content: "\f0c1";
}
i.icon.linkedin:before {
  content: "\f08c";
}
i.icon.linkedin.alt:before {
  content: "\f0e1";
}
i.icon.linode:before {
  content: "\f2b8";
}
i.icon.linux:before {
  content: "\f17c";
}
i.icon.lira.sign:before {
  content: "\f195";
}
i.icon.list:before {
  content: "\f03a";
}
i.icon.list.alternate:before {
  content: "\f022";
}
i.icon.list.ol:before {
  content: "\f0cb";
}
i.icon.list.ul:before {
  content: "\f0ca";
}
i.icon.location.arrow:before {
  content: "\f124";
}
i.icon.lock:before {
  content: "\f023";
}
i.icon.lock.open:before {
  content: "\f3c1";
}
i.icon.long.arrow.alternate.down:before {
  content: "\f309";
}
i.icon.long.arrow.alternate.left:before {
  content: "\f30a";
}
i.icon.long.arrow.alternate.right:before {
  content: "\f30b";
}
i.icon.long.arrow.alternate.up:before {
  content: "\f30c";
}
i.icon.low.vision:before {
  content: "\f2a8";
}
i.icon.lyft:before {
  content: "\f3c3";
}
i.icon.magento:before {
  content: "\f3c4";
}
i.icon.magic:before {
  content: "\f0d0";
}
i.icon.magnet:before {
  content: "\f076";
}
i.icon.male:before {
  content: "\f183";
}
i.icon.map:before {
  content: "\f279";
}
i.icon.map.marker:before {
  content: "\f041";
}
i.icon.map.marker.alternate:before {
  content: "\f3c5";
}
i.icon.map.pin:before {
  content: "\f276";
}
i.icon.map.signs:before {
  content: "\f277";
}
i.icon.mars:before {
  content: "\f222";
}
i.icon.mars.double:before {
  content: "\f227";
}
i.icon.mars.stroke:before {
  content: "\f229";
}
i.icon.mars.stroke.horizontal:before {
  content: "\f22b";
}
i.icon.mars.stroke.vertical:before {
  content: "\f22a";
}
i.icon.maxcdn:before {
  content: "\f136";
}
i.icon.medapps:before {
  content: "\f3c6";
}
i.icon.medium:before {
  content: "\f23a";
}
i.icon.medium.m:before {
  content: "\f3c7";
}
i.icon.medkit:before {
  content: "\f0fa";
}
i.icon.medrt:before {
  content: "\f3c8";
}
i.icon.meetup:before {
  content: "\f2e0";
}
i.icon.meh:before {
  content: "\f11a";
}
i.icon.mercury:before {
  content: "\f223";
}
i.icon.microchip:before {
  content: "\f2db";
}
i.icon.microphone:before {
  content: "\f130";
}
i.icon.microphone.slash:before {
  content: "\f131";
}
i.icon.microsoft:before {
  content: "\f3ca";
}
i.icon.minus:before {
  content: "\f068";
}
i.icon.minus.circle:before {
  content: "\f056";
}
i.icon.minus.square:before {
  content: "\f146";
}
i.icon.mix:before {
  content: "\f3cb";
}
i.icon.mixcloud:before {
  content: "\f289";
}
i.icon.mizuni:before {
  content: "\f3cc";
}
i.icon.mobile:before {
  content: "\f10b";
}
i.icon.mobile.alternate:before {
  content: "\f3cd";
}
i.icon.modx:before {
  content: "\f285";
}
i.icon.monero:before {
  content: "\f3d0";
}
i.icon.money.bill.alternate:before {
  content: "\f3d1";
}
i.icon.moon:before {
  content: "\f186";
}
i.icon.motorcycle:before {
  content: "\f21c";
}
i.icon.mouse.pointer:before {
  content: "\f245";
}
i.icon.music:before {
  content: "\f001";
}
i.icon.napster:before {
  content: "\f3d2";
}
i.icon.neuter:before {
  content: "\f22c";
}
i.icon.newspaper:before {
  content: "\f1ea";
}
i.icon.nintendo.switch:before {
  content: "\f418";
}
i.icon.node:before {
  content: "\f419";
}
i.icon.node.js:before {
  content: "\f3d3";
}
i.icon.npm:before {
  content: "\f3d4";
}
i.icon.ns8:before {
  content: "\f3d5";
}
i.icon.nutritionix:before {
  content: "\f3d6";
}
i.icon.object.group:before {
  content: "\f247";
}
i.icon.object.ungroup:before {
  content: "\f248";
}
i.icon.odnoklassniki:before {
  content: "\f263";
}
i.icon.odnoklassniki.square:before {
  content: "\f264";
}
i.icon.opencart:before {
  content: "\f23d";
}
i.icon.openid:before {
  content: "\f19b";
}
i.icon.opera:before {
  content: "\f26a";
}
i.icon.optin.monster:before {
  content: "\f23c";
}
i.icon.osi:before {
  content: "\f41a";
}
i.icon.outdent:before {
  content: "\f03b";
}
i.icon.page4:before {
  content: "\f3d7";
}
i.icon.pagelines:before {
  content: "\f18c";
}
i.icon.paint.brush:before {
  content: "\f1fc";
}
i.icon.palfed:before {
  content: "\f3d8";
}
i.icon.pallet:before {
  content: "\f482";
}
i.icon.paper.plane:before {
  content: "\f1d8";
}
i.icon.paperclip:before {
  content: "\f0c6";
}
i.icon.paragraph:before {
  content: "\f1dd";
}
i.icon.paste:before {
  content: "\f0ea";
}
i.icon.patreon:before {
  content: "\f3d9";
}
i.icon.pause:before {
  content: "\f04c";
}
i.icon.pause.circle:before {
  content: "\f28b";
}
i.icon.paw:before {
  content: "\f1b0";
}
i.icon.paypal:before {
  content: "\f1ed";
}
i.icon.pen.square:before {
  content: "\f14b";
}
i.icon.pencil.alternate:before {
  content: "\f303";
}
i.icon.percent:before {
  content: "\f295";
}
i.icon.periscope:before {
  content: "\f3da";
}
i.icon.phabricator:before {
  content: "\f3db";
}
i.icon.phoenix.framework:before {
  content: "\f3dc";
}
i.icon.phone:before {
  content: "\f095";
}
i.icon.phone.square:before {
  content: "\f098";
}
i.icon.phone.volume:before {
  content: "\f2a0";
}
i.icon.php:before {
  content: "\f457";
}
i.icon.pied.piper:before {
  content: "\f2ae";
}
i.icon.pied.piper.alternate:before {
  content: "\f1a8";
}
i.icon.pied.piper.pp:before {
  content: "\f1a7";
}
i.icon.pills:before {
  content: "\f484";
}
i.icon.pinterest:before {
  content: "\f0d2";
}
i.icon.pinterest.p:before {
  content: "\f231";
}
i.icon.pinterest.square:before {
  content: "\f0d3";
}
i.icon.plane:before {
  content: "\f072";
}
i.icon.play:before {
  content: "\f04b";
}
i.icon.play.circle:before {
  content: "\f144";
}
i.icon.playstation:before {
  content: "\f3df";
}
i.icon.plug:before {
  content: "\f1e6";
}
i.icon.plus:before {
  content: "\f067";
}
i.icon.plus.circle:before {
  content: "\f055";
}
i.icon.plus.square:before {
  content: "\f0fe";
}
i.icon.podcast:before {
  content: "\f2ce";
}
i.icon.pound.sign:before {
  content: "\f154";
}
i.icon.power.off:before {
  content: "\f011";
}
i.icon.print:before {
  content: "\f02f";
}
i.icon.product.hunt:before {
  content: "\f288";
}
i.icon.pushed:before {
  content: "\f3e1";
}
i.icon.puzzle.piece:before {
  content: "\f12e";
}
i.icon.python:before {
  content: "\f3e2";
}
i.icon.qq:before {
  content: "\f1d6";
}
i.icon.qrcode:before {
  content: "\f029";
}
i.icon.question:before {
  content: "\f128";
}
i.icon.question.circle:before {
  content: "\f059";
}
i.icon.quidditch:before {
  content: "\f458";
}
i.icon.quinscape:before {
  content: "\f459";
}
i.icon.quora:before {
  content: "\f2c4";
}
i.icon.quote.left:before {
  content: "\f10d";
}
i.icon.quote.right:before {
  content: "\f10e";
}
i.icon.random:before {
  content: "\f074";
}
i.icon.ravelry:before {
  content: "\f2d9";
}
i.icon.react:before {
  content: "\f41b";
}
i.icon.rebel:before {
  content: "\f1d0";
}
i.icon.recycle:before {
  content: "\f1b8";
}
i.icon.redriver:before {
  content: "\f3e3";
}
i.icon.reddit:before {
  content: "\f1a1";
}
i.icon.reddit.alien:before {
  content: "\f281";
}
i.icon.reddit.square:before {
  content: "\f1a2";
}
i.icon.redo:before {
  content: "\f01e";
}
i.icon.redo.alternate:before {
  content: "\f2f9";
}
i.icon.registered:before {
  content: "\f25d";
}
i.icon.rendact:before {
  content: "\f3e4";
}
i.icon.renren:before {
  content: "\f18b";
}
i.icon.reply:before {
  content: "\f3e5";
}
i.icon.reply.all:before {
  content: "\f122";
}
i.icon.replyd:before {
  content: "\f3e6";
}
i.icon.resolving:before {
  content: "\f3e7";
}
i.icon.retweet:before {
  content: "\f079";
}
i.icon.road:before {
  content: "\f018";
}
i.icon.rocket:before {
  content: "\f135";
}
i.icon.rocketchat:before {
  content: "\f3e8";
}
i.icon.rockrms:before {
  content: "\f3e9";
}
i.icon.rss:before {
  content: "\f09e";
}
i.icon.rss.square:before {
  content: "\f143";
}
i.icon.ruble.sign:before {
  content: "\f158";
}
i.icon.rupee.sign:before {
  content: "\f156";
}
i.icon.safari:before {
  content: "\f267";
}
i.icon.sass:before {
  content: "\f41e";
}
i.icon.save:before {
  content: "\f0c7";
}
i.icon.schlix:before {
  content: "\f3ea";
}
i.icon.scribd:before {
  content: "\f28a";
}
i.icon.search:before {
  content: "\f002";
}
i.icon.search.minus:before {
  content: "\f010";
}
i.icon.search.plus:before {
  content: "\f00e";
}
i.icon.searchengin:before {
  content: "\f3eb";
}
i.icon.sellcast:before {
  content: "\f2da";
}
i.icon.sellsy:before {
  content: "\f213";
}
i.icon.server:before {
  content: "\f233";
}
i.icon.servicestack:before {
  content: "\f3ec";
}
i.icon.share:before {
  content: "\f064";
}
i.icon.share.alternate:before {
  content: "\f1e0";
}
i.icon.share.alternate.square:before {
  content: "\f1e1";
}
i.icon.share.square:before {
  content: "\f14d";
}
i.icon.shekel.sign:before {
  content: "\f20b";
}
i.icon.shield.alternate:before {
  content: "\f3ed";
}
i.icon.ship:before {
  content: "\f21a";
}
i.icon.shipping.fast:before {
  content: "\f48b";
}
i.icon.shirtsinbulk:before {
  content: "\f214";
}
i.icon.shopping.bag:before {
  content: "\f290";
}
i.icon.shopping.basket:before {
  content: "\f291";
}
i.icon.shopping.cart:before {
  content: "\f07a";
}
i.icon.shower:before {
  content: "\f2cc";
}
i.icon.sign.language:before {
  content: "\f2a7";
}
i.icon.signal:before {
  content: "\f012";
}
i.icon.simplybuilt:before {
  content: "\f215";
}
i.icon.sistrix:before {
  content: "\f3ee";
}
i.icon.sitemap:before {
  content: "\f0e8";
}
i.icon.skyatlas:before {
  content: "\f216";
}
i.icon.skype:before {
  content: "\f17e";
}
i.icon.slack:before {
  content: "\f198";
}
i.icon.slack.hash:before {
  content: "\f3ef";
}
i.icon.sliders.horizontal:before {
  content: "\f1de";
}
i.icon.slideshare:before {
  content: "\f1e7";
}
i.icon.smile:before {
  content: "\f118";
}
i.icon.snapchat:before {
  content: "\f2ab";
}
i.icon.snapchat.ghost:before {
  content: "\f2ac";
}
i.icon.snapchat.square:before {
  content: "\f2ad";
}
i.icon.snowflake:before {
  content: "\f2dc";
}
i.icon.sort:before {
  content: "\f0dc";
}
i.icon.sort.alphabet.down:before {
  content: "\f15d";
}
i.icon.sort.alphabet.up:before {
  content: "\f15e";
}
i.icon.sort.amount.down:before {
  content: "\f160";
}
i.icon.sort.amount.up:before {
  content: "\f161";
}
i.icon.sort.down:before {
  content: "\f0dd";
}
i.icon.sort.numeric.down:before {
  content: "\f162";
}
i.icon.sort.numeric.up:before {
  content: "\f163";
}
i.icon.sort.up:before {
  content: "\f0de";
}
i.icon.soundcloud:before {
  content: "\f1be";
}
i.icon.space.shuttle:before {
  content: "\f197";
}
i.icon.speakap:before {
  content: "\f3f3";
}
i.icon.spinner:before {
  content: "\f110";
}
i.icon.spotify:before {
  content: "\f1bc";
}
i.icon.square:before {
  content: "\f0c8";
}
i.icon.square.full:before {
  content: "\f45c";
}
i.icon.stack.exchange:before {
  content: "\f18d";
}
i.icon.stack.overflow:before {
  content: "\f16c";
}
i.icon.star:before {
  content: "\f005";
}
i.icon.star.half:before {
  content: "\f089";
}
i.icon.staylinked:before {
  content: "\f3f5";
}
i.icon.steam:before {
  content: "\f1b6";
}
i.icon.steam.square:before {
  content: "\f1b7";
}
i.icon.steam.symbol:before {
  content: "\f3f6";
}
i.icon.step.backward:before {
  content: "\f048";
}
i.icon.step.forward:before {
  content: "\f051";
}
i.icon.stethoscope:before {
  content: "\f0f1";
}
i.icon.sticker.mule:before {
  content: "\f3f7";
}
i.icon.sticky.note:before {
  content: "\f249";
}
i.icon.stop:before {
  content: "\f04d";
}
i.icon.stop.circle:before {
  content: "\f28d";
}
i.icon.stopwatch:before {
  content: "\f2f2";
}
i.icon.strava:before {
  content: "\f428";
}
i.icon.street.view:before {
  content: "\f21d";
}
i.icon.strikethrough:before {
  content: "\f0cc";
}
i.icon.stripe:before {
  content: "\f429";
}
i.icon.stripe.s:before {
  content: "\f42a";
}
i.icon.studiovinari:before {
  content: "\f3f8";
}
i.icon.stumbleupon:before {
  content: "\f1a4";
}
i.icon.stumbleupon.circle:before {
  content: "\f1a3";
}
i.icon.subscript:before {
  content: "\f12c";
}
i.icon.subway:before {
  content: "\f239";
}
i.icon.suitcase:before {
  content: "\f0f2";
}
i.icon.sun:before {
  content: "\f185";
}
i.icon.superpowers:before {
  content: "\f2dd";
}
i.icon.superscript:before {
  content: "\f12b";
}
i.icon.supple:before {
  content: "\f3f9";
}
i.icon.sync:before {
  content: "\f021";
}
i.icon.sync.alternate:before {
  content: "\f2f1";
}
i.icon.syringe:before {
  content: "\f48e";
}
i.icon.table:before {
  content: "\f0ce";
}
i.icon.table.tennis:before {
  content: "\f45d";
}
i.icon.tablet:before {
  content: "\f10a";
}
i.icon.tablet.alternate:before {
  content: "\f3fa";
}
i.icon.tachometer.alternate:before {
  content: "\f3fd";
}
i.icon.tag:before {
  content: "\f02b";
}
i.icon.tags:before {
  content: "\f02c";
}
i.icon.tasks:before {
  content: "\f0ae";
}
i.icon.taxi:before {
  content: "\f1ba";
}
i.icon.telegram:before {
  content: "\f2c6";
}
i.icon.telegram.plane:before {
  content: "\f3fe";
}
i.icon.tencent.weibo:before {
  content: "\f1d5";
}
i.icon.terminal:before {
  content: "\f120";
}
i.icon.text.height:before {
  content: "\f034";
}
i.icon.text.width:before {
  content: "\f035";
}
i.icon.th:before {
  content: "\f00a";
}
i.icon.th.large:before {
  content: "\f009";
}
i.icon.th.list:before {
  content: "\f00b";
}
i.icon.themeisle:before {
  content: "\f2b2";
}
i.icon.thermometer:before {
  content: "\f491";
}
i.icon.thermometer.empty:before {
  content: "\f2cb";
}
i.icon.thermometer.full:before {
  content: "\f2c7";
}
i.icon.thermometer.half:before {
  content: "\f2c9";
}
i.icon.thermometer.quarter:before {
  content: "\f2ca";
}
i.icon.thermometer.three.quarters:before {
  content: "\f2c8";
}
i.icon.thumbs.down:before {
  content: "\f165";
}
i.icon.thumbs.up:before {
  content: "\f164";
}
i.icon.thumbtack:before {
  content: "\f08d";
}
i.icon.ticket.alternate:before {
  content: "\f3ff";
}
i.icon.times:before {
  content: "\f00d";
}
i.icon.times.circle:before {
  content: "\f057";
}
i.icon.tint:before {
  content: "\f043";
}
i.icon.toggle.off:before {
  content: "\f204";
}
i.icon.toggle.on:before {
  content: "\f205";
}
i.icon.trademark:before {
  content: "\f25c";
}
i.icon.train:before {
  content: "\f238";
}
i.icon.transgender:before {
  content: "\f224";
}
i.icon.transgender.alternate:before {
  content: "\f225";
}
i.icon.trash:before {
  content: "\f1f8";
}
i.icon.trash.alternate:before {
  content: "\f2ed";
}
i.icon.tree:before {
  content: "\f1bb";
}
i.icon.trello:before {
  content: "\f181";
}
i.icon.tripadvisor:before {
  content: "\f262";
}
i.icon.trophy:before {
  content: "\f091";
}
i.icon.truck:before {
  content: "\f0d1";
}
i.icon.tty:before {
  content: "\f1e4";
}
i.icon.tumblr:before {
  content: "\f173";
}
i.icon.tumblr.square:before {
  content: "\f174";
}
i.icon.tv:before {
  content: "\f26c";
}
i.icon.twitch:before {
  content: "\f1e8";
}
i.icon.twitter:before {
  content: "\f099";
}
i.icon.twitter.square:before {
  content: "\f081";
}
i.icon.typo3:before {
  content: "\f42b";
}
i.icon.uber:before {
  content: "\f402";
}
i.icon.uikit:before {
  content: "\f403";
}
i.icon.umbrella:before {
  content: "\f0e9";
}
i.icon.underline:before {
  content: "\f0cd";
}
i.icon.undo:before {
  content: "\f0e2";
}
i.icon.undo.alternate:before {
  content: "\f2ea";
}
i.icon.uniregistry:before {
  content: "\f404";
}
i.icon.universal.access:before {
  content: "\f29a";
}
i.icon.university:before {
  content: "\f19c";
}
i.icon.unlink:before {
  content: "\f127";
}
i.icon.unlock:before {
  content: "\f09c";
}
i.icon.unlock.alternate:before {
  content: "\f13e";
}
i.icon.untappd:before {
  content: "\f405";
}
i.icon.upload:before {
  content: "\f093";
}
i.icon.usb:before {
  content: "\f287";
}
i.icon.user:before {
  content: "\f007";
}
i.icon.user.circle:before {
  content: "\f2bd";
}
i.icon.user.md:before {
  content: "\f0f0";
}
i.icon.user.plus:before {
  content: "\f234";
}
i.icon.user.secret:before {
  content: "\f21b";
}
i.icon.user.times:before {
  content: "\f235";
}
i.icon.users:before {
  content: "\f0c0";
}
i.icon.ussunnah:before {
  content: "\f407";
}
i.icon.utensil.spoon:before {
  content: "\f2e5";
}
i.icon.utensils:before {
  content: "\f2e7";
}
i.icon.vaadin:before {
  content: "\f408";
}
i.icon.venus:before {
  content: "\f221";
}
i.icon.venus.double:before {
  content: "\f226";
}
i.icon.venus.mars:before {
  content: "\f228";
}
i.icon.viacoin:before {
  content: "\f237";
}
i.icon.viadeo:before {
  content: "\f2a9";
}
i.icon.viadeo.square:before {
  content: "\f2aa";
}
i.icon.viber:before {
  content: "\f409";
}
i.icon.video:before {
  content: "\f03d";
}
i.icon.vimeo:before {
  content: "\f40a";
}
i.icon.vimeo.square:before {
  content: "\f194";
}
i.icon.vimeo.v:before {
  content: "\f27d";
}
i.icon.vine:before {
  content: "\f1ca";
}
i.icon.vk:before {
  content: "\f189";
}
i.icon.vnv:before {
  content: "\f40b";
}
i.icon.volleyball.ball:before {
  content: "\f45f";
}
i.icon.volume.down:before {
  content: "\f027";
}
i.icon.volume.off:before {
  content: "\f026";
}
i.icon.volume.up:before {
  content: "\f028";
}
i.icon.vuejs:before {
  content: "\f41f";
}
i.icon.warehouse:before {
  content: "\f494";
}
i.icon.weibo:before {
  content: "\f18a";
}
i.icon.weight:before {
  content: "\f496";
}
i.icon.weixin:before {
  content: "\f1d7";
}
i.icon.whatsapp:before {
  content: "\f232";
}
i.icon.whatsapp.square:before {
  content: "\f40c";
}
i.icon.wheelchair:before {
  content: "\f193";
}
i.icon.whmcs:before {
  content: "\f40d";
}
i.icon.wifi:before {
  content: "\f1eb";
}
i.icon.wikipedia.w:before {
  content: "\f266";
}
i.icon.window.close:before {
  content: "\f410";
}
i.icon.window.maximize:before {
  content: "\f2d0";
}
i.icon.window.minimize:before {
  content: "\f2d1";
}
i.icon.window.restore:before {
  content: "\f2d2";
}
i.icon.windows:before {
  content: "\f17a";
}
i.icon.won.sign:before {
  content: "\f159";
}
i.icon.wordpress:before {
  content: "\f19a";
}
i.icon.wordpress.simple:before {
  content: "\f411";
}
i.icon.wpbeginner:before {
  content: "\f297";
}
i.icon.wpexplorer:before {
  content: "\f2de";
}
i.icon.wpforms:before {
  content: "\f298";
}
i.icon.wrench:before {
  content: "\f0ad";
}
i.icon.xbox:before {
  content: "\f412";
}
i.icon.xing:before {
  content: "\f168";
}
i.icon.xing.square:before {
  content: "\f169";
}
i.icon.y.combinator:before {
  content: "\f23b";
}
i.icon.yahoo:before {
  content: "\f19e";
}
i.icon.yandex:before {
  content: "\f413";
}
i.icon.yandex.international:before {
  content: "\f414";
}
i.icon.yelp:before {
  content: "\f1e9";
}
i.icon.yen.sign:before {
  content: "\f157";
}
i.icon.yoast:before {
  content: "\f2b1";
}
i.icon.youtube:before {
  content: "\f167";
}
i.icon.youtube.square:before {
  content: "\f431";
}

/* Aliases */
i.icon.chess.rock:before {
  content: "\f447";
}
i.icon.ordered.list:before {
  content: "\f0cb";
}
i.icon.unordered.list:before {
  content: "\f0ca";
}
i.icon.user.doctor:before {
  content: "\f0f0";
}
i.icon.shield:before {
  content: "\f3ed";
}
i.icon.puzzle:before {
  content: "\f12e";
}
i.icon.credit.card.amazon.pay:before {
  content: "\f42d";
}
i.icon.credit.card.american.express:before {
  content: "\f1f3";
}
i.icon.credit.card.diners.club:before {
  content: "\f24c";
}
i.icon.credit.card.discover:before {
  content: "\f1f2";
}
i.icon.credit.card.jcb:before {
  content: "\f24b";
}
i.icon.credit.card.mastercard:before {
  content: "\f1f1";
}
i.icon.credit.card.paypal:before {
  content: "\f1f4";
}
i.icon.credit.card.stripe:before {
  content: "\f1f5";
}
i.icon.credit.card.visa:before {
  content: "\f1f0";
}
i.icon.add.circle:before {
  content: "\f055";
}
i.icon.add.square:before {
  content: "\f0fe";
}
i.icon.add.to.calendar:before {
  content: "\f271";
}
i.icon.add.to.cart:before {
  content: "\f217";
}
i.icon.add.user:before {
  content: "\f234";
}
i.icon.add:before {
  content: "\f067";
}
i.icon.alarm.mute:before {
  content: "\f1f6";
}
i.icon.alarm:before {
  content: "\f0f3";
}
i.icon.ald:before {
  content: "\f2a2";
}
i.icon.als:before {
  content: "\f2a2";
}
i.icon.american.express.card:before {
  content: "\f1f3";
}
i.icon.american.express:before {
  content: "\f1f3";
}
i.icon.amex:before {
  content: "\f1f3";
}
i.icon.announcement:before {
  content: "\f0a1";
}
i.icon.area.chart:before {
  content: "\f1fe";
}
i.icon.area.graph:before {
  content: "\f1fe";
}
i.icon.arrow.down.cart:before {
  content: "\f218";
}
i.icon.asexual:before {
  content: "\f22d";
}
i.icon.asl.interpreting:before {
  content: "\f2a3";
}
i.icon.asl:before {
  content: "\f2a3";
}
i.icon.assistive.listening.devices:before {
  content: "\f2a2";
}
i.icon.attach:before {
  content: "\f0c6";
}
i.icon.attention:before {
  content: "\f06a";
}
i.icon.balance:before {
  content: "\f24e";
}
i.icon.bar:before {
  content: "\f0fc";
}
i.icon.bathtub:before {
  content: "\f2cd";
}
i.icon.battery.four:before {
  content: "\f240";
}
i.icon.battery.high:before {
  content: "\f241";
}
i.icon.battery.low:before {
  content: "\f243";
}
i.icon.battery.medium:before {
  content: "\f242";
}
i.icon.battery.one:before {
  content: "\f243";
}
i.icon.battery.three:before {
  content: "\f241";
}
i.icon.battery.two:before {
  content: "\f242";
}
i.icon.battery.zero:before {
  content: "\f244";
}
i.icon.birthday:before {
  content: "\f1fd";
}
i.icon.block.layout:before {
  content: "\f009";
}
i.icon.bluetooth.alternative:before {
  content: "\f294";
}
i.icon.broken.chain:before {
  content: "\f127";
}
i.icon.browser:before {
  content: "\f022";
}
i.icon.call.square:before {
  content: "\f098";
}
i.icon.call:before {
  content: "\f095";
}
i.icon.cancel:before {
  content: "\f00d";
}
i.icon.cart:before {
  content: "\f07a";
}
i.icon.cc:before {
  content: "\f20a";
}
i.icon.chain:before {
  content: "\f0c1";
}
i.icon.chat:before {
  content: "\f075";
}
i.icon.checked.calendar:before {
  content: "\f274";
}
i.icon.checkmark:before {
  content: "\f00c";
}
i.icon.circle.notched:before {
  content: "\f1ce";
}
i.icon.close:before {
  content: "\f00d";
}
i.icon.cny:before {
  content: "\f157";
}
i.icon.cocktail:before {
  content: "\f000";
}
i.icon.commenting:before {
  content: "\f27a";
}
i.icon.computer:before {
  content: "\f108";
}
i.icon.configure:before {
  content: "\f0ad";
}
i.icon.content:before {
  content: "\f0c9";
}
i.icon.deafness:before {
  content: "\f2a4";
}
i.icon.delete.calendar:before {
  content: "\f273";
}
i.icon.delete:before {
  content: "\f00d";
}
i.icon.detective:before {
  content: "\f21b";
}
i.icon.diners.club.card:before {
  content: "\f24c";
}
i.icon.diners.club:before {
  content: "\f24c";
}
i.icon.discover.card:before {
  content: "\f1f2";
}
i.icon.discover:before {
  content: "\f1f2";
}
i.icon.discussions:before {
  content: "\f086";
}
i.icon.doctor:before {
  content: "\f0f0";
}
i.icon.dollar:before {
  content: "\f155";
}
i.icon.dont:before {
  content: "\f05e";
}
i.icon.dribble:before {
  content: "\f17d";
}
i.icon.drivers.license:before {
  content: "\f2c2";
}
i.icon.dropdown:before {
  content: "\f0d7";
}
i.icon.eercast:before {
  content: "\f2da";
}
i.icon.emergency:before {
  content: "\f0f9";
}
i.icon.envira.gallery:before {
  content: "\f299";
}
i.icon.erase:before {
  content: "\f12d";
}
i.icon.eur:before {
  content: "\f153";
}
i.icon.euro:before {
  content: "\f153";
}
i.icon.eyedropper:before {
  content: "\f1fb";
}
i.icon.fa:before {
  content: "\f2b4";
}
i.icon.factory:before {
  content: "\f275";
}
i.icon.favorite:before {
  content: "\f005";
}
i.icon.feed:before {
  content: "\f09e";
}
i.icon.female.homosexual:before {
  content: "\f226";
}
i.icon.file.text:before {
  content: "\f15c";
}
i.icon.find:before {
  content: "\f1e5";
}
i.icon.first.aid:before {
  content: "\f0fa";
}
i.icon.five.hundred.pixels:before {
  content: "\f26e";
}
i.icon.fork:before {
  content: "\f126";
}
i.icon.game:before {
  content: "\f11b";
}
i.icon.gay:before {
  content: "\f227";
}
i.icon.gbp:before {
  content: "\f154";
}
i.icon.gittip:before {
  content: "\f184";
}
i.icon.google.plus.circle:before {
  content: "\f2b3";
}
i.icon.google.plus.official:before {
  content: "\f2b3";
}
i.icon.grab:before {
  content: "\f255";
}
i.icon.graduation:before {
  content: "\f19d";
}
i.icon.grid.layout:before {
  content: "\f00a";
}
i.icon.group:before {
  content: "\f0c0";
}
i.icon.h:before {
  content: "\f0fd";
}
i.icon.hand.victory:before {
  content: "\f25b";
}
i.icon.handicap:before {
  content: "\f193";
}
i.icon.hard.of.hearing:before {
  content: "\f2a4";
}
i.icon.header:before {
  content: "\f1dc";
}
i.icon.help.circle:before {
  content: "\f059";
}
i.icon.help:before {
  content: "\f128";
}
i.icon.heterosexual:before {
  content: "\f228";
}
i.icon.hide:before {
  content: "\f070";
}
i.icon.hotel:before {
  content: "\f236";
}
i.icon.hourglass.four:before {
  content: "\f254";
}
i.icon.hourglass.full:before {
  content: "\f254";
}
i.icon.hourglass.one:before {
  content: "\f251";
}
i.icon.hourglass.three:before {
  content: "\f253";
}
i.icon.hourglass.two:before {
  content: "\f252";
}
i.icon.idea:before {
  content: "\f0eb";
}
i.icon.ils:before {
  content: "\f20b";
}
i.icon.in-cart:before {
  content: "\f218";
}
i.icon.inr:before {
  content: "\f156";
}
i.icon.intergender:before {
  content: "\f224";
}
i.icon.intersex:before {
  content: "\f224";
}
i.icon.japan.credit.bureau.card:before {
  content: "\f24b";
}
i.icon.japan.credit.bureau:before {
  content: "\f24b";
}
i.icon.jcb:before {
  content: "\f24b";
}
i.icon.jpy:before {
  content: "\f157";
}
i.icon.krw:before {
  content: "\f159";
}
i.icon.lab:before {
  content: "\f0c3";
}
i.icon.law:before {
  content: "\f24e";
}
i.icon.legal:before {
  content: "\f0e3";
}
i.icon.lesbian:before {
  content: "\f226";
}
i.icon.lightning:before {
  content: "\f0e7";
}
i.icon.like:before {
  content: "\f004";
}
i.icon.line.graph:before {
  content: "\f201";
}
i.icon.linkedin.square:before {
  content: "\f08c";
}
i.icon.linkify:before {
  content: "\f0c1";
}
i.icon.lira:before {
  content: "\f195";
}
i.icon.list.layout:before {
  content: "\f00b";
}
i.icon.magnify:before {
  content: "\f00e";
}
i.icon.mail.forward:before {
  content: "\f064";
}
i.icon.mail.square:before {
  content: "\f199";
}
i.icon.mail:before {
  content: "\f0e0";
}
i.icon.male.homosexual:before {
  content: "\f227";
}
i.icon.man:before {
  content: "\f222";
}
i.icon.marker:before {
  content: "\f041";
}
i.icon.mars.alternate:before {
  content: "\f229";
}
i.icon.mars.horizontal:before {
  content: "\f22b";
}
i.icon.mars.vertical:before {
  content: "\f22a";
}
i.icon.mastercard.card:before {
  content: "\f1f1";
}
i.icon.mastercard:before {
  content: "\f1f1";
}
i.icon.microsoft.edge:before {
  content: "\f282";
}
i.icon.military:before {
  content: "\f0fb";
}
i.icon.ms.edge:before {
  content: "\f282";
}
i.icon.mute:before {
  content: "\f131";
}
i.icon.new.pied.piper:before {
  content: "\f2ae";
}
i.icon.non.binary.transgender:before {
  content: "\f223";
}
i.icon.numbered.list:before {
  content: "\f0cb";
}
i.icon.optinmonster:before {
  content: "\f23c";
}
i.icon.options:before {
  content: "\f1de";
}
i.icon.other.gender.horizontal:before {
  content: "\f22b";
}
i.icon.other.gender.vertical:before {
  content: "\f22a";
}
i.icon.other.gender:before {
  content: "\f229";
}
i.icon.payment:before {
  content: "\f09d";
}
i.icon.paypal.card:before {
  content: "\f1f4";
}
i.icon.pencil.square:before {
  content: "\f14b";
}
i.icon.photo:before {
  content: "\f030";
}
i.icon.picture:before {
  content: "\f03e";
}
i.icon.pie.chart:before {
  content: "\f200";
}
i.icon.pie.graph:before {
  content: "\f200";
}
i.icon.pied.piper.hat:before {
  content: "\f2ae";
}
i.icon.pin:before {
  content: "\f08d";
}
i.icon.plus.cart:before {
  content: "\f217";
}
i.icon.pocket:before {
  content: "\f265";
}
i.icon.point:before {
  content: "\f041";
}
i.icon.pointing.down:before {
  content: "\f0a7";
}
i.icon.pointing.left:before {
  content: "\f0a5";
}
i.icon.pointing.right:before {
  content: "\f0a4";
}
i.icon.pointing.up:before {
  content: "\f0a6";
}
i.icon.pound:before {
  content: "\f154";
}
i.icon.power.cord:before {
  content: "\f1e6";
}
i.icon.power:before {
  content: "\f011";
}
i.icon.privacy:before {
  content: "\f084";
}
i.icon.r.circle:before {
  content: "\f25d";
}
i.icon.rain:before {
  content: "\f0e9";
}
i.icon.record:before {
  content: "\f03d";
}
i.icon.refresh:before {
  content: "\f021";
}
i.icon.remove.circle:before {
  content: "\f057";
}
i.icon.remove.from.calendar:before {
  content: "\f272";
}
i.icon.remove.user:before {
  content: "\f235";
}
i.icon.remove:before {
  content: "\f00d";
}
i.icon.repeat:before {
  content: "\f01e";
}
i.icon.rmb:before {
  content: "\f157";
}
i.icon.rouble:before {
  content: "\f158";
}
i.icon.rub:before {
  content: "\f158";
}
i.icon.ruble:before {
  content: "\f158";
}
i.icon.rupee:before {
  content: "\f156";
}
i.icon.s15:before {
  content: "\f2cd";
}
i.icon.selected.radio:before {
  content: "\f192";
}
i.icon.send:before {
  content: "\f1d8";
}
i.icon.setting:before {
  content: "\f013";
}
i.icon.settings:before {
  content: "\f085";
}
i.icon.shekel:before {
  content: "\f20b";
}
i.icon.sheqel:before {
  content: "\f20b";
}
i.icon.shipping:before {
  content: "\f0d1";
}
i.icon.shop:before {
  content: "\f07a";
}
i.icon.shuffle:before {
  content: "\f074";
}
i.icon.shutdown:before {
  content: "\f011";
}
i.icon.sidebar:before {
  content: "\f0c9";
}
i.icon.signing:before {
  content: "\f2a7";
}
i.icon.signup:before {
  content: "\f044";
}
i.icon.sliders:before {
  content: "\f1de";
}
i.icon.soccer:before {
  content: "\f1e3";
}
i.icon.sort.alphabet.ascending:before {
  content: "\f15d";
}
i.icon.sort.alphabet.descending:before {
  content: "\f15e";
}
i.icon.sort.ascending:before {
  content: "\f0de";
}
i.icon.sort.content.ascending:before {
  content: "\f160";
}
i.icon.sort.content.descending:before {
  content: "\f161";
}
i.icon.sort.descending:before {
  content: "\f0dd";
}
i.icon.sort.numeric.ascending:before {
  content: "\f162";
}
i.icon.sort.numeric.descending:before {
  content: "\f163";
}
i.icon.sound:before {
  content: "\f025";
}
i.icon.spy:before {
  content: "\f21b";
}
i.icon.stripe.card:before {
  content: "\f1f5";
}
i.icon.student:before {
  content: "\f19d";
}
i.icon.talk:before {
  content: "\f27a";
}
i.icon.target:before {
  content: "\f140";
}
i.icon.teletype:before {
  content: "\f1e4";
}
i.icon.television:before {
  content: "\f26c";
}
i.icon.text.cursor:before {
  content: "\f246";
}
i.icon.text.telephone:before {
  content: "\f1e4";
}
i.icon.theme.isle:before {
  content: "\f2b2";
}
i.icon.theme:before {
  content: "\f043";
}
i.icon.thermometer:before {
  content: "\f2c7";
}
i.icon.thumb.tack:before {
  content: "\f08d";
}
i.icon.time:before {
  content: "\f017";
}
i.icon.tm:before {
  content: "\f25c";
}
i.icon.toggle.down:before {
  content: "\f150";
}
i.icon.toggle.left:before {
  content: "\f191";
}
i.icon.toggle.right:before {
  content: "\f152";
}
i.icon.toggle.up:before {
  content: "\f151";
}
i.icon.translate:before {
  content: "\f1ab";
}
i.icon.travel:before {
  content: "\f0b1";
}
i.icon.treatment:before {
  content: "\f0f1";
}
i.icon.triangle.down:before {
  content: "\f0d7";
}
i.icon.triangle.left:before {
  content: "\f0d9";
}
i.icon.triangle.right:before {
  content: "\f0da";
}
i.icon.triangle.up:before {
  content: "\f0d8";
}
i.icon.try:before {
  content: "\f195";
}
i.icon.unhide:before {
  content: "\f06e";
}
i.icon.unlinkify:before {
  content: "\f127";
}
i.icon.unmute:before {
  content: "\f130";
}
i.icon.usd:before {
  content: "\f155";
}
i.icon.user.cancel:before {
  content: "\f235";
}
i.icon.user.close:before {
  content: "\f235";
}
i.icon.user.delete:before {
  content: "\f235";
}
i.icon.user.x:before {
  content: "\f235";
}
i.icon.vcard:before {
  content: "\f2bb";
}
i.icon.video.camera:before {
  content: "\f03d";
}
i.icon.video.play:before {
  content: "\f144";
}
i.icon.visa.card:before {
  content: "\f1f0";
}
i.icon.visa:before {
  content: "\f1f0";
}
i.icon.volume.control.phone:before {
  content: "\f2a0";
}
i.icon.wait:before {
  content: "\f017";
}
i.icon.warning.circle:before {
  content: "\f06a";
}
i.icon.warning.sign:before {
  content: "\f071";
}
i.icon.warning:before {
  content: "\f12a";
}
i.icon.wechat:before {
  content: "\f1d7";
}
i.icon.wi-fi:before {
  content: "\f1eb";
}
i.icon.wikipedia:before {
  content: "\f266";
}
i.icon.winner:before {
  content: "\f091";
}
i.icon.wizard:before {
  content: "\f0d0";
}
i.icon.woman:before {
  content: "\f221";
}
i.icon.won:before {
  content: "\f159";
}
i.icon.wordpress.beginner:before {
  content: "\f297";
}
i.icon.wordpress.forms:before {
  content: "\f298";
}
i.icon.world:before {
  content: "\f0ac";
}
i.icon.write.square:before {
  content: "\f14b";
}
i.icon.x:before {
  content: "\f00d";
}
i.icon.yc:before {
  content: "\f23b";
}
i.icon.ycombinator:before {
  content: "\f23b";
}
i.icon.yen:before {
  content: "\f157";
}
i.icon.zip:before {
  content: "\f187";
}
i.icon.zoom-in:before {
  content: "\f00e";
}
i.icon.zoom-out:before {
  content: "\f010";
}
i.icon.zoom:before {
  content: "\f00e";
}
i.icon.bitbucket.square:before {
  content: "\f171";
}
i.icon.checkmark.box:before {
  content: "\f14a";
}
i.icon.circle.thin:before {
  content: "\f111";
}
i.icon.cloud.download:before {
  content: "\f381";
}
i.icon.cloud.upload:before {
  content: "\f382";
}
i.icon.compose:before {
  content: "\f303";
}
i.icon.conversation:before {
  content: "\f086";
}
i.icon.credit.card.alternative:before {
  content: "\f09d";
}
i.icon.currency:before {
  content: "\f3d1";
}
i.icon.dashboard:before {
  content: "\f3fd";
}
i.icon.diamond:before {
  content: "\f3a5";
}
i.icon.disk:before {
  content: "\f0a0";
}
i.icon.exchange:before {
  content: "\f362";
}
i.icon.external.share:before {
  content: "\f14d";
}
i.icon.external.square:before {
  content: "\f360";
}
i.icon.external:before {
  content: "\f35d";
}
i.icon.facebook.official:before {
  content: "\f082";
}
i.icon.food:before {
  content: "\f2e7";
}
i.icon.hourglass.zero:before {
  content: "\f253";
}
i.icon.level.down:before {
  content: "\f3be";
}
i.icon.level.up:before {
  content: "\f3bf";
}
i.icon.logout:before {
  content: "\f2f5";
}
i.icon.meanpath:before {
  content: "\f0c8";
}
i.icon.money:before {
  content: "\f3d1";
}
i.icon.move:before {
  content: "\f0b2";
}
i.icon.pencil:before {
  content: "\f303";
}
i.icon.protect:before {
  content: "\f023";
}
i.icon.radio:before {
  content: "\f192";
}
i.icon.remove.bookmark:before {
  content: "\f02e";
}
i.icon.resize.horizontal:before {
  content: "\f337";
}
i.icon.resize.vertical:before {
  content: "\f338";
}
i.icon.sign-in:before {
  content: "\f2f6";
}
i.icon.sign-out:before {
  content: "\f2f5";
}
i.icon.spoon:before {
  content: "\f2e5";
}
i.icon.star.half.empty:before {
  content: "\f089";
}
i.icon.star.half.full:before {
  content: "\f089";
}
i.icon.ticket:before {
  content: "\f3ff";
}
i.icon.times.rectangle:before {
  content: "\f410";
}
i.icon.write:before {
  content: "\f303";
}
i.icon.youtube.play:before {
  content: "\f167";
}


/*******************************
        Outline Icons
*******************************/


/* Outline Icon */

/* Load & Define Icon Font */
@font-face {
  font-family: 'outline-icons';
  src: url("./../themes/default/assets/fonts/outline-icons.eot");
  src: url("./../themes/default/assets/fonts/outline-icons.eot?#iefix") format('embedded-opentype'), url("./../themes/default/assets/fonts/outline-icons.woff2") format('woff2'), url("./../themes/default/assets/fonts/outline-icons.woff") format('woff'), url("./../themes/default/assets/fonts/outline-icons.ttf") format('truetype'), url("./../themes/default/assets/fonts/outline-icons.svg#icons") format('svg');
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-decoration: inherit;
  text-transform: none;
}
i.icon.outline {
  font-family: 'outline-icons';
}

/* Icon Definitions */
i.icon.address.book.outline:before {
  content: "\f2b9";
}
i.icon.address.card.outline:before {
  content: "\f2bb";
}
i.icon.arrow.alternate.circle.down.outline:before {
  content: "\f358";
}
i.icon.arrow.alternate.circle.left.outline:before {
  content: "\f359";
}
i.icon.arrow.alternate.circle.right.outline:before {
  content: "\f35a";
}
i.icon.arrow.alternate.circle.up.outline:before {
  content: "\f35b";
}
i.icon.bell.outline:before {
  content: "\f0f3";
}
i.icon.bell.slash.outline:before {
  content: "\f1f6";
}
i.icon.bookmark.outline:before {
  content: "\f02e";
}
i.icon.building.outline:before {
  content: "\f1ad";
}
i.icon.calendar.outline:before {
  content: "\f133";
}
i.icon.calendar.alternate.outline:before {
  content: "\f073";
}
i.icon.calendar.check.outline:before {
  content: "\f274";
}
i.icon.calendar.minus.outline:before {
  content: "\f272";
}
i.icon.calendar.plus.outline:before {
  content: "\f271";
}
i.icon.calendar.times.outline:before {
  content: "\f273";
}
i.icon.caret.square.down.outline:before {
  content: "\f150";
}
i.icon.caret.square.left.outline:before {
  content: "\f191";
}
i.icon.caret.square.right.outline:before {
  content: "\f152";
}
i.icon.caret.square.up.outline:before {
  content: "\f151";
}
i.icon.chart.bar.outline:before {
  content: "\f080";
}
i.icon.check.circle.outline:before {
  content: "\f058";
}
i.icon.check.square.outline:before {
  content: "\f14a";
}
i.icon.circle.outline:before {
  content: "\f111";
}
i.icon.clipboard.outline:before {
  content: "\f328";
}
i.icon.clock.outline:before {
  content: "\f017";
}
i.icon.clone.outline:before {
  content: "\f24d";
}
i.icon.closed.captioning.outline:before {
  content: "\f20a";
}
i.icon.comment.outline:before {
  content: "\f075";
}
i.icon.comment.alternate.outline:before {
  content: "\f27a";
}
i.icon.comments.outline:before {
  content: "\f086";
}
i.icon.compass.outline:before {
  content: "\f14e";
}
i.icon.copy.outline:before {
  content: "\f0c5";
}
i.icon.copyright.outline:before {
  content: "\f1f9";
}
i.icon.credit.card.outline:before {
  content: "\f09d";
}
i.icon.dot.circle.outline:before {
  content: "\f192";
}
i.icon.edit.outline:before {
  content: "\f044";
}
i.icon.envelope.outline:before {
  content: "\f0e0";
}
i.icon.envelope.open.outline:before {
  content: "\f2b6";
}
i.icon.eye.slash.outline:before {
  content: "\f070";
}
i.icon.file.outline:before {
  content: "\f15b";
}
i.icon.file.alternate.outline:before {
  content: "\f15c";
}
i.icon.file.archive.outline:before {
  content: "\f1c6";
}
i.icon.file.audio.outline:before {
  content: "\f1c7";
}
i.icon.file.code.outline:before {
  content: "\f1c9";
}
i.icon.file.excel.outline:before {
  content: "\f1c3";
}
i.icon.file.image.outline:before {
  content: "\f1c5";
}
i.icon.file.pdf.outline:before {
  content: "\f1c1";
}
i.icon.file.powerpoint.outline:before {
  content: "\f1c4";
}
i.icon.file.video.outline:before {
  content: "\f1c8";
}
i.icon.file.word.outline:before {
  content: "\f1c2";
}
i.icon.flag.outline:before {
  content: "\f024";
}
i.icon.folder.outline:before {
  content: "\f07b";
}
i.icon.folder.open.outline:before {
  content: "\f07c";
}
i.icon.frown.outline:before {
  content: "\f119";
}
i.icon.futbol.outline:before {
  content: "\f1e3";
}
i.icon.gem.outline:before {
  content: "\f3a5";
}
i.icon.hand.lizard.outline:before {
  content: "\f258";
}
i.icon.hand.paper.outline:before {
  content: "\f256";
}
i.icon.hand.peace.outline:before {
  content: "\f25b";
}
i.icon.hand.point.down.outline:before {
  content: "\f0a7";
}
i.icon.hand.point.left.outline:before {
  content: "\f0a5";
}
i.icon.hand.point.right.outline:before {
  content: "\f0a4";
}
i.icon.hand.point.up.outline:before {
  content: "\f0a6";
}
i.icon.hand.pointer.outline:before {
  content: "\f25a";
}
i.icon.hand.rock.outline:before {
  content: "\f255";
}
i.icon.hand.scissors.outline:before {
  content: "\f257";
}
i.icon.hand.spock.outline:before {
  content: "\f259";
}
i.icon.handshake.outline:before {
  content: "\f2b5";
}
i.icon.hdd.outline:before {
  content: "\f0a0";
}
i.icon.heart.outline:before {
  content: "\f004";
}
i.icon.hospital.outline:before {
  content: "\f0f8";
}
i.icon.hourglass.outline:before {
  content: "\f254";
}
i.icon.id.badge.outline:before {
  content: "\f2c1";
}
i.icon.id.card.outline:before {
  content: "\f2c2";
}
i.icon.image.outline:before {
  content: "\f03e";
}
i.icon.images.outline:before {
  content: "\f302";
}
i.icon.keyboard.outline:before {
  content: "\f11c";
}
i.icon.lemon.outline:before {
  content: "\f094";
}
i.icon.life.ring.outline:before {
  content: "\f1cd";
}
i.icon.lightbulb.outline:before {
  content: "\f0eb";
}
i.icon.list.alternate.outline:before {
  content: "\f022";
}
i.icon.map.outline:before {
  content: "\f279";
}
i.icon.meh.outline:before {
  content: "\f11a";
}
i.icon.minus.square.outline:before {
  content: "\f146";
}
i.icon.money.bill.alternate.outline:before {
  content: "\f3d1";
}
i.icon.moon.outline:before {
  content: "\f186";
}
i.icon.newspaper.outline:before {
  content: "\f1ea";
}
i.icon.object.group.outline:before {
  content: "\f247";
}
i.icon.object.ungroup.outline:before {
  content: "\f248";
}
i.icon.paper.plane.outline:before {
  content: "\f1d8";
}
i.icon.pause.circle.outline:before {
  content: "\f28b";
}
i.icon.play.circle.outline:before {
  content: "\f144";
}
i.icon.plus.square.outline:before {
  content: "\f0fe";
}
i.icon.question.circle.outline:before {
  content: "\f059";
}
i.icon.registered.outline:before {
  content: "\f25d";
}
i.icon.save.outline:before {
  content: "\f0c7";
}
i.icon.share.square.outline:before {
  content: "\f14d";
}
i.icon.smile.outline:before {
  content: "\f118";
}
i.icon.snowflake.outline:before {
  content: "\f2dc";
}
i.icon.square.outline:before {
  content: "\f0c8";
}
i.icon.star.outline:before {
  content: "\f005";
}
i.icon.star.half.outline:before {
  content: "\f089";
}
i.icon.sticky.note.outline:before {
  content: "\f249";
}
i.icon.stop.circle.outline:before {
  content: "\f28d";
}
i.icon.sun.outline:before {
  content: "\f185";
}
i.icon.thumbs.down.outline:before {
  content: "\f165";
}
i.icon.thumbs.up.outline:before {
  content: "\f164";
}
i.icon.times.circle.outline:before {
  content: "\f057";
}
i.icon.trash.alternate.outline:before {
  content: "\f2ed";
}
i.icon.user.outline:before {
  content: "\f007";
}
i.icon.user.circle.outline:before {
  content: "\f2bd";
}
i.icon.window.close.outline:before {
  content: "\f410";
}
i.icon.window.maximize.outline:before {
  content: "\f2d0";
}
i.icon.window.minimize.outline:before {
  content: "\f2d1";
}
i.icon.window.restore.outline:before {
  content: "\f2d2";
}

/* Outline Aliases */
i.icon.disk.outline:before {
  content: "\f0a0";
}
i.icon.heart.empty,
i.icon.star.empty {
  font-family: 'outline-icons';
}
i.icon.heart.empty:before {
  content: "\f004";
}
i.icon.star.empty:before {
  content: "\f089";
}


/*******************************
           Brand Icons
*******************************/


/* Load & Define Brand Font */
@font-face {
  font-family: 'brand-icons';
  src: url("./../themes/default/assets/fonts/brand-icons.eot");
  src: url("./../themes/default/assets/fonts/brand-icons.eot?#iefix") format('embedded-opentype'), url("./../themes/default/assets/fonts/brand-icons.woff2") format('woff2'), url("./../themes/default/assets/fonts/brand-icons.woff") format('woff'), url("./../themes/default/assets/fonts/brand-icons.ttf") format('truetype'), url("./../themes/default/assets/fonts/brand-icons.svg#icons") format('svg');
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-decoration: inherit;
  text-transform: none;
}

/* Brand Icon Font Family */
i.icon.\35 00px,
i.icon.accessible.icon,
i.icon.accusoft,
i.icon.adn,
i.icon.adversal,
i.icon.affiliatetheme,
i.icon.algolia,
i.icon.amazon,
i.icon.amazon.pay,
i.icon.amilia,
i.icon.android,
i.icon.angellist,
i.icon.angrycreative,
i.icon.angular,
i.icon.app.store,
i.icon.app.store.ios,
i.icon.apper,
i.icon.apple,
i.icon.apple.pay,
i.icon.asymmetrik,
i.icon.audible,
i.icon.autoprefixer,
i.icon.avianex,
i.icon.aviato,
i.icon.aws,
i.icon.bandcamp,
i.icon.behance,
i.icon.behance.square,
i.icon.bimobject,
i.icon.bitbucket,
i.icon.bitcoin,
i.icon.bity,
i.icon.black.tie,
i.icon.blackberry,
i.icon.blogger,
i.icon.blogger.b,
i.icon.bluetooth,
i.icon.bluetooth.b,
i.icon.btc,
i.icon.buromobelexperte,
i.icon.buysellads,
i.icon.cc.amazon.pay,
i.icon.cc.amex,
i.icon.cc.apple.pay,
i.icon.cc.diners.club,
i.icon.cc.discover,
i.icon.cc.jcb,
i.icon.cc.mastercard,
i.icon.cc.paypal,
i.icon.cc.stripe,
i.icon.cc.visa,
i.icon.centercode,
i.icon.chrome,
i.icon.cloudscale,
i.icon.cloudsmith,
i.icon.cloudversify,
i.icon.codepen,
i.icon.codiepie,
i.icon.connectdevelop,
i.icon.contao,
i.icon.cpanel,
i.icon.creative.commons,
i.icon.css3,
i.icon.css3.alternate,
i.icon.cuttlefish,
i.icon.d.and.d,
i.icon.dashcube,
i.icon.delicious,
i.icon.deploydog,
i.icon.deskpro,
i.icon.deviantart,
i.icon.digg,
i.icon.digital.ocean,
i.icon.discord,
i.icon.discourse,
i.icon.dochub,
i.icon.docker,
i.icon.draft2digital,
i.icon.dribbble,
i.icon.dribbble.square,
i.icon.dropbox,
i.icon.drupal,
i.icon.dyalog,
i.icon.earlybirds,
i.icon.edge,
i.icon.elementor,
i.icon.ember,
i.icon.empire,
i.icon.envira,
i.icon.erlang,
i.icon.ethereum,
i.icon.etsy,
i.icon.expeditedssl,
i.icon.facebook,
i.icon.facebook.f,
i.icon.facebook.messenger,
i.icon.facebook.square,
i.icon.firefox,
i.icon.first.order,
i.icon.firstdraft,
i.icon.flickr,
i.icon.flipboard,
i.icon.fly,
i.icon.font.awesome,
i.icon.font.awesome.alternate,
i.icon.font.awesome.flag,
i.icon.fonticons,
i.icon.fonticons.fi,
i.icon.fort.awesome,
i.icon.fort.awesome.alternate,
i.icon.forumbee,
i.icon.foursquare,
i.icon.free.code.camp,
i.icon.freebsd,
i.icon.get.pocket,
i.icon.gg,
i.icon.gg.circle,
i.icon.git,
i.icon.git.square,
i.icon.github,
i.icon.github.alternate,
i.icon.github.square,
i.icon.gitkraken,
i.icon.gitlab,
i.icon.gitter,
i.icon.glide,
i.icon.glide.g,
i.icon.gofore,
i.icon.goodreads,
i.icon.goodreads.g,
i.icon.google,
i.icon.google.drive,
i.icon.google.play,
i.icon.google.plus,
i.icon.google.plus.g,
i.icon.google.plus.square,
i.icon.google.wallet,
i.icon.gratipay,
i.icon.grav,
i.icon.gripfire,
i.icon.grunt,
i.icon.gulp,
i.icon.hacker.news,
i.icon.hacker.news.square,
i.icon.hips,
i.icon.hire.a.helper,
i.icon.hooli,
i.icon.hotjar,
i.icon.houzz,
i.icon.html5,
i.icon.hubspot,
i.icon.imdb,
i.icon.instagram,
i.icon.internet.explorer,
i.icon.ioxhost,
i.icon.itunes,
i.icon.itunes.note,
i.icon.jenkins,
i.icon.joget,
i.icon.joomla,
i.icon.js,
i.icon.js.square,
i.icon.jsfiddle,
i.icon.keycdn,
i.icon.kickstarter,
i.icon.kickstarter.k,
i.icon.korvue,
i.icon.laravel,
i.icon.lastfm,
i.icon.lastfm.square,
i.icon.leanpub,
i.icon.less,
i.icon.linechat,
i.icon.linkedin,
i.icon.linkedin.alternate,
i.icon.linkedin.in,
i.icon.linode,
i.icon.linux,
i.icon.lyft,
i.icon.magento,
i.icon.maxcdn,
i.icon.medapps,
i.icon.medium,
i.icon.medium.m,
i.icon.medrt,
i.icon.meetup,
i.icon.microsoft,
i.icon.mix,
i.icon.mixcloud,
i.icon.mizuni,
i.icon.modx,
i.icon.monero,
i.icon.napster,
i.icon.nintendo.switch,
i.icon.node,
i.icon.node.js,
i.icon.npm,
i.icon.ns8,
i.icon.nutritionix,
i.icon.odnoklassniki,
i.icon.odnoklassniki.square,
i.icon.opencart,
i.icon.openid,
i.icon.opera,
i.icon.optin.monster,
i.icon.osi,
i.icon.page4,
i.icon.pagelines,
i.icon.palfed,
i.icon.patreon,
i.icon.paypal,
i.icon.periscope,
i.icon.phabricator,
i.icon.phoenix.framework,
i.icon.php,
i.icon.pied.piper,
i.icon.pied.piper.alternate,
i.icon.pied.piper.pp,
i.icon.pinterest,
i.icon.pinterest.p,
i.icon.pinterest.square,
i.icon.playstation,
i.icon.product.hunt,
i.icon.pushed,
i.icon.python,
i.icon.qq,
i.icon.quinscape,
i.icon.quora,
i.icon.ravelry,
i.icon.react,
i.icon.rebel,
i.icon.redriver,
i.icon.reddit,
i.icon.reddit.alien,
i.icon.reddit.square,
i.icon.rendact,
i.icon.renren,
i.icon.replyd,
i.icon.resolving,
i.icon.rocketchat,
i.icon.rockrms,
i.icon.safari,
i.icon.sass,
i.icon.schlix,
i.icon.scribd,
i.icon.searchengin,
i.icon.sellcast,
i.icon.sellsy,
i.icon.servicestack,
i.icon.shirtsinbulk,
i.icon.simplybuilt,
i.icon.sistrix,
i.icon.skyatlas,
i.icon.skype,
i.icon.slack,
i.icon.slack.hash,
i.icon.slideshare,
i.icon.snapchat,
i.icon.snapchat.ghost,
i.icon.snapchat.square,
i.icon.soundcloud,
i.icon.speakap,
i.icon.spotify,
i.icon.stack.exchange,
i.icon.stack.overflow,
i.icon.staylinked,
i.icon.steam,
i.icon.steam.square,
i.icon.steam.symbol,
i.icon.sticker.mule,
i.icon.strava,
i.icon.stripe,
i.icon.stripe.s,
i.icon.studiovinari,
i.icon.stumbleupon,
i.icon.stumbleupon.circle,
i.icon.superpowers,
i.icon.supple,
i.icon.telegram,
i.icon.telegram.plane,
i.icon.tencent.weibo,
i.icon.themeisle,
i.icon.trello,
i.icon.tripadvisor,
i.icon.tumblr,
i.icon.tumblr.square,
i.icon.twitch,
i.icon.twitter,
i.icon.twitter.square,
i.icon.typo3,
i.icon.uber,
i.icon.uikit,
i.icon.uniregistry,
i.icon.untappd,
i.icon.usb,
i.icon.ussunnah,
i.icon.vaadin,
i.icon.viacoin,
i.icon.viadeo,
i.icon.viadeo.square,
i.icon.viber,
i.icon.vimeo,
i.icon.vimeo.square,
i.icon.vimeo.v,
i.icon.vine,
i.icon.vk,
i.icon.vnv,
i.icon.vuejs,
i.icon.wechat,
i.icon.weibo,
i.icon.weixin,
i.icon.whatsapp,
i.icon.whatsapp.square,
i.icon.whmcs,
i.icon.wikipedia.w,
i.icon.windows,
i.icon.wordpress,
i.icon.wordpress.simple,
i.icon.wpbeginner,
i.icon.wpexplorer,
i.icon.wpforms,
i.icon.xbox,
i.icon.xing,
i.icon.xing.square,
i.icon.y.combinator,
i.icon.yahoo,
i.icon.yandex,
i.icon.yandex.international,
i.icon.yelp,
i.icon.yoast,
i.icon.youtube,
i.icon.youtube.square {
  font-family: 'brand-icons';
}

/* Brand Icons Ideally Would Be Defined Here */


/*******************************
         Site Overrides
*******************************/


  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h1 class="ui inverted image header">
      <img src="assets/images/Product.png" class="image"><br>
      <div class="content">
LOGIN
      </div>
      
    </h1>
    <form method="post" action="#" class="ui large form">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="user" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <input type="submit" name="submit" value="Login" class="ui fluid large teal submit button">
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>

</body>

</html>
