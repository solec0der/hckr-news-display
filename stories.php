<?php


$topStoriesURL = 'https://hacker-news.firebaseio.com/v0/topstories.json?print=pretty';

$topStories = json_decode(file_get_contents($topStoriesURL), true);

$storyRetrievalURL = "https://hacker-news.firebaseio.com/v0/item/" . $topStories[random_int(0, sizeof($topStories))] . ".json?print=pretty";

$topStory = file_get_contents($storyRetrievalURL);

echo $topStory;

