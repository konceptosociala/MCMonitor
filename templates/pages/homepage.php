<?php $this->layout('layout', ['title' => 'Homepage']) ?>

<section class="main-section container-fluid text-center">
    <h1 class="display-1">MCMonitor</h1>
    <h2 class="display-5">Free Minecraft server monitoring</h2>
    <button class="btn btn-success bg-gradient m-3 py-3 px-5 text-uppercase">Add server</button>
</section>
<section class="servers-section pb-5">
    <h1 class="display-2 text-center m-4 text-dark">Top Servers</h1>

    <?php $this->insert('components/server', [
        'name' => 'gummercraft',
        'logo' => 'https://minotar.net/avatar/ez/512',
        'title' => 'GummerCraft',
        'description' => 'Ukrainian Minecraft server HammerCraft is looking for you. HammerCraft is the first cross-platform minecraft server in Ukraine! You can play on the server both from PC and from smartphones on Bedrock Edition! Version on the server: 1.18.2 (you can enter from versions 1.8-1.19.2) We have: - a system of servers for any taste and color - a main server with economy and clan wars - a hardcore server - an anarchy server without rules and plugins - a creative server for realizing all your fantasies',
        'ip' => 'gummercraft.fun',
        'version' => '1.7.10',
    ]); ?>
    
</section>
