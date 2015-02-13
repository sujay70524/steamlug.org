<?php
	$pageTitle = "Cast Guest Guidelines";
	include_once('includes/header.php');
	include_once('includes/paths.php');

	echo <<<DOCUMENT
		<h1 class="text-center">SteamLUG Cast Guest Guidelines <!-- And
		thirdly, the phrase is more what you'd call ‘advice’ than actual guidelines.
		--></h1>
		<article class="panel panel-default">
			<header class="panel-heading">
				<h3 class="panel-title">Guest Guidelines</h3>
			</header>
			<div class="panel-body">
				<p>We’re excited to have you join us! We record our show using
				a common multiplayer chat tool called <a
				href="//mumble.sourceforge.net/">Mumble</a>, we generally have a chatty
				atmosphere to introduce the cast and discuss what we’ve been playing before we
				drop into our guest interview.</p>

				<p>We prefer you being available around 15 minutes before we start, as
				microphone checks (volume levels) and just making you comfortable with us tends
				to make a better atmosphere. Mumble uses a username and access control list
				system to allow us to promote our guests to speakers ‐ if you have an
				often‐used nickname, make us aware so we can get you all sorted beforehand.</p>

				<p>We like to prepare a runsheet ahead of time, on our shared Google Doc and we
				usually give you access to this days before the recording - we welcome you
				adding things you’d like to discuss about your game, or about us/Linux gaming!
				- and our live listeners also have access while we’re recording so they can see
				URLs and possibly share related information as we talk.</p>

				<p>You’re encouraged to mention your game/games/website/twitter, and we're
				always happy to respond to questions that you might have!</p>

				<p>After the conversation portion is complete, we like to record goodbyes even
				if you’re staying around for the rest of the recording—but don’t feel you have
				to, we understand your time is important—just to improve the cast edit.</p>

				<p>We’d like to collect a headshot/avatar (say, your twitter/steam profile
				picture) to use in our notes, and we will contact you a few days after the
				recording with a live link of the cast.</p>

				<p>Here are some helpful URLs and don't be afraid to reach out and ask
				questions if you have any!</p>

				<p><a href="//steamlug.org/cast">SteamLUG Cast Countdown and
				Episode Archive</a><br><a href="//steamlug.org/mumble">SteamLUG
				Mumble Server Details</a><br>Email contact: <a
				href="mailto:cast@steamlug.org">cast@steamlug.org</a></p>

				<p>We look forward to chatting with you on the show!</p>
			</div>
		</article>
DOCUMENT;

	include_once('includes/footer.php');

