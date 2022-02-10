<?php
// Author : Kanai Shil
// Author URI: https://ksconsultant.online

$urls = [
    'https://technews.cehpoint.co.in/index.php/page/3/',
    'https://technews.cehpoint.co.in/section/cyber-crime-news/feed/',
    'https://technews.cehpoint.co.in/2021/08/20/socat-for-pentester/feed/',
    'https://technews.cehpoint.co.in/feed/',
    'https://technews.cehpoint.co.in/section/tech-and-gadgets/feed/',
    'https://technews.cehpoint.co.in/author/kunal/feed/',
    'https://technews.cehpoint.co.in/2021/08/03/getting-start-with-bug-bounty/feed/',
    'https://technews.cehpoint.co.in/author/jit/feed/',
    'https://technews.cehpoint.co.in/2021/09/27/knife-hackthebox-walkthrough/feed/',
    'https://technews.cehpoint.co.in/home/feed/',
    'https://technews.cehpoint.co.in/section/top-news/feed/',
    'https://technews.cehpoint.co.in/2021/08/12/tool-explained-hydra/feed/',
    'https://technews.cehpoint.co.in/tutorials/hack-the-box-hacking-battlegrounds-cyber-mayhem-gameplay-with-ippsec/feed/',
    'https://technews.cehpoint.co.in/2021/12/01/cybersecurity-career-why-should-you-pursue-a-cyber-security-career/feed/'
];
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

for ($i = 0; $i < count($urls); $i++) {
    if ($urls[$i] == $actual_link) {
        header('location:/');
        die(); 
    }
}
