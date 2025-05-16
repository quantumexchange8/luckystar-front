<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth; overflow-x: hidden;">

<x-head/>

<body class="<?php echo (isset($bodyClass) ?  $bodyClass   : 'rbt-header-sticky')?>">

    @include('layout.header')
    <?php 

        if (!isset($switcher)) {
            ?>
            <x-switcher/>
            <?php
        }
    ?>

    <?php 

        if (!isset($header)) {
            ?>
            <x-header/>
            <?php
        }
    ?>

    @yield('content')

    <?php 

        if (isset($topToBottom) && $topToBottom === 'true') {
            ?>
            <x-topToBottom />
            <?php
        }
    ?>

    <?php 

        if (isset($footer) && $footer === 'true') {
            ?>
            <x-footer />
            <?php
        }
    ?>
    

    <x-script/>
    
</body>

</html>