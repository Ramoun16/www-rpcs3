<!DOCTYPE html>
<html lang="en-US">
<head>
<title>RPCS3 - Quickstart</title>
<meta charset="UTF-8">
<meta name="description" content="RPCS3 is an open-source Sony PlayStation 3 emulator and debugger written in C++ for Windows and Linux.">
<meta name="keywords" content="rpcs3, ps3, PlayStation 3, emulator, nekotekina, quickstart">
<meta name="author" content="RPCS3">
<meta name="copyright" content="RPCS3">
<meta name="google-site-verification" content="cO1o6sx54cvKxhbnYsABWtl4sYFj9uVKV0DxLKZkWv8"/>
<?php include 'lib/module/call-meta.php';?>
<?php include 'lib/module/call-sys.php';?>
</head>
<body>
<?php include 'lib/module/call-php.php';?>
<div id="page-con-content">
	<div id="header-con-head">
		<div id='header-img-head' class="dynamic-banner">
		</div>
		<div id='header-con-overlay'>
		</div>
		<div id='header-con-body'>
			<div id='header-tx1-body'>
				<h1>QUICKSTART</h1>
			</div>
			<div id='header-tx2-body'>
				<p>
					 Get started using RPCS3 on your PC
				</p>
			</div>
		</div>
	</div>
	<div id="page-con-container">
		<div id="page-in-container">
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>System Requirements</h2>
			</div>
			<!-- End -->
			<?php include 'lib/module/block-requirements.php';?>
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>Updating RPCS3</h2>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>How do I update RPCS3 when a new build is released?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 To update RPCS3, all you need to do is drag and drop the <b>executable</b> to the root directory of your RPCS3 installation. Moving over additional files and folders is not necessary and may overwrite your user settings.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>Firmware Files</h2>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>How can I obtain and install PlayStation 3 firmware files?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 Due to copyright, these files cannot be distributed by us and must be self-dumped from your own PlayStation 3 system. Alternatively you can download the latest PlayStation 3 firmware update file from <a href="https://www.playstation.com/en-us/support/system-updates/ps3/">PlayStation.com</a> if you are legally allowed to do so. Once downloaded, you can install the firmware using RPCS3's built in Firmware Installer found under Tools > Install Firmware. The files will then be installed and then correctly placed in their appropriate directories.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						</h2>
						 How do I know which firmware modules to use?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							Firmware modules are selected automatically based on the PlayStation 3 game or software that is loaded. You can still override automatic module selection and choose which firmware modules you want to use manually, but it is not recommended to do so unless you know what you're doing.
						</p>
						<br>
						<p>
							<b>Automatically load required libraries:</b> Loads all required modules at once from a list. Recommended option that works with most games, but may not work with some that only work on Load liblv2.sprx only.
						</p>
						<p>
							<b>Load liblv2.sprx only:</b> Loads modules dynamically, more closely to what a PlayStation 3 would do. Some games may not work properly with this option yet.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>Game Files</h2>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Where do I manage my PlayStation 3 save data?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 • PlayStation 3 save data files can be managed in: <b>\dev_hdd0\home\00000001\savedata\</b>
						</p>
						<p>
							 • Please note that save data is stored in folders that correspond to your game's ID.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Managing PlayStation 3 games and software</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 Again, due to copyright and obvious legal reasons, PlayStation 3 games and software cannot be distributed online and must be self-dumped from your own PlayStation 3 console (Both disc and PSN games) or from your computer using a compatible Blu-Ray drive (Disc games only).
						</p>
						<br>
						<p>
							 The typical layout of a <b>Blu-ray Disc</b> game's root directory:
						</p>
						<p>
							 • PS3_GAME folder (required), PS3_DISC.sfb (required), PS3_UPDATE folder (not required)
						</p>
						<br>
						<p>
							 The typical layout of a <b>PlayStation Network </b> game's root directory:
						</p>
						<p>
							 • TROPDIR folder, USRDIR folder, ICON0.png, PARAM.sfo, etc
						</p>
						<br>
						<p>
							 Both Blu-ray and PlayStation Network games must be placed in a single folder with their respective files and the folder name must correspond to the game's ID. If you are not sure what your dumped game's region ID is, you can find your region ID on the bottom side-edge of your game case. If you are no longer in possession of your game case or your game is a PlayStation Network game, you can do an internet search for your "Your Game Name Here + Region ID". Please note that it is very important you use the correct region ID.
						</p>
						<br>
						<p>
							 • For example: <b>BCUS00000</b> is a USA <b>Blu-ray Disc</b> game
						</p>
						<p>
							 • For example: <b>NPUA00000</b> is a USA <b>PlayStation Network</b> game
						</p>
						<br>
						<p>
							 When working with actual game region IDs, the game's region ID will look something similar to this:
						</p>
						<br>
						<p>
							 • For example: <b>BCUS98233</b> is a USA Blu-ray Disc copy of <b>Uncharted 3</b>
						</p>
						<p>
							 • For example: <b>NPUA80472</b> is a USA PlayStation Network copy of <b>LittleBigPlanet</b>
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>Updating and Placement</h2>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Where do I place PlayStation 3 game and software files?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 • .pkg files must be extracted using RPCS3's built in 'Install PKG' option.
						</p>
						<p>
							 • .pkg files will be automatically installed to: <b>\dev_hdd0\game\</b>
						</p>
						<p>
							 • Blu-ray Disc game data can be placed anywhere <b>EXCEPT</b> for <b>\dev_hdd0\game\</b> and must be booted with 'Boot Game'.
						</p>
						<p>
							 • PlayStation Network game data must be placed in: <b>\dev_hdd0\game\</b>
						</p>
						<p>
							 • PlayStation Network .rap files must be placed in: <b>\dev_hdd0\home\00000001\exdata\</b>
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>How do I apply PlayStation 3 game and software updates?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 Game and software updates are handled the exact same way that PlayStation Network .pkg files are. The. pkg update file must be installed using RPCS3's built in 'Install PKG' option. The update will be placed in the game or software folder that corresponds to the correct region ID. Please note that game and software updates must be the same region in order to work. Cross-mixing game or software regions may create irreversible damage to the game or software.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>Obtaining Games</h2>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Where do I get PlayStation 3 games and software?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 Typically, you want to dump your own PlayStation 3 games and software from your own console. We believe that this is the most efficient and safest way to migrate your disc-based games and digital games from your console to your PC. To do this, you will need a PlayStation 3 system with a custom firmware and various software tools that are used to rip/dump games from your system's Blu-ray drive or internal storage.
						</p>
						<br>
						<p>
							 However, you can also dump games using only a computer (<i>only if an .ird file is available online for the decryption of the disc, details below</i>), using select compatible Blu-ray drives. Not every Blu-ray drive will recognize PlayStation 3 games due to how data is formatted on the disc. Here's a compiled list of the known compatible Blu-ray drives that are capable of reading PlayStation game discs:
						</p>
						<br>
						<p>
							 • ASUS <b>BC-12B1ST</b>
						</p>
						<p>
							 • ASUS <b>BC-12D2HT</b>
						</p>
						<p>
							 • ASUS <b>BW-16D1HT</b>
						</p>
						<p>
							 • BENQ <b>BR1000</b>
						</p>
						<p>
							 • Lite-ON <b>DH-4O1S</b>
						</p>
						<p>
							 • LG BD <b>Bh24NS40</b>
						</p>
						<p>
							 • LG BD <b>Bh26NS40</b>
						</p>
						<p>
							 • LG BD <b>Uh12NS30</b>
						</p>
						<p>
							 • LG BD <b>Wh24NS40</b>
						</p>
						<p>
							 • LG BD-RE <b>Wh26NS40</b>
						</p>
						<p>
							 • Sony Optiarc BD <b>5300S</b>
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>How do I dump PlayStation 3 games and software?</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							 You will need two different tools for dumping PlayStation 3 game discs from a computer, using a Blu-ray drive:
						</p>
						<br>
						<p>
							 • <a href='/cdn/tools/patcher.zip' download>PS3 ISO Patcher</a> - By BlackDaemon
						</p>
						<p>
							 • <a href='/cdn/tools/3k3y.zip' download>3k3y ISO Tools</a> - By the 3k3y team
						</p>
						<br>
						<p>
							 1. Insert a PlayStation 3 Blu-ray disc game of your choice.
						</p>
						<p>
							 2. Dump the .iso image using a program like Alcohol 120%.
						</p>
						<p>
							 3. Use <a href="http://jonnysp.bplaced.net">jonnysp.bplaced.net</a> to locate the appropriate .ird file that matches your game ID. If there isn't any .ird file that matches your game ID it means you can't dump that disc using this method.
						</p>
						<p>
							 4. Be sure to check game ID in case of different game editions. You need to use the file for the exact game ID, otherwise it won't work (<i>for example: .ird file for Demon's Souls US disc doesn't work with Demon's Souls EU disc</i>).
						<p>
							 5. Open PS3 ISO Patcher and select your dumped .iso file and its appropriate .ird file.
						</p>
						<p>
							 6. Press Patch to apply the patch to the .iso file.
						</p>
						<p>
							 7. Open 3k3y ISO Tools and decrypt the .iso file.
						</p>
						<p>
							 8. Your game should now be properly decrypted.
						</p>
						<p>
							 9. You must now extract your decrypted .iso file for use with RPCS3.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id="featured-tx1-heading" class="div-heading">
				<h2>Configuring RPCS3</h2>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Core settings</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							<b>PPU Interpreter (Precise)</b><br>
							 Currently not available. Will provides more accurate real-time PPU emulation, but will be slower.
						</p>
						<p>
							<b>PPU Interpreter (Fast)</b><br>
							 Provides fast real-time PPU emulation but is less accurate.
						</p>
						<br>
						<p>
							<b>PPU Recompiler (LLVM)</b><br>
							 LLVM is an AOT recompiler. It pre-caches the ELF/SELF executable and provides both the fastest and most accurate PPU emulation.
						</p>
						<br>
						<p>
							<b>SPU Interpreter (Precise)</b><br>
							 Provides more accurate real-time emulation for SPU cores, but is a lot slower.
						</p>
						<br>
						<p>
							<b>SPU Interpreter (Fast)</b><br>
							 Provides fast real-time SPU emulation, but is less accurate.
						</p>
						<br>
						<p>
							<b>SPU Recompiler (ASMJIT)</b><br>
							 Provides faster real-time SPU emulation with balanced speed and accuracy.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Graphics settings</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							<b>Render</b><br>
							 Allows you to select OpenGL, Vulkan and D3D12 (DirectX 12) renderers that are compatible with your GPU. OpenGL will always be the most accurate renderer followed by Vulkan and then D3D12. This is due to OpenGL receiving bug fixes and implementations ahead of the other renderers.
						</p>
						<br>
						<p>
							<b>Resolution</b><br>
							 Allows you to set the native rendering resolution for the emulated console. Optimal resolutions for testing are 1920x1080 and 1280x720. Not all games will render at 1080p because a real PlayStation 3 doesn't support this resolution on all games.
						</p>
						<br>
						<p>
							<b>D3D Adapter</b><br>
							 Allows you to select your preferred D3D device, required <b>ONLY</b> if you're using D3D12 (DirectX 12) render.
						</p>
						<br>
						<p>
							<b>Aspect Ratio</b><br>
							 Defines the aspect ratio of the the emulated console.
						</p>
						<br>
						<p>
							<b>Frame Limit</b><br>
							 In most cases, this setting should be set to either Off if the game has internal framelocking or Auto if the game doesn't. Otherwise, some games may surpass their 30/60FPS target causing issues such as sped-up gameplay or physics glitches. Games are only intended to run up to 60FPS on a real PlayStation 3.
						</p>
						<br>
						<p>
							<b>Read/Write and Color/Depth Buffers</b><br>
							 These buffers should be disabled for now as they're not working properly with any of the renderers. The buffers are only required for bigger AAA games. Some advanced games like Demon's Souls require the use of the Read Color Buffers options.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Audio settings</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							<b>Audio Out</b><br>
							 Allows you to select your preferred audio driver for the emulated console. The emulator currently supports OpenAL, XAudio2 (Windows-only) and ALSA (Linux-only). XAudio2 should always be used on Windows operating systems for proper audio playback, and ALSA should always be used on Linux systems.
						</p>
						<br>
						<p>
							 If you run into any issues with either audio backends, set the output to Null. This will disable all audio for the emulator.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Input/Output settings</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							<b>Pad Handler</b><br>
							 Allows you to select which handler you want to drive your controller's inputs.
						</p>
						<br>
						<p>
							<b>Keyboard Handler</b><br>
							 Allows you to select which device you want to register emulated console keyboard inputs.
						</p>
						<br>
						<p>
							<b>Mouse Handler</b><br>
							 Allows you to select which device you want to register emulated console mouse inputs and movement.
						</p>
						<br>
						<p>
							<b>Camera</b><br>
							 Allows you to spoof or disable PlayStation 3 compatible cameras.
						</p>
						<br>
						<p>
							<b>Camera Type</b><br>
							 Allows you to select which device you want to input emulated console camera video/audio.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>Networking settings</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							<b>Connection status</b><br>
							 Allows you to spoof an internet connection. Online connectivity is something we're thinking about, but we may not focus on it until RPCS3 is as stable and as accurate as possible.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<div id='featured-con-block'>
				<div id='featured-wrp-block'>
					<div id='featured-tx1-block'>
						<h2>System settings</h2>
					</div>
					<div id='featured-tx2-block'>
						<p>
							<b>Language</b><br>
							 Allows you to change the internal system language of the emulated console. In some rare cases games may fail to go ingame if the system language being used is from a different region than the one of the game.
						</p>
					</div>
				</div>
			</div>
			<!-- End -->
			<a href='/download'>
			<div id='featured-con-button'>
				<div id='featured-wrp-button' style="width: 190px; margin: 0 -95px;">
					<div id='featured-ico-button' style="background:url('/img/icons/buttons/download.png') no-repeat center; background-size: 16px;">
					</div>
					<div id='featured-tx1-button'>
						<p>
							 Download Latest Build
						</p>
					</div>
				</div>
			</div>
			</a>
			<!-- End -->
		</div>
	</div>
<!-- End -->
	<?php include 'lib/module/ui-footer.php';?>
<!-- End -->
</div>
</body>
</html>