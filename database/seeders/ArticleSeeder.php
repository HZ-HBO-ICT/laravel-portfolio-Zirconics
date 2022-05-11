<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')-> insert([
            [
                'title' => 'SWOT Analyse',
                'excerpt' => 'Strengths, Weaknesses, Opportunities and Threats analysis',
                'body' => 'Strengths: perseverance (If I want something, then I try my best to achieve it),
                           Focused (can work for long time on 1 task/assignment),
                           Team player (besides working independently I can also work well in groups).
                           Weaknesses: Too focused (too focused on 1 task,
                           sometimes causing me to overlook other (smaller) tasks),
                           Too flexible towards uncooperative group members.
                           Opportunities: Learning lots in the field of ICT.
                           Threats: demotivated by group members
                           (If I am grouped with unmotivated students I tend to be less motivated).'
            ],
            [
                'title' => 'Study Choice',
                'excerpt' => 'Why did I decide to study HBO-ICT',
                'body' => 'Before I started my study at HZ I visited several schools including
                           HZ(HBO-ICT) and Avans(Informatics / Technical Informatics).
                           Besides visiting I also made several online study choice
                           tests and tried to do some programming myself.
                           This made me chose HBO-ICT because I have always been
                           interested in how computers and the programs on them work.
                           That is because I like to find out how the different
                           components work together and to play around with them.
                           Then I like to see what can be made with it all.
                           I have also tried to make small games with the help of YouTube tutorials.'
            ],
            [
                'title' => 'ICT Career',
                'excerpt' => 'ICT career day on HZ location with Hacker One',
                'body' => 'HackerOne focuses a lot on cyber security,
                           HackerOne is a vulnerability coordination and bug bounty platform
                           that connects businesses with penetration testers and cybersecurity researchers.
                           They do this to ensure that systems do not contain leaks.
                           they have done this for Nintendo, PayPal,
                           Starbucks and even the Department of Defense in America,
                           among others.The roles in the company are very divided.
                           For example, there are several groups that generally consist of eight people.
                           The various roles within the company involve:
                           Engineer, Technical Director, Security Engineer,
                           Security Consultant, Security Software Developer, Software Developer.'
            ],
            [
                'title' => 'First Feedback',
                'excerpt' => 'Feedback from Daphne at the beginning of the year',
                'body' => 'From reading this, you know very well what attracts you to ICT.
                           Is game development also something that attracts you extra to
                           do or was that more hobby and see if you could pull it off?
                           I see that you did a year of HBO information at Avans. Was
                           that through the AD or a full-time HBO course?
                           and what makes you make a switch to us? You indicate that you
                           can be too lenient towards group members who are less motivated for their studies.
                           I then read, you let the situation take its course and are less likely to
                           take action to stand up for yourself, is that right?
                           You never know what kind of group you will end up in but what are actions
                           that can be done in the team so that all noses and expectations match?
                           What could you do yourself to ensure that it does not affect your study
                           results and motivation? After I read the feedback, I found that some
                           points came across differently than I had initially intended.
                           This is because I mentioned some points but did not elaborate on them,
                           which led to miss-communication.
                           In spite of this, there were some remarks that I could use.'
            ],
            [
                'title' => 'Programming Experience',
                'excerpt' => 'An article where I talk about my experiences with programming',
                'body' => 'Before I started at HZ I studied for a year at Avans HBO Informatica.
                           There, I made several projects. These projects involved:
                           A website (made with HTML, CSS, JS and Bootstrap),
                           A Windows application written in Java with a MySQL database link,
                           An Android application written in Java where information about
                           movies and series was retrieved and displayed using an API(TheMovieDB),
                           An API written in JS, This used Node.js, Npm, Mocha, Chai, MySQL and JWT,
                           A PWA written in Vue.js, PHP, JS and HTML (This was a project for an employer.
                           This project is online and can be found at https://www.1t3.nl/).
                           For many of these projects, we were taught how to work with Git.
                           Besides these project I tried to make a small game in Unity using YouTube tutorials.'
            ]
        ]);
    }
}
