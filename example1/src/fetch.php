<?php

$topStoriesUrl = "https://hacker-news.firebaseio.com/v0/askstories.json?print=pretty";
$storyUrl = "https://hacker-news.firebaseio.com/v0/item/[id].json?print=pretty";
$stories = [];

$storyIds = json_decode(file_get_contents($topStoriesUrl), true);

foreach($storyIds as $id) {
  $url = str_replace('[id]', $id, $storyUrl);
  $stories[] = json_decode(file_get_contents($url), true);
}

file_put_contents(__DIR__.'/stories.json', json_encode($stories));
