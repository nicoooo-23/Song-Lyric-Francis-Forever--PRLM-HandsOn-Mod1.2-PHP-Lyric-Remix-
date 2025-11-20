<?php
    // song information
    $title = "Francis Forever";
    $artist = "Mitski";
    $album = "Bury Me at Makeout Creek";
    $mood = "Melancholy";

    // concatenation using dot operator
    $songInfo = $title . " by " . $artist;

    // string arrays
    $nouns = ["world", "hands", "head", "3 a.m.", "days", "street", "gaps", "sunlight", "anything", "autumn", "summer"];
    $verbs = ["don't know", "do", "put", "trying", "lay", "writing", "need", "see", "been", "think", "stand", "go out", "walking", "end up", "look up", "miss", "comes", "passing"];
    $adjectives = ["best", "sunny", "tree-lined"];

    // numerical variables
    $verseCount = "3";
    $repeatChorus = $verseCount - 2;

    // main lyrics arrays
    $verse1 = [
        "I $verbs[0] what to $verbs[1] without you",
        "I $verbs[0] where to $verbs[2] my $nouns[1]",
        "I've $verbs[8] $verbs[3] to $verbs[4] my $nouns[2] down",
        "But I'm $verbs[5] this at $nouns[3]"
    ];
    $chorus = [
        "I don't $verbs[6] the $nouns[0] to $verbs[7]",
        "That I've $verbs[8] the $adjectives[0] I can be, but",
        "I don't $verbs[9] I could $verbs[10] to be",
        "Where you don't $verbs[7] me"
    ];
    $verse2 = [
        "On $adjectives[1] $nouns[4] I $verbs[11] $verbs[12]",
        "I $verbs[13] on a $adjectives[2] $nouns[5]",
        "I $verbs[14] at the $nouns[6] of $nouns[7]",
        "I $verbs[15] you more than $nouns[8]"
    ];
    $verse3 = [
        "And $nouns[9] $verbs[16] when you're not yet done",
        "With the $nouns[10] $verbs[17] by, but",
        "I don't $verbs[9] I could $verbs[10] to be",
        "Where you don't $verbs[7] me"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $songInfo ?></title>
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- internal css -->
    <style>
        body {
            font-family: "Montserrat", sans-serif;
            margin: 20px;
            background-image: linear-gradient(to right, #494848,rgb(155, 155, 155));
            color: white;
        }
        .song-container {
            display: grid;
        }
        .song-info img {
            justify-self: right;
        }
        .song-info {
            justify-self: right;
        }
        .lyrics {
            justify-self: left;
        }
    </style>
</head>
<body>
    <!-- main container -->
    <div class="song-container">
        <h1><?= $title ?></h1>
        <!-- main info about song -->
        <div class="song-info">
            <img src="https://t2.genius.com/unsafe/197x197/https%3A%2F%2Fimages.genius.com%2F8aafb91d485accd94ca130c8164393c7.608x608x1.jpg">
            <p><b>Artist:</b> <?= $artist ?></p>
            <p><b>Album:</b> <?= $album ?></p>
            <p><b>Mood:</b> <?= $mood ?></p>
            <p><em>(Song Information combined: <?= $songInfo ?>)</em></p>
        </div>
        <br>
        <div class="lyrics">
            <!-- start of lyrics -->
            <h2>Lyrics</h2>
            <!-- verse1 -->
            <div class="verse">
                <p><em>[Verse 1]</em></p>
                <!-- print each line in verse -->
                <p><?= $verse1[0] ?></p>
                <p><?= $verse1[1] ?></p>
                <p><?= $verse1[2] ?></p>
                <p><?= $verse1[3] ?></p>
            </div>
            <br>
            <!-- chorus -->
            <div class="chorus">
                <p><em>[Chorus]</em></p>
                <?php
                    // loop to print chorus the required number of times
                    for($i = 0; $i < $repeatChorus; $i++){
                        // print each line in chorus
                        foreach ($chorus as $line) { echo "<p>" . $line; }
                    }
                ?>
            </div>
            <br>
            <!-- verse2 -->
            <div class="verse">
                <p><em>[Verse 2]</em></p>
                <p><?= $verse2[0] ?></p>
                <p><?= $verse2[1] ?></p>
                <p><?= $verse2[2] ?></p>
                <p><?= $verse2[3] ?></p>
            </div>
            <br>
            <!-- chorus -->
            <div class="chorus">
                <p><em>[Chorus]</em></p>
                <?php
                    for($i = 0; $i < $repeatChorus; $i++){
                        foreach ($chorus as $line) { echo "<p>" . $line; }
                    }
                ?>
            </div>
            <br>
            <!-- verse3 -->
            <div class="verse">
                <p><em>[Outro]</em></p>
                <p><?= $verse3[0] ?></p>
                <p><?= $verse3[1] ?></p>
                <p><?= $verse3[2] ?></p>
                <p><?= $verse3[3] ?></p>
            </div>
        </div>
    </div>
</body>
</html>